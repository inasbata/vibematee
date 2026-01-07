<?php
get_header();
?>

<!-- Hero Section avec fond violet -->
<section class="home-hero">
    <div class="hero-background-wrapper">
        <div class="hero-background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image/Banière du dessus.jpeg');"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-logo-large">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image/logoblanc-vibemate.svg" alt="Vibe mate" class="hero-logo-img-large">
                <p class="hero-tagline">Connecte-toi à ceux qui<br>vibrent comme toi</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Notre concept -->
<section class="concept-section-home">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="concept-title-home">
                    <span class="concept-title-orange">Notre</span><br>
                    <span class="concept-title-white">concept</span>
                </h2>
            </div>
        </div>
        <div class="row concept-cards-home">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-card-home">
                    <div class="concept-number-home">01</div>
                    <h3 class="concept-card-title">Rencontres</h3>
                    <p class="concept-card-text">Mettre en lien des passionnés de musique pour partager concerts et festivals en Belgique selon leurs goûts.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-card-home">
                    <div class="concept-number-home">02</div>
                    <h3 class="concept-card-title">Compagnie</h3>
                    <p class="concept-card-text">Éviter que des personnes soient seules ou renoncent à participer à des événements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-card-home">
                    <div class="concept-number-home">03</div>
                    <h3 class="concept-card-title">Échange</h3>
                    <p class="concept-card-text">Outil d'échange et de rencontre pour les jeunes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="concept-card-home">
                    <div class="concept-number-home">04</div>
                    <h3 class="concept-card-title">Unique</h3>
                    <p class="concept-card-text">Offrir des événements personnalisés et susceptibles de plaire à chaque utilisateur.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Meet the team -->
<section class="team-section">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="team-title">
                    <span class="team-title-black">Meet</span><br>
                    <span class="team-title-orange">the team</span>
                </h2>
            </div>
        </div>
        <div class="row team-cards-row">
        </div>
    </div>
</section>

<!-- Section Image de foule violette -->
<section class="crowd-purple-section">
    <img src="<?php echo get_template_directory_uri(); ?>/images/image/bannier_milieu.png" alt="Crowd" class="crowd-purple-image">
</section>

<!-- Section Nos valeurs -->
<section class="valeurs-section">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="valeurs-title">
                    <span class="valeurs-title-white">Nos</span> <span class="valeurs-title-orange">valeurs</span>
                </h2>
            </div>
        </div>
        <div class="row valeurs-cards-row">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <div class="valeur-card valeur-card-partage">
                    <h3 class="valeur-card-title">Partage</h3>
                    <p class="valeur-card-text">Ici, tout commence par la musique. On partage ses sons, ses humeurs et ses découvertes pour créer des connexions sincères. Une vibe commune peut suffire à rapprocher deux personnes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <div class="valeur-card valeur-card-inclusion">
                    <h3 class="valeur-card-title">Inclusion</h3>
                    <p class="valeur-card-text">Que tu sois fan de rap, de techno, de pop ou de rock indé, tu as ta place. Notre plateforme rassemble toutes les identités, toutes les cultures et toutes les playlists, sans jugement.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <div class="valeur-card valeur-card-audace">
                    <h3 class="valeur-card-title">Audace</h3>
                    <p class="valeur-card-text">Que tu sois fan de rap, de techno, de pop ou de rock indé, tu as ta place. Notre plateforme rassemble toutes les identités, toutes les cultures et toutes les playlists, sans jugement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Bannière finale -->
<section class="banner-last-section">
    <img src="<?php echo get_template_directory_uri(); ?>/images/image/banner_last.png" alt="Banner" class="banner-last-image">
</section>

