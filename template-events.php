<?php
/**
 * Template Name: Events
 */
get_header();
?>
<!-- Page Events -->
<div class="events-page-new">
    <div class="container-fluid">
        <!-- Titre Events en haut à droite -->
        <div class="row">
            <div class="col-12">
                <h1 class="events-page-title"><span class="events-title-orange">Events</span></h1>
            </div>
        </div>
        
        <!-- Grille d'événements en 2 colonnes -->
        <div class="row events-grid justify-content-center">
            <!-- Colonne 1 - Gauche -->
            <div class="col-lg-5 col-md-5 events-column">
                <!-- Carte 1 -->
                <div class="event-card-new">
                    <div class="event-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1170262407-2573825772631-1-original.20251105-225643.jpeg" alt="Roller Party">
                    </div>
                    <div class="event-card-content">
                        <h3 class="event-card-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</h3>
                        <p class="event-card-description">Des bat bon an Des bat bon An du bon HBC</p>
                        <a href="<?php echo esc_url(get_event_details_url()); ?>" class="event-card-button">Détails</a>
                    </div>
                </div>
                
                <!-- Carte 2 -->
                <div class="event-card-new">
                    <div class="event-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171232278-288138124246-1-original.20251118-123706.jpeg" alt="Tarmac Party">
                    </div>
                    <div class="event-card-content">
                        <h3 class="event-card-title">SOIREE TARMAC - TARMAC PARTY</h3>
                        <p class="event-card-description">Des bat bon an Des bat bon An du bon HBC</p>
                        <a href="<?php echo esc_url(get_event_details_url()); ?>" class="event-card-button">Détails</a>
                    </div>
                </div>
                
                <!-- Carte 3 -->
                <div class="event-card-new">
                    <div class="event-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" alt="Pop X">
                    </div>
                    <div class="event-card-content">
                        <h3 class="event-card-title">POP X</h3>
                        <p class="event-card-description">Des bat bon an Des bat bon An du bon HBC</p>
                        <a href="<?php echo esc_url(get_event_details_url()); ?>" class="event-card-button">Détails</a>
                    </div>
                </div>
            </div>
            
            <!-- Colonne 2 - Droite -->
            <div class="col-lg-5 col-md-5 events-column">
                <!-- Carte 4 -->
                <div class="event-card-new">
                    <div class="event-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1059497733-1445950664583-1-original.20250624-145420.jpeg" alt="Old School Vibes">
                    </div>
                    <div class="event-card-content">
                        <h3 class="event-card-title">OLD SCHOOL VIBES BELGIUM</h3>
                        <p class="event-card-description">Des bat bon an Des bat bon An du bon HBC</p>
                        <a href="<?php echo esc_url(get_event_details_url()); ?>" class="event-card-button">Détails</a>
                    </div>
                </div>
                
                <!-- Carte 5 -->
                <div class="event-card-new">
                    <div class="event-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171718297-2633130701391-1-original.20251125-123117.jpeg" alt="Événement 1">
                    </div>
                    <div class="event-card-content">
                        <h3 class="event-card-title">XXXOUDN IN DA HOTEL 2.0</h3>
                        <p class="event-card-description">Des bat bon an Des bat bon An du bon HBC</p>
                        <a href="<?php echo esc_url(get_event_details_url()); ?>" class="event-card-button">Détails</a>
                    </div>
                </div>
                
                <!-- Carte 6 -->
                <div class="event-card-new">
                    <div class="event-card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1172190707_2311322005533_1_original.jpeg" alt="Événement 2">
                    </div>
                    <div class="event-card-content">
                        <h3 class="event-card-title">Afrobase: 9th Anniversary</h3>
                        <p class="event-card-description">Des bat bon an Des bat bon An du bon HBC</p>
                        <a href="<?php echo esc_url(get_event_details_url()); ?>" class="event-card-button">Détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>
