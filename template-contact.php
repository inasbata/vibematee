<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<div class="contact-page">
    <div class="container-fluid">
        <div class="row g-0 min-vh-100">
            <!-- Colonne gauche - Formulaire -->
            <div class="col-12 col-lg-6 contact-form-section d-flex align-items-center justify-content-center py-5">
                <div class="contact-form-card">
                    <h1 class="contact-form-title">Nous contacter</h1>
                    <form class="contact-form">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Prénom" name="first_name" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nom" name="last_name" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Adresse mail" name="email" required />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Sujet" name="subject" required />
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" placeholder="..." name="message" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Soumettre</button>
                    </form>
                </div>
            </div>

            <!-- Colonne droite - Image -->
            <div class="col-12 col-lg-6 contact-images-section d-flex align-items-center justify-content-center">
                <div class="contact-image-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/image/test1.png' ); ?>" alt="Contact" class="contact-image-single" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>