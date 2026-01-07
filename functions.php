<?php

/**
 * Theme Functions
 */

// Theme setup
function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

// Enqueue styles and scripts
function theme_scripts()
{
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');

    // Typo Brother 1816 (Adobe Fonts)
    wp_enqueue_style('typekit-brother-1816', 'https://use.typekit.net/dda4pew.css', array(), null);

    // Styles du thème (dépendent de Bootstrap et la typo)
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/main.css', array('bootstrap', 'typekit-brother-1816'), '1.0.0');

    // Styles front/register (page d'accueil + template login + template register)
    if (is_front_page() || is_page_template('template-login.php') || is_page_template('template-register.php')) {
        wp_enqueue_style('front-page-style', get_template_directory_uri() . '/assets/css/front-page.css', array('theme-style'), '1.0.1');
    }

    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);

    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js', array('bootstrap'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Enqueue questionnaire assets when the questionnaire template is used
function enqueue_questionnaire_assets()
{
    if (is_page_template('template-questionnaire.php')) {
        wp_enqueue_style('questionnaire-style', get_template_directory_uri() . '/assets/css/questionnaire.css', array(), '1.0.0');
        wp_enqueue_script('questionnaire-script', get_template_directory_uri() . '/assets/js/questionnaire.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_questionnaire_assets');

// Enqueue rejoindre un groupe assets
function enqueue_rejoindre_groupe_assets()
{
    if (is_page_template('template-rejoindreungroupe.php')) {
        wp_enqueue_style('rejoindre-groupe-style', get_template_directory_uri() . '/assets/css/rejoindre-groupe.css', array('theme-style'), '1.0.0');
        wp_enqueue_script('rejoindre-groupe-script', get_template_directory_uri() . '/assets/js/rejoindre-groupe.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_rejoindre_groupe_assets');

// Enqueue profil assets
function enqueue_profil_assets()
{
    if (is_page_template('template-profil.php')) {
        wp_enqueue_style('profil-style', get_template_directory_uri() . '/assets/css/profil.css', array('theme-style'), '1.0.0');
        wp_enqueue_script('profil-script', get_template_directory_uri() . '/assets/js/profil.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_profil_assets');

// Enqueue events favorites assets
function enqueue_events_favorites_assets()
{
    if (is_page_template('template events fav.php')) {
        wp_enqueue_style('events-favorites-style', get_template_directory_uri() . '/assets/css/events-favorites.css', array('theme-style'), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_events_favorites_assets');

// Enqueue securite assets
function enqueue_securite_assets()
{
    if (is_page_template('template-securite.php')) {
        wp_enqueue_style('securite-style', get_template_directory_uri() . '/assets/css/securite.css', array('theme-style'), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_securite_assets');

// Enqueue contact assets
function enqueue_contact_assets()
{
    if (is_page_template('template-contact.php')) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css', array('theme-style'), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_contact_assets');

// Enqueue mention assets
function enqueue_mention_assets()
{
    if (is_page_template('template-mention.php')) {
        wp_enqueue_style('mention-style', get_template_directory_uri() . '/assets/css/mention.css', array('theme-style'), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_mention_assets');

// Handle questionnaire submission
function handle_questionnaire_submission()
{
    if (isset($_POST['questionnaire_submit']) && isset($_POST['questionnaire_nonce']) && wp_verify_nonce($_POST['questionnaire_nonce'], 'questionnaire_action')) {
        $genres = isset($_POST['genres']) && is_array($_POST['genres']) ? array_map('sanitize_text_field', $_POST['genres']) : array();
        $age = isset($_POST['age_range']) ? sanitize_text_field($_POST['age_range']) : '';
        $location = isset($_POST['location']) ? sanitize_text_field($_POST['location']) : '';
        $interests = isset($_POST['interests']) && is_array($_POST['interests']) ? array_map('sanitize_text_field', $_POST['interests']) : array();

        $data = array(
            'genres' => $genres,
            'age_range' => $age,
            'location' => $location,
            'interests' => $interests,
            'timestamp' => current_time('mysql')
        );

        if (is_user_logged_in()) {
            $user_id = get_current_user_id();
            update_user_meta($user_id, 'onboarding_data', $data);
            update_user_meta($user_id, 'onboarding_complete', 1);
        } else {
            // store in cookie for guests (expires in 30 days)
            setcookie('vibemate_onboard', wp_json_encode($data), time() + 30 * DAY_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);
        }

        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'handle_questionnaire_submission');

// Helper: find the questionnaire page URL (by template) or fallback
function get_questionnaire_page_url()
{
    $pages = get_pages(array(
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'template-questionnaire.php',
        'number'     => 1
    ));

    if (!empty($pages) && isset($pages[0]->ID)) {
        return get_permalink($pages[0]->ID);
    }

    // fallback - ensure you have a page at /questionnaire
    return home_url('/questionnaire');
}

// Helper: find the events favorites page URL (by template) or fallback
function get_events_favorites_page_url()
{
    $pages = get_pages(array(
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'template events fav.php',
        'number'     => 1
    ));

    if (!empty($pages) && isset($pages[0]->ID)) {
        return get_permalink($pages[0]->ID);
    }

    // fallback
    return home_url('/events-favorites');
}

// Helper: find the securite page URL (by template) or fallback
function get_securite_page_url()
{
    $pages = get_pages(array(
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'template-securite.php',
        'number'     => 1
    ));

    if (!empty($pages) && isset($pages[0]->ID)) {
        return get_permalink($pages[0]->ID);
    }

    // fallback
    return home_url('/securite');
}

// Helper: find the profil page URL (by template) or fallback
function get_profil_page_url()
{
    $pages = get_pages(array(
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'template-profil.php',
        'number'     => 1
    ));

    if (!empty($pages) && isset($pages[0]->ID)) {
        return get_permalink($pages[0]->ID);
    }

    // fallback
    return home_url('/profil');
}


// Handle user registration
function handle_user_registration()
{
    if (isset($_POST['register_submit']) && isset($_POST['register_nonce']) && wp_verify_nonce($_POST['register_nonce'], 'register_action')) {
        $email = sanitize_email($_POST['user_email']);
        $password = $_POST['user_pass'];
        $password_confirm = $_POST['user_pass_confirm'];

        // Generate username from email if not provided
        $username = !empty($_POST['user_login']) ? sanitize_user($_POST['user_login']) : sanitize_user(substr($email, 0, strpos($email, '@')));
        
        // Ensure username is unique
        $original_username = $username;
        $counter = 1;
        while (username_exists($username)) {
            $username = $original_username . $counter;
            $counter++;
        }

        if ($password !== $password_confirm) {
            wp_redirect(home_url('?registration=error'));
            exit;
        }

        $user_id = wp_create_user($username, $password, $email);

        if (!is_wp_error($user_id)) {
            // Save custom fields as user meta
            if (isset($_POST['first_name'])) {
                update_user_meta($user_id, 'first_name', sanitize_text_field($_POST['first_name']));
            }
            if (isset($_POST['last_name'])) {
                update_user_meta($user_id, 'last_name', sanitize_text_field($_POST['last_name']));
            }
            if (isset($_POST['phone'])) {
                update_user_meta($user_id, 'phone', sanitize_text_field($_POST['phone']));
            }
            if (isset($_POST['student_id'])) {
                update_user_meta($user_id, 'student_id', sanitize_text_field($_POST['student_id']));
            }

            // Update display name
            $first_name = isset($_POST['first_name']) ? sanitize_text_field($_POST['first_name']) : '';
            $last_name = isset($_POST['last_name']) ? sanitize_text_field($_POST['last_name']) : '';
            if ($first_name || $last_name) {
                wp_update_user(array(
                    'ID' => $user_id,
                    'display_name' => trim($first_name . ' ' . $last_name),
                    'first_name' => $first_name,
                    'last_name' => $last_name
                ));
            }

            wp_redirect(home_url('?registration=success'));
            exit;
        } else {
            wp_redirect(home_url('?registration=error'));
            exit;
        }
    }
}
add_action('template_redirect', 'handle_user_registration');

// Handle user login
function handle_user_login()
{
    if (isset($_POST['login_submit']) && isset($_POST['login_nonce']) && wp_verify_nonce($_POST['login_nonce'], 'login_action')) {
        $username = sanitize_user($_POST['log']);
        $password = $_POST['pwd'];
        $remember = isset($_POST['rememberme']) ? true : false;

        if (empty($username) || empty($password)) {
            wp_redirect(home_url('/login?login=empty'));
            exit;
        }

        $creds = array(
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => $remember
        );

        $user = wp_signon($creds, false);

        if (!is_wp_error($user)) {
            // If user hasn't completed onboarding, redirect them to the questionnaire
            $user_id = is_object($user) && isset($user->ID) ? $user->ID : get_current_user_id();
            $onboard = $user_id ? get_user_meta($user_id, 'onboarding_complete', true) : false;
            if (!$onboard) {
                wp_redirect(get_questionnaire_page_url());
                exit;
            }

            wp_redirect(home_url());
            exit;
        } else {
            wp_redirect(home_url('/login?login=failed'));
            exit;
        }
    }
}
add_action('template_redirect', 'handle_user_login');

// Redirect after login
function redirect_after_login($redirect_to, $request, $user)
{
    if (!is_wp_error($user) && is_object($user) && isset($user->ID)) {
        $onboard = get_user_meta($user->ID, 'onboarding_complete', true);
        if (!$onboard) {
            return get_questionnaire_page_url();
        }
        return home_url();
    }
    return $redirect_to;
}
add_filter('login_redirect', 'redirect_after_login', 10, 3);

// Helper function to get user custom field
function get_user_custom_field($user_id, $field_name)
{
    return get_user_meta($user_id, $field_name, true);
}

// Add custom fields to user profile in admin
function add_custom_user_profile_fields($user)
{
?>
    <h3>Additional Information</h3>
    <table class="form-table">
        <tr>
            <th><label for="phone">Phone Number</label></th>
            <td>
                <input type="tel" name="phone" id="phone" value="<?php echo esc_attr(get_user_meta($user->ID, 'phone', true)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="student_id">Student ID</label></th>
            <td>
                <input type="text" name="student_id" id="student_id" value="<?php echo esc_attr(get_user_meta($user->ID, 'student_id', true)); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
<?php
}
add_action('show_user_profile', 'add_custom_user_profile_fields');
add_action('edit_user_profile', 'add_custom_user_profile_fields');

// Save custom fields in admin
function save_custom_user_profile_fields($user_id)
{
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    if (isset($_POST['phone'])) {
        update_user_meta($user_id, 'phone', sanitize_text_field($_POST['phone']));
    }
    if (isset($_POST['student_id'])) {
        update_user_meta($user_id, 'student_id', sanitize_text_field($_POST['student_id']));
    }
}
add_action('personal_options_update', 'save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'save_custom_user_profile_fields');

// Add custom columns to users list table
function add_custom_user_columns($columns)
{
    $columns['phone'] = 'Phone';
    $columns['student_id'] = 'Student ID';
    return $columns;
}
add_filter('manage_users_columns', 'add_custom_user_columns');

// Display custom column data in users list
function show_custom_user_column_data($value, $column_name, $user_id)
{
    if ($column_name == 'phone') {
        return get_user_meta($user_id, 'phone', true) ?: '—';
    }
    if ($column_name == 'student_id') {
        return get_user_meta($user_id, 'student_id', true) ?: '—';
    }
    return $value;
}
add_filter('manage_users_custom_column', 'show_custom_user_column_data', 10, 3);
