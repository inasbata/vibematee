<?php
/**
 * Template Name: Détails Événement
 */
get_header();
?>

<!-- Page Détails Événement -->
<div class="event-details-page">
    <!-- Bannière en haut -->
    <div class="event-details-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" alt="POP X Banner">
    </div>

    <div class="container-fluid event-details-container">
        <!-- Section Détails de l'événement -->
        <div class="event-details-header">
            <div class="event-details-info">
                <h1 class="event-details-title">POP X</h1>
                <div class="event-details-meta">
                    <div class="event-meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                            <path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                        <span>Pilar</span>
                    </div>
                    <div class="event-meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                            <rect x="3" y="5" width="18" height="16" rx="2"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                            <line x1="8" y1="3" x2="8" y2="5"/>
                            <line x1="16" y1="3" x2="16" y2="5"/>
                        </svg>
                        <span>Jan 17 from 9pm to 11pm GMT+1</span>
                    </div>
                </div>
            </div>
            <div class="event-details-actions">
                <a href="<?php echo esc_url(get_create_group_url()); ?>" class="event-create-group-btn">Créer un groupe</a>
                <button class="event-like-btn" aria-label="Ajouter aux favoris">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Section Présentation -->
        <div class="event-section">
            <h2 class="event-section-title">Présentation</h2>
            <div class="event-presentation-content">
                <p>POP X débarque à Bruxelles avec une TOURNÉE EUROPÉENNE, prêt à transformer le Pilar Bruxelles en une expérience immersive, débridée et libératrice.</p>
                <p>Ce grand retour tant attendu fait suite à des années de concerts explosifs qui ont fait de Pop X l'un des groupes les plus imprévisibles, radicaux et magnétiques de la scène électronique et it-pop contemporaine. Attendez-vous à des vagues électro, des moments surréalistes et une performance hors du commun.</p>
            </div>
        </div>

        <!-- Section Catégorie -->
        <div class="event-section">
            <p class="event-category">Catégorie: Alternative</p>
        </div>

        <!-- Section Bon à savoir -->
        <div class="event-section">
            <h2 class="event-section-title">Bon à savoir</h2>
            <div class="event-info-cards">
                <div class="event-info-card">
                    <h3 class="event-info-card-title">Highlights</h3>
                    <div class="event-info-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span>2 heures</span>
                    </div>
                    <div class="event-info-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <span>En personne</span>
                    </div>
                </div>
                <div class="event-info-card">
                    <h3 class="event-info-card-title">Politique de remboursement</h3>
                    <p class="event-info-text">Pas de remboursement</p>
                </div>
            </div>
        </div>

        <!-- Section Rejoindre un groupe -->
        <div class="event-section">
            <h2 class="event-section-title">Rejoindre un groupe</h2>
            <div class="event-groups-grid">
                <div class="event-group-card">
                    <div class="event-group-card-header">
                        <img class="event-group-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Auro Drouard</span>
                        <span class="event-group-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true" width="16" height="16"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1
                        </span>
                    </div>
                    <img class="event-group-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" alt="POP X">
                    <div class="event-group-card-body">
                        <div class="event-group-title">POP X</div>
                        <div class="event-group-location">Pilar</div>
                        <div class="event-group-date">Jan 17 from 9pm to 11pm GMT+1</div>
                        <div class="event-group-actions">
                            <button class="event-group-join-btn">Rejoindre</button>
                            <button class="event-group-like-btn" aria-label="Ajouter aux favoris">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="event-group-card">
                    <div class="event-group-card-header">
                        <img class="event-group-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Noura Haddad</span>
                        <span class="event-group-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true" width="16" height="16"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1
                        </span>
                    </div>
                    <img class="event-group-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" alt="POP X">
                    <div class="event-group-card-body">
                        <div class="event-group-title">POP X</div>
                        <div class="event-group-location">Pilar</div>
                        <div class="event-group-date">Jan 17 from 9pm to 11pm GMT+1</div>
                        <div class="event-group-actions">
                            <button class="event-group-join-btn">Rejoindre</button>
                            <button class="event-group-like-btn" aria-label="Ajouter aux favoris">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="event-group-card">
                    <div class="event-group-card-header">
                        <img class="event-group-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Noura Haddad</span>
                        <span class="event-group-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true" width="16" height="16"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            1
                        </span>
                    </div>
                    <img class="event-group-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" alt="POP X">
                    <div class="event-group-card-body">
                        <div class="event-group-title">POP X</div>
                        <div class="event-group-location">Pilar</div>
                        <div class="event-group-date">Jan 17 from 9pm to 11pm GMT+1</div>
                        <div class="event-group-actions">
                            <button class="event-group-join-btn">Rejoindre</button>
                            <button class="event-group-like-btn" aria-label="Ajouter aux favoris">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

