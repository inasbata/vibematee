<?php
/**
 * Template Name: Groupe
 */
get_header();
?>

<!-- Page Créer un groupe -->
<div class="create-group-page">
    <div class="container-fluid create-group-container">
        <!-- Titre -->
        <h1 class="create-group-title">Création du groupe</h1>

        <!-- Bannière avec image et texte overlay -->
        <div class="create-group-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" alt="Event Banner">
            <div class="banner-overlay-text">
                <div class="banner-location-large">BRUSSELS (BE)</div>
                <div class="banner-location-small">Pilar</div>
            </div>
        </div>

        <!-- Section Infos -->
        <div class="create-group-section">
            <h2 class="section-title">Infos</h2>
            <div class="info-cards">
                <div class="info-card info-card-large">
                    <div class="info-card-content">
                        <div class="info-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                                <path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                            <span>Pilar</span>
                        </div>
                        <div class="info-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                                <line x1="8" y1="3" x2="8" y2="5"/>
                                <line x1="16" y1="3" x2="16" y2="5"/>
                            </svg>
                            <span>Jan 17 from 9pm to 11pm GMT+1</span>
                        </div>
                    </div>
                    <div class="info-card-right">
                        <div class="info-price">25,31€ par pers.</div>
                        <a href="<?php echo esc_url(get_event_details_url()); ?>" class="info-details-btn">Détails</a>
                    </div>
                </div>
                <div class="info-card info-card-small">
                    <div class="info-participants">
                        <div class="info-participants-label">Nombres de participants</div>
                        <div class="info-participants-value">2 pers. au max</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Critères du groupe -->
        <div class="create-group-section">
            <h2 class="section-title">Critères du groupe</h2>
            <div class="criteria-buttons">
                <button class="criteria-btn" data-criteria="caractere">
                    <span>Caractère</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>
                <button class="criteria-btn" data-criteria="personnalite">
                    <span>Personnalité</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>
                <button class="criteria-btn" data-criteria="experience">
                    <span>Expérience</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>
                <button class="criteria-btn" data-criteria="langue">
                    <span>Langue</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>
                <button class="criteria-btn" data-criteria="avec-qui">
                    <span>Avec qui ?</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Section Description -->
        <div class="create-group-section">
            <h2 class="section-title">Description</h2>
            <textarea class="description-textarea" placeholder="Saisis une description" rows="8"></textarea>
        </div>

        <!-- Bouton Valider -->
        <div class="create-group-actions">
            <button class="validate-btn">Valider</button>
        </div>
    </div>
</div>

<?php
get_footer();
?>

