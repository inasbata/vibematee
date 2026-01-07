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
        // update summary if last step
        if (current === steps.length - 1) {
            const summaryEl = form.querySelector('.summary');
            if (summaryEl) {
                const data = new FormData(form);
                let html = '<ul>';
                for (let [k, v] of data.entries()) {
                    if (k === 'questionnaire_submit' || k === 'questionnaire_nonce') continue;
                    html += `<li><strong>${k}:</strong> ${v}</li>`;
                }
                html += '</ul>';
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

    form.addEventListener('click', function(e) {
        if (e.target.matches('.next-btn')) {
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

    update();
});
