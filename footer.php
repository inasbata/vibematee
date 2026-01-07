    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4 footer-brand">
                    <div class="d-flex flex-column align-items-start gap-3">
                        <div class="footer-logo">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/logo V blanc.svg' ); ?>" alt="VibeMate logo" />
                        </div>
                        <div class="footer-text">
                            <h2 class="footer-title">VibeMate</h2>
                            <p class="footer-description">
                                Notre plateforme connecte les jeunes passionnés de musique en Belgique pour partager concerts,
                                festivals et soirées selon leurs goûts. Grâce à des profils personnalisés, des recommandations,
                                des groupes de discussion et la création d’événements, elle facilite les rencontres et offre une
                                expérience interactive et sécurisée.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-2 footer-links">
                    <h3>Liens rapides</h3>
                    <ul class="list-unstyled">
                        <li><a href="/">Page d’accueil</a></li>
                        <li><a href="#">Les événements</a></li>
                        <li><a href="#">Perfect VibeMate</a></li>
                        <li><a href="#">Notre histoire</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-3 col-lg-2 footer-links">
                    <h3>Liens utiles</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Nous contacter</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-12 col-lg-4 footer-newsletter-block">
                    <h3>Newsletter</h3>
                    <form class="footer-newsletter" action="#" method="post">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="postal_code" placeholder="Code postal" aria-label="Code postal">
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email">
                        </div>
                        <button type="submit" class="btn w-100 mb-2">S’abonner</button>
                        <div class="form-check footer-consent">
                            <input class="form-check-input" type="checkbox" name="consent" id="footer-consent">
                            <label class="form-check-label" for="footer-consent">
                                J’accepte de recevoir vos e-mails et confirme avoir pris connaissance de votre politique de confidentialité et mentions légales
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>