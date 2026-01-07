<?php
/**
 * Template Name: Perfect VibeMate Template
 */
get_header();
?>

<style>
    .pv-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 120px 24px 48px;
    }

    /* Tabs container */
    .pv-tabs-shell {
        width: 100%;
        max-width: 960px;
        margin: 0 auto 32px auto;
        background: linear-gradient(90deg, #f25c04, #f250a9);
        border-radius: 999px;
        padding: 4px;
        box-shadow: 0 0 24px rgba(242, 80, 169, 0.55), 0 0 32px rgba(242, 92, 4, 0.45);
        display: flex;
        justify-content: center;
    }
    .pv-tabs {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
        width: 100%;
        background: transparent;
    }
    .pv-tab-btn {
        flex: 1;
        border: none;
        background: transparent;
        color: #e9eef4;
        padding: 8px 16px;
        border-radius: 999px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .pv-tab-btn.active {
        background: #0b0b0b;
        color: #ffffff;
        box-shadow: inset 0 0 0 1px rgba(255,255,255,0.18);
    }

    .pv-filter-wrap {
        display: flex;
        justify-content: center;
        margin-top: 12px;
        margin-bottom: 20px;
        width: 100%;
    }
    /* Filter bar */
    .pv-filter-bar {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 16px;
        overflow: hidden;
        margin: 0 auto 28px;
        max-width: 960px;
        background: rgba(0,0,0,0.35);
    }
    .pv-filter-btn {
        border: none;
        background: transparent;
        color: #e9eef4;
        padding: 12px 14px;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        cursor: pointer;
        width: 100%;
        transition: background 0.2s ease, color 0.2s ease;
    }
    .pv-filter-btn:not(:last-child) {
        border-right: 1px solid rgba(255,255,255,0.5);
    }
    .pv-filter-btn:hover,
    .pv-filter-btn:focus-visible {
        background: rgba(255,255,255,0.08);
        outline: none;
    }
    .pv-filter-btn svg {
        width: 16px;
        height: 16px;
        stroke: #e9eef4;
    }

    /* Modal overlay */
    .pv-modal {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.6);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 2000;
        padding: 24px;
    }
    .pv-modal.active {
        display: flex;
    }
    .pv-modal-content {
        background: #0b0b0b;
        border: 1px solid rgba(255,255,255,0.15);
        border-radius: 16px;
        max-width: 520px;
        width: 100%;
        padding: 20px;
        color: #e9eef4;
        box-shadow: 0 18px 40px rgba(0,0,0,0.45);
    }
    .pv-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }
    .pv-modal-header h3 {
        margin: 0;
        font-size: 18px;
    }
    .pv-modal-close {
        border: none;
        background: transparent;
        color: #e9eef4;
        font-size: 18px;
        cursor: pointer;
    }
    .pv-modal-body {
        font-size: 14px;
        opacity: 0.9;
    }
    .pv-panel {
        display: none;
    }
    .pv-panel.active {
        display: block;
    }
    /* Cards For You */
    .pv-cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 16px;
    }
    .pv-card {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.89);
        border-radius: 12px;
        overflow: hidden;
        color: #e9eef4;
        box-shadow: none;
        padding: 12px;
        display: flex;
        flex-direction: column;
    }
    .pv-card img.pv-cover {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 10.09px;
    }
    .pv-card-body {
        padding: 12px 14px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        flex: 1 1 auto;
    }
    .pv-card-header {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 12px;
        margin-bottom: 8px;
    }
    .pv-avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid rgba(255,255,255,0.3);
    }
    .pv-title {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.3;
    }
    .pv-meta {
        display: grid;
        grid-template-columns: 1fr;
        gap: 6px;
        align-items: start;
        font-size: 12px;
        opacity: 0.9;
    }
    .pv-chip {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: #e9eef4;
    }
    .pv-chip svg {
        width: 14px;
        height: 14px;
    }
    .pv-participants {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: #ffffff;
    }
    .pv-participants svg {
        width: 16px;
        height: 16px;
        stroke: #ffffff;
    }
    .pv-price-like {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .pv-price {
        font-weight: 600;
        font-size: 13px;
        color: #ffffff;
    }
    .pv-like {
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.3);
        color: #fff;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .pv-like:hover {
        background: #F25C04;
        border-color: #F25C04;
        color: #0b0b0b;
    }
    .pv-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
        gap: 10px;
    }
    .pv-btn {
        background: #F250A9;
        color:rgb(255, 255, 255);
        border: none;
        padding: 8px 14px;
        border-radius: 999px;
        font-weight: 600;
        cursor: pointer;
        font-size: 12px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    }
    .pv-actions-right {
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }
    .pv-like {
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.3);
        color: #fff;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .pv-like:hover,
    .pv-like.liked {
        background: #F25C04;
        border-color: #F25C04;
        color: #0b0b0b;
    }
    .pv-footer-line {
        font-size: 12px;
        opacity: 0.85;
        margin-top: 4px;
    }
