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

            <div class="question-step step-7" data-step="7">
                <h3>7 — Intérêts</h3>
                <label><input type="checkbox" name="interests[]" value="concerts"> Concerts</label>
                <label><input type="checkbox" name="interests[]" value="festivals"> Festivals</label>
                <label><input type="checkbox" name="interests[]" value="jam"> Jam sessions</label>
                <div class="step-actions">
                    <button type="button" class="prev-btn">Précédent</button>
                    <button type="button" class="next-btn">Suivant</button>
                </div>
            </div>

            <div class="question-step step-8" data-step="8">
                <h3>8 — Résumé & Envoyer</h3>
                <div class="summary"></div>
                <div class="step-actions">
                    <button type="button" class="prev-btn">Précédent</button>
                    <button type="submit" class="submit-btn">Terminer</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
get_footer();
?>
