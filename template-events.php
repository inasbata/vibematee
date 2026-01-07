<?php
/**
 * Template Name: Events Template
 */
get_header();
?>
<!-- Header visuel Events -->
<section class="events-hero">
    <div class="hero-image-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/image/Banière du dessus.jpeg" alt="Bannière du dessus" class="hero-image">
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
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" class="card-img-top" alt="Pop X">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">POP X</h5>
                                    <p class="card-text event-date mb-1">Dec 6 at 6pm to Dec 7 at 3am</p>
                                    <p class="card-text event-location mb-2">Pilar</p>
                                    <p class="card-text event-price mb-0">25,31 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1170262407-2573825772631-1-original.20251105-225643.jpeg" class="card-img-top" alt="Roller Party">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">ROLLER PARTY - 06 DEC 2025 - Last Roller Party of 2025</h5>
                                    <p class="card-text event-date mb-1">demain à 18h</p>
                                    <p class="card-text event-location mb-2">Av. du Port 86C</p>
                                    <p class="card-text event-price mb-0">à partir de 16,66 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171232278-288138124246-1-original.20251118-123706.jpeg" class="card-img-top" alt="Tarmac Party">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">SOIREE TARMAC - TARMAC PARTY</h5>
                                    <p class="card-text event-date mb-1">Dec 6 at 6pm to Dec 7 at 3am</p>
                                    <p class="card-text event-location mb-2">18 Rue Duquesnoy, Bruxelles</p>
                                    <p class="card-text event-price mb-0">6,44 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1059497733-1445950664583-1-original.20250624-145420.jpeg" class="card-img-top" alt="Old School Vibes">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">OLD SCHOOL VIBES BELGIUM</h5>
                                    <p class="card-text event-date mb-1">Dec 19 at 11pm</p>
                                    <p class="card-text event-location mb-2">Spirito Brussels</p>
                                    <p class="card-text event-price mb-0">À partir de 22,09 €</p>
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
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171718297-2633130701391-1-original.20251125-123117.jpeg" class="card-img-top" alt="Événement 1">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">XXXOUDN IN DA HOTEL 2.0</h5>
                                    <p class="card-text event-date mb-1">Dec 13 at 2pm to Dec 14 at 1am</p>
                                    <p class="card-text event-location mb-2">MEININGER Hotel Bruxelles City Center</p>
                                    <p class="card-text event-price mb-0">10,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1172190707_2311322005533_1_original.jpeg" class="card-img-top" alt="Événement 2">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">Afrobase: 9th Anniversary</h5>
                                    <p class="card-text event-date mb-1">Dec 27 at 11pm to Dec 28</p>
                                    <p class="card-text event-location mb-2">Mirano Bruxelles</p>
                                    <p class="card-text event-price mb-0">12,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1157678513_986235900673_1_original.jpeg" class="card-img-top" alt="Événement 3">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">NYE - Let's dance into 2026</h5>
                                    <p class="card-text event-date mb-1">dec. 31 om 11pm</p>
                                    <p class="card-text event-location mb-2">Panorama Zomerbar</p>
                                    <p class="card-text event-price mb-0">À partir de 20,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card h-100 border-0">
                                <div class="event-image overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1154320233_1269976729823_1_original.jpeg" class="card-img-top" alt="Événement 4">
                                </div>
                                <div class="card-body event-info">
                                    <h5 class="card-title event-title">NYE2026 • CAFE MEILSEN • Let's show the love</h5>
                                    <p class="card-text event-date mb-1">dec. 31 om 11pm</p>
                                    <p class="card-text event-location mb-2">Café Meilsen - Restaurant, Brasserie, Tea-room</p>
                                    <p class="card-text event-price mb-0">20,07 €</p>
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
// Fonctionnalité de carrousel avec Bootstrap + like boutons
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

    // Like boutons
    const likeButtons = document.querySelectorAll('.event-like-btn');
    likeButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            btn.classList.toggle('liked');
            const liked = btn.classList.contains('liked');
            btn.setAttribute('aria-pressed', liked ? 'true' : 'false');
        });
    });
});
</script>

<?php
get_footer();
?>

