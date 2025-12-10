<?php
/**
 * Template Name: Events Template
 */
get_header();
?>

<!-- Header visuel Events -->
<section class="events-hero">
    <div class="hero-image-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/image/events-header.jpg.png" alt="Bannière des événements" class="hero-image">
        <div class="hero-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/image/logoblanc-vibemate.svg" alt="VibeMate Logo" class="hero-logo-img">
        </div>
    </div>
</section>

<!-- Section Notre concept -->
<section class="concept-section-fullwidth">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="concept-title mb-2">Notre concept</h2>
                <p class="concept-subtitle text-white mb-4">Connecte-toi à ceux qui vibrent comme toi!</p>
            </div>
        </div>
        <div class="row concept-cards-row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-box">
                    <div class="concept-number">1</div>
                    <p class="concept-text">Mettre en lien des passionnés de musique pour partager concerts et festivals en Belgique selon leurs goûts.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-box">
                    <div class="concept-number">2</div>
                    <p class="concept-text">Éviter que des personnes soient seules ou renoncent à participer à des événements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-box">
                    <div class="concept-number">3</div>
                    <p class="concept-text">Outil d'échange et de rencontre pour les jeunes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-box">
                    <div class="concept-number">4</div>
                    <p class="concept-text">Offrir des événements personnalisés et susceptibles de plaire à chaque utilisateur</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <a href="#" class="concept-link">Lire plus</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Events avec background dégradé -->
<div class="events-page py-5">
    <div class="container-fluid px-4 px-lg-5">
        <!-- Section Les meilleures tendances -->
        <section class="events-section mb-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title text-white mb-0">Les meilleures tendances</h2>
                </div>
            </div>
            <div class="row g-3 position-relative">
                <button class="carousel-btn carousel-btn-prev position-absolute start-0 top-50 translate-middle-y z-3" aria-label="Précédent" data-carousel="trends">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <div class="col-12">
                    <div class="row g-3 events-carousel" id="trends-carousel">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=ROLLER+PARTY" class="card-img-top" alt="Roller Party">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">ROLLER PARTY</h5>
                                    <p class="card-text event-date mb-1">15 Mars 2024</p>
                                    <p class="card-text event-location mb-2">Paris, France</p>
                                    <p class="card-text event-price mb-0">25,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=FARMAZ+PARTY" class="card-img-top" alt="Farmaz Party">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">SOIRÉE FARMAZ - FARMAZ PARTY</h5>
                                    <p class="card-text event-date mb-1">22 Mars 2024</p>
                                    <p class="card-text event-location mb-2">Lyon, France</p>
                                    <p class="card-text event-price mb-0">30,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=POP+X" class="card-img-top" alt="Pop X">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">POP X</h5>
                                    <p class="card-text event-date mb-1">28 Mars 2024</p>
                                    <p class="card-text event-location mb-2">Marseille, France</p>
                                    <p class="card-text event-price mb-0">20,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=OLD+SCHOOL" class="card-img-top" alt="Old School Vibes">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">OLD SCHOOL VIBES BELGIUM</h5>
                                    <p class="card-text event-date mb-1">5 Avril 2024</p>
                                    <p class="card-text event-location mb-2">Bruxelles, Belgique</p>
                                    <p class="card-text event-price mb-0">35,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=NEW+YEARS+EVE" class="card-img-top" alt="New Years Eve Party">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">NEW YEARS EVE PARTY</h5>
                                    <p class="card-text event-date mb-1">31 Décembre 2024</p>
                                    <p class="card-text event-location mb-2">Paris, France</p>
                                    <p class="card-text event-price mb-0">50,00 €</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-btn carousel-btn-next position-absolute end-0 top-50 translate-middle-y z-3" aria-label="Suivant" data-carousel="trends">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
            </div>
        </section>

        <!-- Section Événements à 10,00 € -->
        <section class="events-section mb-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title text-white mb-0">Événements à 10,00 €</h2>
                </div>
            </div>
            <div class="row g-3 position-relative">
                <button class="carousel-btn carousel-btn-prev position-absolute start-0 top-50 translate-middle-y z-3" aria-label="Précédent" data-carousel="budget">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <div class="col-12">
                    <div class="row g-3 events-carousel" id="budget-carousel">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=EVENT+1" class="card-img-top" alt="Événement 1">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">ÉVÉNEMENT ÉTUDIANT</h5>
                                    <p class="card-text event-date mb-1">10 Avril 2024</p>
                                    <p class="card-text event-location mb-2">Paris, France</p>
                                    <p class="card-text event-price mb-0">10,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=EVENT+2" class="card-img-top" alt="Événement 2">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">SOIRÉE CAMPUS</h5>
                                    <p class="card-text event-date mb-1">17 Avril 2024</p>
                                    <p class="card-text event-location mb-2">Lyon, France</p>
                                    <p class="card-text event-price mb-0">10,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=EVENT+3" class="card-img-top" alt="Événement 3">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">AFTERWORK MUSICAL</h5>
                                    <p class="card-text event-date mb-1">24 Avril 2024</p>
                                    <p class="card-text event-location mb-2">Marseille, France</p>
                                    <p class="card-text event-price mb-0">10,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=EVENT+4" class="card-img-top" alt="Événement 4">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">DJ SET ÉTUDIANT</h5>
                                    <p class="card-text event-date mb-1">1 Mai 2024</p>
                                    <p class="card-text event-location mb-2">Toulouse, France</p>
                                    <p class="card-text event-price mb-0">10,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <img src="https://via.placeholder.com/300x400/7c3aed/ffffff?text=EVENT+5" class="card-img-top" alt="Événement 5">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">SOIRÉE VIBE</h5>
                                    <p class="card-text event-date mb-1">8 Mai 2024</p>
                                    <p class="card-text event-location mb-2">Nice, France</p>
                                    <p class="card-text event-price mb-0">10,00 €</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-btn carousel-btn-next position-absolute end-0 top-50 translate-middle-y z-3" aria-label="Suivant" data-carousel="budget">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
            </div>
        </section>
    </div>