</style>

<div class="pv-wrapper">
    <div class="pv-tabs-shell">
        <div class="pv-tabs" role="tablist" aria-label="Perfect VibeMate">
            <button class="pv-tab-btn active" data-tab="for-you" role="tab" aria-selected="true">For You</button>
            <button class="pv-tab-btn" data-tab="my-space" role="tab" aria-selected="false">My Space</button>
        </div>
    </div>

    <div class="pv-filter-wrap" id="pv-filter-wrap">
        <div class="pv-filter-bar" aria-label="Filtres">
            <button class="pv-filter-btn" data-filter="genre">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5h18l-7 7v5l-4 2v-7L3 5z"/></svg>
                Genre
            </button>
            <button class="pv-filter-btn" data-filter="type">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 21h12M6 3h12l-1 7H7L6 3z"/><path d="M9 3l1 7v4l-1 3h6l-1-3v-4l1-7"/></svg>
                Type
            </button>
            <button class="pv-filter-btn" data-filter="budget">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                Budget
            </button>
            <button class="pv-filter-btn" data-filter="nombre">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M20 8v6"/><path d="M23 11h-6"/></svg>
                Nombre
            </button>
        </div>
    </div>

    <div id="pv-for-you" class="pv-panel active" role="tabpanel">
        <div class="pv-cards-grid">
            <div class="pv-card">
                    <div class="pv-card-header">
                        <img class="pv-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Yasmine Ben Atissa</span>
                        <span class="pv-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            3
                        </span>
                    </div>
                <img class="pv-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1170262407-2573825772631-1-original.20251105-225643.jpeg" alt="Roller Party">
                <div class="pv-card-body">
                    <div class="pv-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</div>
                    <div class="pv-meta">
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="5"/><line x1="16" y1="3" x2="16" y2="5"/></svg>
                            06 déc 2025
                        </span>
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                            Av. du Port 86C
                        </span>
                    </div>
                    <div class="pv-actions">
                        <span class="pv-price">à partir de 16,66 €</span>
                        <div class="pv-actions-right">
                            <button class="pv-btn">Rejoindre</button>
                            <button class="pv-like" aria-label="Ajouter aux favoris">♥</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pv-card">
                    <div class="pv-card-header">
                        <img class="pv-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Line Moreau</span>
                        <span class="pv-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            2
                        </span>
                    </div>
                <img class="pv-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171232278-288138124246-1-original.20251118-123706.jpeg" alt="Tarmac">
                <div class="pv-card-body">
                    <div class="pv-title">SOIREE TARMAC - TARMAC PARTY</div>
                    <div class="pv-meta">
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="5"/><line x1="16" y1="3" x2="16" y2="5"/></svg>
                            22 mars 2024
                        </span>
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                            Lyon, France
                        </span>
                    </div>
                    <div class="pv-actions">
                        <span class="pv-price">30,00 €</span>
                        <div class="pv-actions-right">
                            <button class="pv-btn">Rejoindre</button>
                            <button class="pv-like" aria-label="Ajouter aux favoris">♥</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pv-card">
                    <div class="pv-card-header">
                        <img class="pv-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Ana Bakkali</span>
                        <span class="pv-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            2
                        </span>
                    </div>
                <img class="pv-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171809586-952557853093-1-original.20251126-150615.jpeg" alt="Pop X">
                <div class="pv-card-body">
                    <div class="pv-title">POP X</div>
                    <div class="pv-meta">
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="5"/><line x1="16" y1="3" x2="16" y2="5"/></svg>
                            28 mars 2024
                        </span>
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                            Bruxelles, Belgique
                        </span>
                    </div>
                    <div class="pv-actions">
                        <span class="pv-price">à partir de 15,31 €</span>
                        <div class="pv-actions-right">
                            <button class="pv-btn">Rejoindre</button>
                            <button class="pv-like" aria-label="Ajouter aux favoris">♥</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pv-my-space" class="pv-panel" role="tabpanel">
        <!-- Contenu de la section My Space -->
        <p style="color:#e9eef4;">Contenu "My Space" (insérez vos cartes / éléments ici).</p>
    </div>
