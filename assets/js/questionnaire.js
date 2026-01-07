document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('questionnaire-form');
    if (!form) return;

    const steps = Array.from(form.querySelectorAll('.question-step'));
    let current = 0;

    // Langues
    const langInput = form.querySelector('input[name="languages_input"]');
    const tagsContainer = form.querySelector('.language-tags');
    let languages = [];

    const renderLanguages = () => {
        if (!tagsContainer) return;
        tagsContainer.innerHTML = '';
        // Remove existing hidden inputs
        form.querySelectorAll('input[name="languages[]"]').forEach(i => i.remove());
        languages.forEach(lang => {
            const chip = document.createElement('span');
            chip.className = 'language-tag';
            chip.textContent = lang;
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.setAttribute('data-lang', lang);
            btn.textContent = '×';
            chip.appendChild(btn);
            tagsContainer.appendChild(chip);
            // hidden input
            const hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'languages[]';
            hidden.value = lang;
            form.appendChild(hidden);
        });
    };

    const addLanguage = (value) => {
        const v = value.trim();
        if (!v) return;
        // prevent duplicates (case-insensitive)
        const exists = languages.some(l => l.toLowerCase() === v.toLowerCase());
        if (exists) return;
        languages.push(v);
        renderLanguages();
        if (langInput) langInput.value = '';
    };

    const update = () => {
        steps.forEach((s, i) => {
            s.classList.toggle('active', i === current);
        });
        // update summary if last step (step 11)
        if (current === steps.length - 1) {
            const summaryEl = form.querySelector('.summary-content');
            if (summaryEl) {
                const data = new FormData(form);
                let html = '<div class="summary-list">';
                for (let [k, v] of data.entries()) {
                    if (k === 'questionnaire_submit' || k === 'questionnaire_nonce') continue;
                    if (Array.isArray(v)) {
                        v = v.join(', ');
                    }
                    html += `<div class="summary-item"><strong>${k}:</strong> ${v}</div>`;
                }
                html += '</div>';
                summaryEl.innerHTML = html;
            }
        }
    };

    // Dots navigation
    form.addEventListener('click', function(e) {
        if (e.target.matches('.question-hero-dots .dot')) {
            const targetStep = Number(e.target.dataset.step);
            if (!Number.isNaN(targetStep) && targetStep >= 0 && targetStep < steps.length) {
                current = targetStep;
                update();
            }
        }
    });

    // Popup de félicitation
    const congratulationsPopup = document.getElementById('congratulations-popup');
    const step10NextBtn = document.getElementById('step10-next-btn');
    const continueToStep11Btn = document.getElementById('continue-to-step11');

    if (step10NextBtn) {
        step10NextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const activeStep = steps[current];
            if (activeStep && activeStep.classList.contains('question-evening')) {
                // Vérifier qu'une option est sélectionnée
                const selectedOption = activeStep.querySelector('input[name="evening_style"]:checked');
                if (selectedOption) {
                    // Afficher le popup
                    if (congratulationsPopup) {
                        congratulationsPopup.classList.add('show');
                    }
                }
            }
        });
    }

    if (continueToStep11Btn) {
        continueToStep11Btn.addEventListener('click', function(e) {
            e.preventDefault();
            // Cacher le popup
            if (congratulationsPopup) {
                congratulationsPopup.classList.remove('show');
            }
            // Aller au step 11 (transport)
            const step11Index = steps.findIndex(s => s.classList.contains('step-11') && s.classList.contains('question-transport'));
            if (step11Index !== -1) {
                current = step11Index;
                update();
            }
        });
    }

    form.addEventListener('click', function(e) {
        if (e.target.matches('.next-btn') && !e.target.matches('#step10-next-btn')) {
            e.preventDefault();
            // Validation spécifique pour l'âge (step "question-age")
            const activeStep = steps[current];
            if (activeStep && activeStep.classList.contains('question-age')) {
                const ageInput = activeStep.querySelector('input[name="age_range"]');
                if (ageInput) {
                    const ageVal = parseInt(ageInput.value, 10);
                    if (Number.isNaN(ageVal) || ageVal < 18) {
                        activeStep.classList.remove('shake-error');
                        void activeStep.offsetWidth; // force reflow
                        activeStep.classList.add('shake-error');
                        return;
                    }
                }
            }
            if (current < steps.length - 1) current++;
            update();
        }
        if (e.target.matches('.prev-btn')) {
            e.preventDefault();
            if (current > 0) current--;
            update();
        }
    });

    // Allow Enter to proceed on inputs
    form.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            // Ne pas avancer si on est dans le champ langue (multiselect)
            if (e.target.closest('.question-language-input')) {
                e.preventDefault();
                addLanguage(langInput ? langInput.value : '');
                return;
            }
            const active = steps[current];
            // If on last step, allow submit
            if (current < steps.length - 1) {
                e.preventDefault();
                current++;
                update();
            }
        }
    });

    // Langues : ajout via Enter
    if (langInput) {
        langInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addLanguage(langInput.value);
            }
        });
        // Ajout sur double-clic
        langInput.addEventListener('dblclick', function() {
            addLanguage(langInput.value);
        });
        // Ajout dès qu'une option est choisie (change) pour fluidifier
        langInput.addEventListener('change', function() {
            addLanguage(langInput.value);
        });
    }

    // Langues : suppression par clic sur la croix
    if (tagsContainer) {
        tagsContainer.addEventListener('click', function(e) {
            if (e.target.matches('button[data-lang]')) {
                const lang = e.target.getAttribute('data-lang');
                languages = languages.filter(l => l !== lang);
                renderLanguages();
            }
        });
    }

    // Personnalité - Carrousel
    const personalitySlider = form.querySelector('.personality-slider');
    const personalityDots = form.querySelectorAll('.personality-dot');
    const personalityOptions = form.querySelectorAll('.personality-option');
    let currentPersonalityIndex = 0;
    let startX = 0;
    let currentX = 0;
    let isDragging = false;
    let offsetX = 0;

    const updatePersonalityCarousel = (smooth = true) => {
        if (!personalitySlider) return;
        if (!smooth) {
            personalitySlider.style.transition = 'none';
        } else {
            personalitySlider.style.transition = 'transform 0.3s ease';
        }
        // Chaque option fait 50% de la largeur totale, donc on translate de 50% par index
        const baseTranslate = -currentPersonalityIndex * 50;
        const translateX = baseTranslate + offsetX;
        personalitySlider.style.transform = `translateX(${translateX}%)`;
        personalityDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentPersonalityIndex);
        });
    };

    const goToPersonalitySlide = (index) => {
        if (index < 0 || index >= personalityOptions.length) return;
        currentPersonalityIndex = index;
        offsetX = 0;
        updatePersonalityCarousel(true);
        // Ne pas sélectionner automatiquement - seulement sur clic
    };

    // Sélection par clic sur le cercle visible
    personalityOptions.forEach((option, index) => {
        option.addEventListener('click', (e) => {
            // Si on clique directement sur le cercle, sélectionner cette option
            if (!isDragging) {
                const radio = option.querySelector('input[type="radio"]');
                if (radio) {
                    // Désélectionner tous les autres
                    personalityOptions.forEach(opt => {
                        const r = opt.querySelector('input[type="radio"]');
                        if (r) r.checked = false;
                    });
                    // Sélectionner celui-ci
                    radio.checked = true;
                    // Aller à ce slide si ce n'est pas déjà le cas
                    if (currentPersonalityIndex !== index) {
                        goToPersonalitySlide(index);
                    }
                }
            }
        });
    });

    // Navigation par clic sur les points
    personalityDots.forEach((dot, i) => {
        dot.addEventListener('click', () => goToPersonalitySlide(i));
    });

    // Swipe/Touch et Mouse pour mobile et desktop
    if (personalitySlider) {
        const handleStart = (clientX) => {
            startX = clientX;
            isDragging = true;
            personalitySlider.classList.add('dragging');
            offsetX = 0;
        };

        const handleMove = (clientX) => {
            if (!isDragging) return;
            const diffX = startX - clientX;
            const sliderWidth = personalitySlider.offsetWidth / 2; // Largeur d'une option (50% du slider)
            // Convertir le déplacement en pixels en pourcentage relatif à la largeur d'une option
            offsetX = (diffX / sliderWidth) * 50;
            updatePersonalityCarousel(false);
        };

        const handleEnd = () => {
            if (!isDragging) return;
            isDragging = false;
            personalitySlider.classList.remove('dragging');
            
            // Seuil pour changer de slide (30% de la largeur)
            const threshold = 30;
            if (Math.abs(offsetX) > threshold) {
                if (offsetX > 0 && currentPersonalityIndex < personalityOptions.length - 1) {
                    goToPersonalitySlide(currentPersonalityIndex + 1);
                } else if (offsetX < 0 && currentPersonalityIndex > 0) {
                    goToPersonalitySlide(currentPersonalityIndex - 1);
                } else {
                    goToPersonalitySlide(currentPersonalityIndex);
                }
            } else {
                goToPersonalitySlide(currentPersonalityIndex);
            }
        };

        // Touch events (mobile)
        personalitySlider.addEventListener('touchstart', (e) => {
            e.preventDefault();
            handleStart(e.touches[0].clientX);
        });

        personalitySlider.addEventListener('touchmove', (e) => {
            e.preventDefault();
            handleMove(e.touches[0].clientX);
        });

        personalitySlider.addEventListener('touchend', (e) => {
            e.preventDefault();
            handleEnd();
        });

        // Mouse events (desktop)
        personalitySlider.addEventListener('mousedown', (e) => {
            e.preventDefault();
            handleStart(e.clientX);
        });

        document.addEventListener('mousemove', (e) => {
            if (isDragging) {
                handleMove(e.clientX);
            }
        });

        document.addEventListener('mouseup', () => {
            if (isDragging) {
                handleEnd();
            }
        });

        // Navigation au clavier (flèches)
        personalitySlider.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft' && currentPersonalityIndex > 0) {
                goToPersonalitySlide(currentPersonalityIndex - 1);
            } else if (e.key === 'ArrowRight' && currentPersonalityIndex < personalityOptions.length - 1) {
                goToPersonalitySlide(currentPersonalityIndex + 1);
            }
        });
    }

    // Initialiser le carrousel
    updatePersonalityCarousel();

    update();
});