</div>

<script>
// Fonctionnalité de carrousel avec Bootstrap
document.addEventListener('DOMContentLoaded', function() {
    const carouselButtons = document.querySelectorAll('[data-carousel]');
    
    carouselButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const carouselId = this.getAttribute('data-carousel');
            const carousel = document.getElementById(carouselId + '-carousel');
            const isPrev = this.classList.contains('carousel-btn-prev');
            const isNext = this.classList.contains('carousel-btn-next');
            
            // Calculer la largeur d'une carte pour le scroll
            const firstCard = carousel.querySelector('.col-lg-3, .col-md-4, .col-sm-6');
            if (firstCard) {
                const cardWidth = firstCard.offsetWidth;
                const gap = 12; // gap-3 = 0.75rem = 12px
                const scrollAmount = cardWidth + gap;
                
                if (isPrev) {
                    carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                } else if (isNext) {
                    carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            }
        });
    });
    
    // Gestion du scroll pour désactiver les boutons
    const carousels = document.querySelectorAll('.events-carousel');
    carousels.forEach(carousel => {
        const updateButtons = () => {
            const parentRow = carousel.closest('.row');
            if (!parentRow) return;
            
            const prevBtn = parentRow.querySelector('.carousel-btn-prev');
            const nextBtn = parentRow.querySelector('.carousel-btn-next');
            
            if (prevBtn) {
                prevBtn.disabled = carousel.scrollLeft <= 0;
            }
            if (nextBtn) {
                const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                nextBtn.disabled = carousel.scrollLeft >= maxScroll - 10;
            }
        };
        
        carousel.addEventListener('scroll', updateButtons);
        updateButtons(); // Initialiser l'état des boutons
    });
});
</script>

<?php
get_footer();
?>

