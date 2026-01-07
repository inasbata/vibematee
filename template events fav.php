<?php
/**
 * Template Name: Events Favorites
 */
get_header();
?>

<div class="events-favorites-page">
    <div class="container py-4">
        <!-- Titre -->
        <h1 class="events-favorites-title">
            Mes <span class="title-highlight">événements</span> favoris
        </h1>

        <!-- Grille des événements -->
        <div class="events-grid">
            <!-- Événement 1 -->
            <div class="event-card">
                <div class="event-card-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/image/event-placeholder-1.jpg' ); ?>" alt="A PARTY IN DA HAPPY!" class="event-img" />
                </div>
                <div class="event-card-content">
                    <h3 class="event-card-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</h3>
                    <div class="event-card-details">
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" fill="white"/>
                            </svg>
                            <span>Demain à 18h</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="white"/>
                            </svg>
                            <span>Av. du Port 86C</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M7.5 11.5c0-1.1.9-2 2-2h5c1.1 0 2 .9 2 2V13h-9v-1.5zm9-5V6c0-1.1-.9-2-2-2h-5c-1.1 0-2 .9-2 2v.5h9zM19 13h-3v-1.5c0-1.93-1.57-3.5-3.5-3.5h-5C5.57 8 4 9.57 4 11.5V13H1v8h18v-8z" fill="white"/>
                            </svg>
                            <span>À partir de 16,66€</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Événement 2 -->
            <div class="event-card">
                <div class="event-card-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/image/event-placeholder-2.jpg' ); ?>" alt="OLD SCHOOL VIBES BELGIUM" class="event-img" />
                </div>
                <div class="event-card-content">
                    <h3 class="event-card-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</h3>
                    <div class="event-card-details">
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" fill="white"/>
                            </svg>
                            <span>Demain à 18h</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="white"/>
                            </svg>
                            <span>Av. du Port 86C</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M7.5 11.5c0-1.1.9-2 2-2h5c1.1 0 2 .9 2 2V13h-9v-1.5zm9-5V6c0-1.1-.9-2-2-2h-5c-1.1 0-2 .9-2 2v.5h9zM19 13h-3v-1.5c0-1.93-1.57-3.5-3.5-3.5h-5C5.57 8 4 9.57 4 11.5V13H1v8h18v-8z" fill="white"/>
                            </svg>
                            <span>À partir de 16,66€</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Événement 3 -->
            <div class="event-card">
                <div class="event-card-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/image/event-placeholder-3.jpg' ); ?>" alt="NEW YEARS EVE PART" class="event-img" />
                </div>
                <div class="event-card-content">
                    <h3 class="event-card-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</h3>
                    <div class="event-card-details">
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" fill="white"/>
                            </svg>
                            <span>Demain à 18h</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="white"/>
                            </svg>
                            <span>Av. du Port 86C</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M7.5 11.5c0-1.1.9-2 2-2h5c1.1 0 2 .9 2 2V13h-9v-1.5zm9-5V6c0-1.1-.9-2-2-2h-5c-1.1 0-2 .9-2 2v.5h9zM19 13h-3v-1.5c0-1.93-1.57-3.5-3.5-3.5h-5C5.57 8 4 9.57 4 11.5V13H1v8h18v-8z" fill="white"/>
                            </svg>
                            <span>À partir de 16,66€</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Événement 4 -->
            <div class="event-card">
                <div class="event-card-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/image/event-placeholder-4.jpg' ); ?>" alt="NEW WAVE" class="event-img" />
                </div>
                <div class="event-card-content">
                    <h3 class="event-card-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</h3>
                    <div class="event-card-details">
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" fill="white"/>
                            </svg>
                            <span>Demain à 18h</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="white"/>
                            </svg>
                            <span>Av. du Port B6C</span>
                        </div>
                        <div class="event-detail">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-icon">
                                <path d="M7.5 11.5c0-1.1.9-2 2-2h5c1.1 0 2 .9 2 2V13h-9v-1.5zm9-5V6c0-1.1-.9-2-2-2h-5c-1.1 0-2 .9-2 2v.5h9zM19 13h-3v-1.5c0-1.93-1.57-3.5-3.5-3.5h-5C5.57 8 4 9.57 4 11.5V13H1v8h18v-8z" fill="white"/>
                            </svg>
                            <span>À partir de 16,66€</span>
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