<!-- Section Événements -->
<section class="events-section-home">
    <div class="container-fluid">
        <!-- Section Les meilleures tendances -->
        <div class="events-subsection mb-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="events-section-title">
                        Les <span class="events-title-orange">meilleures</span> tendances
                    </h2>
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
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1170262407-2573825772631-1-original.20251105-225643.jpeg" class="card-img-top" alt="Roller Party">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</h5>
                                    <p class="card-text event-date-home mb-1">Demain à 18h</p>
                                    <p class="card-text event-location-home mb-2">Av. du Port 86C</p>
                                    <p class="card-text event-price-home mb-0">À partir de 16,66€</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171232278-288138124246-1-original.20251118-123706.jpeg" class="card-img-top" alt="Tarmac Party">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">SOIREE TARMAC - TARMAC PARTY</h5>
                                    <p class="card-text event-date-home mb-1">Demain à 18h</p>
                                    <p class="card-text event-location-home mb-2">18 Rue Duquesnoy, Bruxelles</p>
                                    <p class="card-text event-price-home mb-0">6,44 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" class="card-img-top" alt="Pop X">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">POP X</h5>
                                    <p class="card-text event-date-home mb-1">Dec 6 at 6pm to Dec 7 at 3am</p>
                                    <p class="card-text event-location-home mb-2">Pilar</p>
                                    <p class="card-text event-price-home mb-0">25,31 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1059497733-1445950664583-1-original.20250624-145420.jpeg" class="card-img-top" alt="Old School Vibes">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">OLD SCHOOL VIBES BELGIUM</h5>
                                    <p class="card-text event-date-home mb-1">Dec 19 at 11pm</p>
                                    <p class="card-text event-location-home mb-2">Spirito Brussels</p>
                                    <p class="card-text event-price-home mb-0">À partir de 22,09 €</p>
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
        </div>

        <!-- Section Les évènements à 20,00 € -->
        <div class="events-subsection mb-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="events-section-title">
                        Les <span class="events-title-orange">évènements</span> à 20,00 €
                    </h2>
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
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171718297-2633130701391-1-original.20251125-123117.jpeg" class="card-img-top" alt="Événement 1">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">XXXOUDN IN DA HOTEL 2.0</h5>
                                    <p class="card-text event-date-home mb-1">Dec 13 at 2pm to Dec 14 at 1am</p>
                                    <p class="card-text event-location-home mb-2">MEININGER Hotel Bruxelles City Center</p>
                                    <p class="card-text event-price-home mb-0">10,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1172190707_2311322005533_1_original.jpeg" class="card-img-top" alt="Événement 2">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">Afrobase: 9th Anniversary</h5>
                                    <p class="card-text event-date-home mb-1">Dec 27 at 11pm to Dec 28</p>
                                    <p class="card-text event-location-home mb-2">Mirano Bruxelles</p>
                                    <p class="card-text event-price-home mb-0">12,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1157678513_986235900673_1_original.jpeg" class="card-img-top" alt="Événement 3">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">NYE - Let's dance into 2026</h5>
                                    <p class="card-text event-date-home mb-1">dec. 31 om 11pm</p>
                                    <p class="card-text event-location-home mb-2">Panorama Zomerbar</p>
                                    <p class="card-text event-price-home mb-0">À partir de 20,00 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card event-card-home h-100 border-0">
                                <div class="event-image-home overflow-hidden">
                                    <button type="button" class="btn btn-outline-light btn-sm event-like-btn-home" aria-label="Ajouter aux favoris">♥</button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1154320233_1269976729823_1_original.jpeg" class="card-img-top" alt="Événement 4">
                                </div>
                                <div class="card-body event-info-home">
                                    <h5 class="card-title event-title-home">NYE2026 • CAFE MEILSEN • Let's show the love</h5>
                                    <p class="card-text event-date-home mb-1">dec. 31 om 11pm</p>
                                    <p class="card-text event-location-home mb-2">Café Meilsen - Restaurant, Brasserie, Tea-room</p>
                                    <p class="card-text event-price-home mb-0">20,07 €</p>
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
        </div>
    </div>
</section>

<script>
// Fonctionnalité de carrousel pour les événements de la page d'accueil
document.addEventListener('DOMContentLoaded', function() {
    const carouselButtons = document.querySelectorAll('[data-carousel]');
    
    carouselButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const carouselId = this.getAttribute('data-carousel');
            const carousel = document.getElementById(carouselId + '-carousel');
            const isPrev = this.classList.contains('carousel-btn-prev');
            const isNext = this.classList.contains('carousel-btn-next');
            
            if (carousel) {
                const firstCard = carousel.querySelector('.col-lg-3, .col-md-4, .col-sm-6');
                if (firstCard) {
                    const cardWidth = firstCard.offsetWidth;
                    const gap = 12;
                    const scrollAmount = cardWidth + gap;
                    
                    if (isPrev) {
                        carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                    } else if (isNext) {
                        carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                    }
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
        updateButtons();
    });

    // Like boutons
    const likeButtons = document.querySelectorAll('.event-like-btn-home');
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