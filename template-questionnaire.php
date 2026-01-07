<?php
/**
 * Template Name: Questionnaire Template
 */
get_header();
?>

<div class="questionnaire-page">
    <div class="questionnaire-wrap">
        <form id="questionnaire-form" method="post" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>">
            <?php wp_nonce_field('questionnaire_action','questionnaire_nonce'); ?>
            <input type="hidden" name="questionnaire_submit" value="1" />

            <div class="question-step step-1 active question-hero" data-step="1">
                <h1 class="question-hero-title">Bienvenue</h1>
                <p class="question-hero-text">
                    Salut, tu cherches le mate idéal pour ton prochain concert ou festival ? Ne cherche plus.
                    Notre plateforme Perfect Vibe Mate est là pour t'aider à trouver la personne parfaite
                    avec qui partager tes meilleures expériences musicales.
                </p>
                <div class="question-hero-dots">
                    <span class="dot active" data-step="0"></span>
                    <span class="dot" data-step="1"></span>
                    <span class="dot" data-step="2"></span>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-2 question-hero" data-step="2">
                <h1 class="question-hero-title">Simple et rapide !</h1>
                <p class="question-hero-text">
                    Prêt à vivre de nouvelles vibes ? Commence par créer ton profil Perfect Vibe Mate
                    et rejoins un groupe qui matche avec tes centres d'intérêt, tes styles musicaux préférés
                    et ton mood du moment.
                </p>
                <div class="question-hero-dots">
                    <span class="dot" data-step="0"></span>
                    <span class="dot active" data-step="1"></span>
                    <span class="dot" data-step="2"></span>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-3 question-hero" data-step="3">
                <h1 class="question-hero-title">Match & Vibes</h1>
                <p class="question-hero-text">
                    Après avoir partagé tes centres d'intérêt, match avec les Mates qui te correspondent
                    et découvre ceux qui partagent vraiment ta vibe musicale. Alors pourquoi attendre ?
                    Rejoins dès maintenant l'aventure et commence ton expérience musicale avec Perfect Vibe Mate.
                </p>
                <div class="question-hero-dots">
                    <span class="dot" data-step="0"></span>
                    <span class="dot" data-step="1"></span>
                    <span class="dot active" data-step="2"></span>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Let's go !</button>
                </div>
            </div>

            <div class="question-step step-4 question-gender" data-step="4">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-gender-title">Tu es...</h2>
                <div class="question-gender-options">
                    <label class="pill-option">
                        <input type="radio" name="gender" value="femme" required>
                        <span>Une femme</span>
                    </label>
                    <label class="pill-option">
                        <input type="radio" name="gender" value="homme" required>
                        <span>Un homme</span>
                    </label>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-5 question-age" data-step="5">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-age-title">Tu as...</h2>
                <div class="question-age-input">
                    <input type="text" name="age_range" placeholder="Saisis ton âge" required>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-6 question-language" data-step="6">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-language-title">T’es polyglotte ?</h2>
                <div class="question-language-input">
                    <input type="text" name="languages_input" list="language-list" placeholder="Chercher une langue" aria-label="Chercher une langue">
                    <datalist id="language-list">
                        <option value="Anglais">
                        <option value="Français">
                        <option value="Espagnol">
                        <option value="Allemand">
                        <option value="Italien">
                        <option value="Portugais">
                        <option value="Arabe">
                        <option value="Mandarin">
                        <option value="Japonais">
                        <option value="Russe">
                        <option value="Hindi">
                    </datalist>
                    <div class="language-tags" aria-live="polite"></div>
                    <p class="question-language-hint">Tape une langue et appuie sur Entrée pour l’ajouter (plusieurs possibles).</p>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-7 question-age-range" data-step="7">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-age-range-title">Avec quelle tranche d'âge tu veux viber ?</h2>
                <div class="question-age-range-options">
                    <label class="pill-option">
                        <input type="radio" name="preferred_age_range" value="18-23" required>
                        <span>18 - 23</span>
                    </label>
                    <label class="pill-option">
                        <input type="radio" name="preferred_age_range" value="24-29" required>
                        <span>24 - 29</span>
                    </label>
                    <label class="pill-option">
                        <input type="radio" name="preferred_age_range" value="30-35" required>
                        <span>30 - 35</span>
                    </label>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-8 question-personality" data-step="8">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-personality-title">On dit de toi que t'es</h2>
                <div class="personality-carousel">
                    <div class="personality-carousel-inner">
                        <div class="personality-slider">
                        <label class="personality-option" data-value="reserve">
                            <input type="radio" name="personality" value="reserve" required>
                            <div class="personality-circle personality-circle-yellow">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/image/emoji1.png' ); ?>" alt="Réservé.e" class="personality-emoji">
                                <span class="personality-label personality-label-green">Réservé.e</span>
                            </div>
                        </label>
                        <label class="personality-option" data-value="sociable">
                            <input type="radio" name="personality" value="sociable" required>
                            <div class="personality-circle personality-circle-pink">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/image/emoji2.png' ); ?>" alt="Sociable" class="personality-emoji">
                                <span class="personality-label personality-label-green">Sociable</span>
                            </div>
                        </label>
                        </div>
                    </div>
                    <div class="personality-dots">
                        <span class="personality-dot active" data-index="0"></span>
                        <span class="personality-dot" data-index="1"></span>
                    </div>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-9 question-music-genre" data-step="9">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-music-genre-title">T'es dans quelle vibe<br>musical ?</h2>
                <div class="question-music-genre-options">
                    <label class="music-genre-option">
                        <input type="checkbox" name="music_genres[]" value="funk">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/danse.png' ); ?>" alt="Funk" class="music-genre-icon">
                        <span class="music-genre-text">Funk</span>
                    </label>
                    <label class="music-genre-option">
                        <input type="checkbox" name="music_genres[]" value="rock">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/emoji guit.png' ); ?>" alt="Rock" class="music-genre-icon">
                        <span class="music-genre-text">Rock</span>
                    </label>
                    <label class="music-genre-option">
                        <input type="checkbox" name="music_genres[]" value="pop">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/mic.png' ); ?>" alt="Pop" class="music-genre-icon">
                        <span class="music-genre-text">Pop</span>
                    </label>
                    <label class="music-genre-option">
                        <input type="checkbox" name="music_genres[]" value="electro">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/elctro.png' ); ?>" alt="Electro" class="music-genre-icon">
                        <span class="music-genre-text">Electro</span>
                    </label>
                    <label class="music-genre-option">
                        <input type="checkbox" name="music_genres[]" value="rnb">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/emoji trom.png' ); ?>" alt="R&B" class="music-genre-icon">
                        <span class="music-genre-text">R&B</span>
                    </label>
                    <label class="music-genre-option">
                        <input type="checkbox" name="music_genres[]" value="rap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/casque.png' ); ?>" alt="Rap" class="music-genre-icon">
                        <span class="music-genre-text">Rap</span>
                    </label>
                    <label class="music-genre-option">
                        <input type="checkbox" name="music_genres[]" value="alternatif">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/piano.png' ); ?>" alt="Alternatif" class="music-genre-icon">
                        <span class="music-genre-text">Alternatif</span>
                    </label>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-10 question-evening" data-step="10">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-evening-title">En soirée t'es plus...</h2>
                <div class="question-evening-options">
                    <label class="evening-option">
                        <input type="radio" name="evening_style" value="immortaliser" required>
                        <div class="evening-circle evening-circle-orange">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/emoji3.png' ); ?>" alt="Immortaliser" class="evening-emoji">
                        </div>
                        <span class="evening-label evening-label-right">Immortaliser le moment</span>
                    </label>
                    <label class="evening-option">
                        <input type="radio" name="evening_style" value="vivre" required>
                        <div class="evening-circle evening-circle-pink">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/emoji4.png' ); ?>" alt="Vivre" class="evening-emoji">
                        </div>
                        <span class="evening-label evening-label-left">Vivre l'instant présent</span>
                    </label>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn" id="step10-next-btn">Suivant</button>
                </div>
            </div>

            <!-- Popup de félicitation -->
            <div class="congratulations-popup" id="congratulations-popup">
                <div class="congratulations-content">
                    <h2 class="congratulations-title">Bravo !!</h2>
                    <p class="congratulations-message">
                        T'es sur la bonne voie pour trouver ton Perfect VibeMate, continue comme ça !
                    </p>
                    <button type="button" class="congratulations-continue-btn" id="continue-to-step11">
                        <span class="continue-arrow">→</span>
                        <span>Continuer</span>
                    </button>
                </div>
            </div>

            <div class="question-step step-11 question-transport" data-step="11">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-transport-title">Tu te déplace en...</h2>
                <div class="question-transport-options">
                    <label class="transport-option">
                        <input type="checkbox" name="transport[]" value="voiture">
                        <div class="transport-circle transport-circle-pink">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/v.png' ); ?>" alt="Voiture" class="transport-icon">
                        </div>
                        <span class="transport-text">En voiture</span>
                    </label>
                    <label class="transport-option">
                        <input type="checkbox" name="transport[]" value="pied">
                        <div class="transport-circle transport-circle-orange">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/p.png' ); ?>" alt="A pied" class="transport-icon">
                        </div>
                        <span class="transport-text">A pied</span>
                    </label>
                    <label class="transport-option">
                        <input type="checkbox" name="transport[]" value="autostop">
                        <div class="transport-circle transport-circle-purple">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/m.png' ); ?>" alt="Auto-stop" class="transport-icon">
                        </div>
                        <span class="transport-text">Auto-stop</span>
                    </label>
                    <label class="transport-option">
                        <input type="checkbox" name="transport[]" value="transport-commun">
                        <div class="transport-circle transport-circle-yellow">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/t.png' ); ?>" alt="Transport en commun" class="transport-icon">
                        </div>
                        <span class="transport-text">Transport en commun</span>
                    </label>
                    <label class="transport-option">
                        <input type="checkbox" name="transport[]" value="velo">
                        <div class="transport-circle transport-circle-green">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/velo.png' ); ?>" alt="Vélo" class="transport-icon">
                        </div>
                        <span class="transport-text">En vélo</span>
                    </label>
                    <label class="transport-option">
                        <input type="checkbox" name="transport[]" value="taxi">
                        <div class="transport-circle transport-circle-pink">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/tax.png' ); ?>" alt="Taxi/Uber" class="transport-icon">
                        </div>
                        <span class="transport-text">Taxi/Uber</span>
                    </label>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-12 question-party-style" data-step="12">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-party-style-title">Ton style de soirée c'est plus...</h2>
                <div class="question-party-style-options">
                    <label class="party-style-option">
                        <input type="checkbox" name="party_style[]" value="festival">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/1.png' ); ?>" alt="Festival" class="party-style-icon">
                        <span class="party-style-text">Festival</span>
                    </label>
                    <label class="party-style-option">
                        <input type="checkbox" name="party_style[]" value="concert">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/2.png' ); ?>" alt="Concert" class="party-style-icon">
                        <span class="party-style-text">Concert</span>
                    </label>
                    <label class="party-style-option">
                        <input type="checkbox" name="party_style[]" value="boite-nuit">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/3.png' ); ?>" alt="Boîte de nuit" class="party-style-icon">
                        <span class="party-style-text">Boîte de nuit</span>
                    </label>
                    <label class="party-style-option">
                        <input type="checkbox" name="party_style[]" value="dj-set">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/4.png' ); ?>" alt="DJ set" class="party-style-icon">
                        <span class="party-style-text">DJ set</span>
                    </label>
                    <label class="party-style-option">
                        <input type="checkbox" name="party_style[]" value="rave-party">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/5.png' ); ?>" alt="Rave Party" class="party-style-icon">
                        <span class="party-style-text">Rave Party</span>
                    </label>
                    <label class="party-style-option">
                        <input type="checkbox" name="party_style[]" value="jam-session">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/6.png' ); ?>" alt="Jam session" class="party-style-icon">
                        <span class="party-style-text">Jam session</span>
                    </label>
                    <label class="party-style-option">
                        <input type="checkbox" name="party_style[]" value="theme">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image/7.png' ); ?>" alt="À thème" class="party-style-icon">
                        <span class="party-style-text">À thème</span>
                    </label>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">Super!</button>
                </div>
            </div>

            <div class="question-step step-13 question-profile-type" data-step="13">
                <button type="button" class="question-back prev-btn" aria-label="Revenir">
                    ←
                </button>
                <h2 class="question-profile-type-title">T'es un.e</h2>
                <div class="profile-type-circle-container">
                    <div class="profile-type-circle"></div>
                    <div class="profile-type-dots">
                        <label class="profile-type-dot profile-type-dot-yellow" data-position="top-left">
                            <input type="radio" name="profile_type" value="concert-rookie" required>
                            <span class="profile-type-label">Concert Rookie</span>
                        </label>
                        <label class="profile-type-dot profile-type-dot-pink" data-position="top-right">
                            <input type="radio" name="profile_type" value="night-explorer" required>
                            <span class="profile-type-label">Night Explorer</span>
                        </label>
                        <label class="profile-type-dot profile-type-dot-orange" data-position="bottom-right">
                            <input type="radio" name="profile_type" value="full-time-raver" required>
                            <span class="profile-type-label">Full Time Raver</span>
                        </label>
                        <label class="profile-type-dot profile-type-dot-green" data-position="bottom-left">
                            <input type="radio" name="profile_type" value="party-addict" required>
                            <span class="profile-type-label">Party Addict</span>
                        </label>
                    </div>
                </div>
                <div class="step-actions hero-actions">
                    <button type="button" class="next-btn hero-next-btn">J'ai terminé !</button>
                </div>
            </div>

            <div class="question-step step-14 question-thanks" data-step="14">
                <div class="thanks-content">
                    <h2 class="thanks-title">Merci pour les infos !</h2>
                    <p class="thanks-message">A une étape de trouver ton perfect VibeMate</p>
                    <button type="submit" class="thanks-start-btn hero-next-btn">Commencer</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
get_footer();
?>
