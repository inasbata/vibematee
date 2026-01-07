<?php
/**
 * Template Name: Rejoindre un groupe
 */
get_header();
?>

<div class="rejoindre-un-groupe-page">
    <div class="container-fluid px-0">
        <!-- Bannière principale avec 3 personnes -->
        <div class="group-banner-section">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/POPX.jpeg' ); ?>" alt="Groupe" class="group-banner-image" />
        </div>

        <!-- Section profil et actions -->
        <div class="group-profile-section container py-4">
            <div class="row align-items-center mb-4">
                <div class="col-auto">
                    <div class="group-profile-picture">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/pexels-kebs-visuals-742415-3992656.jpg' ); ?>" alt="Awa Diabaté" class="profile-img" />
                    </div>
                </div>
                <div class="col">
                    <h2 class="group-profile-name">Awa Diabaté</h2>
                    <p class="group-spots-left">Il reste 4 place(s)</p>
                </div>
                <div class="col-auto d-flex gap-2">
                    <button class="btn btn-join-group">Rejoindre</button>
                    <button class="btn btn-favorite-group" type="button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="heart-icon">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="none" stroke="white" stroke-width="2" class="heart-path"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Description du groupe -->
            <div class="group-description-section mb-4">
                <h3 class="group-section-title">Description du groupe</h3>
                <p class="group-description-text">
                    Je vais voir POP X au Pilar Bruxelles pour leur tournée européenne et j'ai envie de partager ça avec des gens motivés. Leur concert promet une vraie expérience : électro, it-pop, énergie brute et moments complètement imprévisibles.
                </p>
                <p class="group-description-text">
                    Si t'aimes les concerts qui sortent du cadre, l'ambiance festival et les soirées qui marquent, rejoins-moi et on vit ça ensemble 🔥
                </p>
            </div>

            <!-- Critères du groupe -->
            <div class="group-criteria-section mb-4">
                <h3 class="group-section-title">Critères du groupe</h3>
                <div class="d-flex flex-wrap gap-2">
                    <span class="group-criteria-badge">18 à 23 ans</span>
                    <span class="group-criteria-badge">Mixte</span>
                    <span class="group-criteria-badge">Sociable</span>
                    <span class="group-criteria-badge">Français</span>
                </div>
            </div>
        </div>

        <!-- Carte événement -->
        <div class="group-event-card container mb-5 pb-5">
            <div class="event-card">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h2 class="event-title">POP X</h2>
                    <div class="event-price">25,31€</div>
                </div>
                <div class="event-details mb-3">
                    <div class="event-detail-item mb-2">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="event-icon">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="white"/>
                        </svg>
                        <span>Pilar</span>
                    </div>
                    <div class="event-detail-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="event-icon">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" fill="white"/>
                        </svg>
                        <span>Jan 17 from 9pm to 11pm GMT+1</span>
                    </div>
                </div>
                <button class="btn btn-event-details">Détails</button>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>