<?php
/**
 * Template Name: Register Template
 */
get_header();
?>

<div class="register-page-wrapper min-vh-100 d-flex py-4 py-lg-5" style="background: url('<?php echo esc_url( get_template_directory_uri() . '/image/homepagefinal.png' ); ?>') center center / cover no-repeat #000000;">
    <div class="container-fluid g-0">
        <div class="row g-0 h-100">
            <!-- Colonne gauche - Branding -->
            <div class="col-12 col-lg-8 register-branding position-relative">
                <div class="branding-content text-white">
                    <h1 class="brand-title mb-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/logo blanc.svg' ); ?>" alt="VibeMate" class="brand-logo" />
                    </h1>
                    <p class="brand-tagline">Trouve les personnes<br>qui vibrent comme toi</p>
                </div>
            </div>

            <!-- Colonne droite - Formulaire -->
            <div class="col-12 col-lg-4 register-form-section d-flex align-items-center justify-content-center py-4 pe-lg-5">
                <div class="register-form-glass-card w-100 px-4 px-lg-5 py-5">
                    <p class="text-white mb-3 small">
                        T'as déjà un compte ? <a href="<?php echo esc_url(home_url('/login')); ?>" class="text-white text-decoration-underline">connecte-toi ici!</a>
                    </p>

                    <h2 class="register-title text-white mb-4">Inscris-toi et trouve ton mate !</h2>

                    <?php
                    if (isset($_GET['registration']) && $_GET['registration'] == 'success') {
                        echo '<div class="alert alert-success mb-4">Inscription réussie ! Vous pouvez maintenant vous connecter.</div>';
                    }
                    if (isset($_GET['registration']) && $_GET['registration'] == 'error') {
                        echo '<div class="alert alert-danger mb-4">L\'inscription a échoué. Veuillez réessayer.</div>';
                    }
                    if (is_user_logged_in()) {
                        echo '<div class="alert alert-success mb-4">Tu es déjà connecté. <a href="' . wp_logout_url(home_url()) . '">Se déconnecter</a></div>';
                    } else {
                    ?>

                        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" class="register-form">
                            <?php wp_nonce_field('register_action', 'register_nonce'); ?>

                            <div class="mb-3">
                                <label for="last_name" class="form-label text-white">Nom</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Entre ton nom..." required>
                            </div>

                            <div class="mb-3">
                                <label for="first_name" class="form-label text-white">Prénom</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Entre ton prénom..." required>
                            </div>

                            <div class="mb-3">
                                <label for="user_email" class="form-label text-white">Adresse mail</label>
                                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Entre ton adresse mail..." required>
                            </div>

                            <div class="mb-3">
                                <label for="user_pass" class="form-label text-white">Mot de passe</label>
                                <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Entre ton mot de passe..." required>
                            </div>

                            <div class="mb-3">
                                <label for="user_pass_confirm" class="form-label text-white">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" name="user_pass_confirm" id="user_pass_confirm" placeholder="Entre ton mot de passe..." required>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="privacy_policy" id="privacy_policy" required>
                                    <label class="form-check-label text-white" for="privacy_policy">
                                        J'accepte la politique de confidentialité
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter">
                                    <label class="form-check-label text-white" for="newsletter">
                                        Je reçois les meilleures offres par mail!
                                    </label>
                                </div>
                            </div>

                            <input type="hidden" name="user_login" id="user_login" value="">

                            <button type="submit" name="register_submit" class="btn w-100 register-submit-btn">S'inscrire</button>
                        </form>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>