</div>

<!-- Modals filtres -->
<div class="pv-modal" id="pv-modal-genre" aria-hidden="true">
    <div class="pv-modal-content">
        <div class="pv-modal-header">
            <h3>Filtre : Genre</h3>
            <button class="pv-modal-close" data-close>×</button>
        </div>
        <div class="pv-modal-body">
            <p>Choisissez vos genres (placeholder). Vous pourrez lier vos données ici.</p>
        </div>
    </div>
    </div>

<div class="pv-modal" id="pv-modal-type" aria-hidden="true">
    <div class="pv-modal-content">
        <div class="pv-modal-header">
            <h3>Filtre : Type d'événement</h3>
            <button class="pv-modal-close" data-close>×</button>
        </div>
        <div class="pv-modal-body">
            <p>Choisissez vos types d'événements (placeholder).</p>
        </div>
    </div>
</div>

<div class="pv-modal" id="pv-modal-budget" aria-hidden="true">
    <div class="pv-modal-content">
        <div class="pv-modal-header">
            <h3>Filtre : Budget</h3>
            <button class="pv-modal-close" data-close>×</button>
        </div>
        <div class="pv-modal-body">
            <p>Réglez votre budget (placeholder).</p>
        </div>
    </div>
</div>

<div class="pv-modal" id="pv-modal-nombre" aria-hidden="true">
    <div class="pv-modal-content">
        <div class="pv-modal-header">
            <h3>Filtre : Nombre de personnes</h3>
            <button class="pv-modal-close" data-close>×</button>
        </div>
        <div class="pv-modal-body">
            <p>Choisissez le nombre de personnes (placeholder).</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.pv-tab-btn');
    const panels = {
        'for-you': document.getElementById('pv-for-you'),
        'my-space': document.getElementById('pv-my-space')
    };
    const filterWrap = document.getElementById('pv-filter-wrap');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.dataset.tab;
            // toggle buttons
            buttons.forEach(b => {
                b.classList.toggle('active', b === btn);
                b.setAttribute('aria-selected', b === btn ? 'true' : 'false');
            });
            // toggle panels
            Object.keys(panels).forEach(key => {
                panels[key].classList.toggle('active', key === target);
            });
            if (filterWrap) {
                filterWrap.style.display = target === 'for-you' ? 'flex' : 'none';
            }
        });
    });
    if (filterWrap) {
        filterWrap.style.display = 'flex';
    }

    // Like buttons (toggle état)
    const likeButtons = document.querySelectorAll('.pv-like');
    likeButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            btn.classList.toggle('liked');
            btn.setAttribute('aria-pressed', btn.classList.contains('liked') ? 'true' : 'false');
        });
    });

    // Filtres : ouverture modales
    const filterButtons = document.querySelectorAll('.pv-filter-btn');
    const modals = {
        genre: document.getElementById('pv-modal-genre'),
        type: document.getElementById('pv-modal-type'),
        budget: document.getElementById('pv-modal-budget'),
        nombre: document.getElementById('pv-modal-nombre'),
    };

    const closeAllModals = () => {
        Object.values(modals).forEach(m => m?.classList.remove('active'));
    };

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.dataset.filter;
            closeAllModals();
            modals[target]?.classList.add('active');
        });
    });

    document.querySelectorAll('.pv-modal-close, .pv-modal').forEach(el => {
        el.addEventListener('click', (e) => {
            if (e.target === el || el.hasAttribute('data-close')) {
                closeAllModals();
            }
        });
    });
});
</script>

<?php get_footer(); ?>
