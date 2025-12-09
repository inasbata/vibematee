<!-- .github/copilot-instructions.md - Guidance for AI coding agents working on this theme -->

# Quick orientation

- This repository is a small WordPress theme (PHP) located at the theme root. Key files:
  - `functions.php` — theme setup, asset enqueueing, and all custom logic for registration/login and user meta.
  - `header.php` / `footer.php` / `index.php` — basic theme wrapper and template includes.
  - `template-login.php`, `template-register.php`, `template-userprofil.php` — custom page templates used for auth flows.
  - `assets/css/main.css` and `assets/js/main.js` — static front-end styles and small JS.

# Big picture & why

- This is a theme, not a plugin: server-side behavior is implemented inside `functions.php` and tied to WordPress hooks. There is no build system.
- Authentication and user management are implemented directly in the theme via POST handlers hooked to `template_redirect`. The theme creates users (`wp_create_user`), updates user meta, and signs users in via `wp_signon`.

# Important patterns & conventions (do not change lightly)

- Form -> POST -> same-page handling
  - Templates post to the current URL: `action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>"`.
  - Nonces: login uses `wp_nonce_field('login_action','login_nonce')`, register uses `wp_nonce_field('register_action','register_nonce')`. Verify these names when adding/removing checks.
  - Submit button names: `login_submit` and `register_submit` are used to detect flows in `functions.php`.

- User meta and admin columns
  - Custom fields: `phone` and `student_id` are saved to user meta and surfaced in admin via `manage_users_columns` / `manage_users_custom_column` filters.

- Redirects and feedback
  - Templates read query params like `?registration=success` or `?login=failed` to show messages. Registration/login handlers use `wp_redirect(home_url('/signup?registration=success'))` style redirects.

# Key hooks + filters to know

- `after_setup_theme` — `theme_setup()` (post-thumbnails)
- `wp_enqueue_scripts` — `theme_scripts()` (loads `assets/css/main.css`, `assets/js/main.js`)
- `template_redirect` — `handle_user_registration()` and `handle_user_login()` (primary request handlers)
- `login_redirect` — `redirect_after_login()`
- `show_user_profile`, `edit_user_profile`, `personal_options_update`, `edit_user_profile_update` — admin profile fields/save

# Typical dev workflows / quick commands

- There is no JS/CSS build step — edits to `assets/*` are picked up by the theme immediately.
- To test locally: activate the theme in a local WordPress site (Local, MAMP, Valet, etc.), then visit the pages that use templates:
  - `/signup` (register template)
  - `/login` (login template)
  - root/front page for logged-in/out status
- Quick checks (run locally in the theme folder):
  - PHP syntax lint: `php -l functions.php` (or lint whole dir via `find . -name '*.php' -exec php -l {} \\;`)
  - WordPress debug: enable `WP_DEBUG` in the WP config and tail PHP logs to inspect runtime warnings.

# Safe change guidance for an AI

- Prefer small, reversible edits. Many behaviors are implemented in `functions.php` and affect site auth flows; avoid refactors that move logic outside the theme without an explicit migration plan.
- When changing nonce names, update both the template (nonce field) and the handler check (`wp_verify_nonce`).
- When adding fields to registration, ensure sanitization (`sanitize_text_field`, `sanitize_email`, `sanitize_user`) and proper `update_user_meta` / `wp_update_user` calls are used consistently.

# Examples to copy when implementing or modifying features

- Add a new POST field named `affiliation` on register form:
  - Template: add `<input name="affiliation">` and keep the existing `register_nonce`.
  - Handler: in `handle_user_registration()` add `if (isset($_POST['affiliation'])) update_user_meta($user_id, 'affiliation', sanitize_text_field($_POST['affiliation']));`

- Show a registration error: set `wp_redirect(home_url('/signup?registration=error'))` and render message in `template-register.php`.

# Files to open first when investigating a bug

- `functions.php` — primary logic
- `template-register.php`, `template-login.php` — form markup and message handling
- `assets/css/main.css` — UI styling for auth pages

# Notes / missing info to ask the human

- There's no CI, test suite, or CONTRIBUTING doc in the repo. Ask where to run integration tests or staging site if required.
- If you plan to change auth flows, confirm whether persistence outside WordPress (external auth, SSO) is intended.

If anything above is unclear or you want the guidance to include extra examples (e.g., adding unit tests, using WP-CLI commands, or a changelog policy), tell me which sections to expand.
