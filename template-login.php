<?php
/**
 * Template Name: Login Template
 */
get_header();
?>

<div class="register-page-wrapper login-page min-vh-100 d-flex py-4 py-lg-5" style="background: url('<?php echo esc_url( get_template_directory_uri() . '/image/homepagefinal.png' ); ?>') center center / cover no-repeat #000000;">
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
                        Pas encore de compte ? <a href="<?php echo esc_url(home_url('/signup')); ?>" class="text-white text-decoration-underline">Inscris-toi ici!</a>
                    </p>

                    <h2 class="register-title text-white mb-4">Connecte-toi et retrouve ton mate !</h2>

                    <?php
                    if (isset($_GET['login']) && $_GET['login'] == 'failed') {
                        echo '<div class="error-message">Identifiants incorrects.</div>';
                    }
                    if (isset($_GET['login']) && $_GET['login'] == 'empty') {
                        echo '<div class="error-message">Merci de remplir tous les champs.</div>';
                    }
                    if (is_user_logged_in()) {
                        echo '<div class="success-message">Tu es déjà connecté. <a href="' . wp_logout_url(home_url()) . '">Se déconnecter</a></div>';
                    } else {
                    ?>

                        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" class="register-form">
                            <?php wp_nonce_field('login_action', 'login_nonce'); ?>

                            <div class="mb-3">
                                <label for="user_login" class="form-label text-white">Email ou identifiant</label>
                                <input type="text" class="form-control" name="log" id="user_login" placeholder="Entre ton email..." required>
                            </div>

                            <div class="mb-3">
                                <label for="user_pass" class="form-label text-white">Mot de passe</label>
                                <input type="password" class="form-control" name="pwd" id="user_pass" placeholder="Entre ton mot de passe..." required>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="rememberme" value="forever" id="rememberme">
                                    <label class="form-check-label text-white" for="rememberme">
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>

                            <button type="submit" name="login_submit" class="btn w-100 register-submit-btn">Se connecter</button>
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