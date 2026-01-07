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
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 999px;
        padding: 4px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
    }
    .pv-tabs {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0;
        width: 100%;
        background: transparent;
    }
    .pv-tab-btn {
        flex: 1;
        border: none;
        background: #ffffff;
        color: #000000;
        padding: 8px 16px;
        border-radius: 999px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .pv-tab-btn.active {
        background: #000000;
        color: #ffffff;
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
        grid-template-columns: repeat(5, 1fr);
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
    .pv-modal-label {
        display: block;
        margin-bottom: 12px;
        font-weight: 500;
        color: #e9eef4;
    }
    .pv-modal-select {
        width: 100%;
        padding: 10px 14px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        color: #e9eef4;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .pv-modal-select:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
    }
    .pv-modal-select:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.15);
        border-color: #ff6b35;
    }
    .pv-modal-select option {
        background: #0b0b0b;
        color: #e9eef4;
    }
    .pv-modal-slider {
        width: 100%;
        height: 6px;
        border-radius: 3px;
        background: rgba(255, 255, 255, 0.2);
        outline: none;
        -webkit-appearance: none;
        appearance: none;
        margin: 20px 0 10px 0;
    }
    .pv-modal-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ff6b35;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    .pv-modal-slider::-moz-range-thumb {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ff6b35;
        cursor: pointer;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    .pv-slider-labels {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: rgba(233, 238, 244, 0.7);
        margin-top: 4px;
    }
    #pv-budget-value {
        color: #ff6b35;
        font-weight: 600;
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
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        color: #000000;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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
        color: #000000;
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
        color: #666666;
    }
    .pv-chip svg {
        width: 14px;
        height: 14px;
        stroke: #666666;
    }
    .pv-participants {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: #000000;
    }
    .pv-participants svg {
        width: 16px;
        height: 16px;
        stroke: #000000;
    }
    .pv-price-like {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .pv-price {
        font-weight: 600;
        font-size: 13px;
        color: #000000;
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
        background: #9E34F6;
        color: rgb(255, 255, 255);
        border: none;
        padding: 8px 14px;
        border-radius: 999px;
        font-weight: 600;
        cursor: pointer;
        font-size: 12px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.25);
        transition: all 0.2s ease;
    }
    .pv-btn:hover {
        background: #7c2dd2;
    }
    .pv-actions-right {
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }
    .pv-like {
        background: #F250A9;
        border: 1px solid #F250A9;
        color: #ffffff;
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
        background: #e03d95;
        border-color: #e03d95;
        color: #ffffff;
    }
    .pv-footer-line {
        font-size: 12px;
        opacity: 0.85;
        margin-top: 4px;
    }
    .pv-modal-label {
        display: block;
        margin-bottom: 12px;
        font-weight: 500;
        color: #e9eef4;
    }
    .pv-modal-select {
        width: 100%;
        padding: 10px 14px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        color: #e9eef4;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .pv-modal-select:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
    }
    .pv-modal-select:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.15);
        border-color: #ff6b35;
    }
    .pv-modal-select option {
        background: #0b0b0b;
        color: #e9eef4;
    }
    .pv-modal-slider {
        width: 100%;
        height: 6px;
        border-radius: 3px;
        background: rgba(255, 255, 255, 0.2);
        outline: none;
        -webkit-appearance: none;
        appearance: none;
        margin: 20px 0 10px 0;
    }
    .pv-modal-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ff6b35;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    .pv-modal-slider::-moz-range-thumb {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #ff6b35;
        cursor: pointer;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    .pv-slider-labels {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: rgba(233, 238, 244, 0.7);
        margin-top: 4px;
    }
    #pv-budget-value {
        color: #ff6b35;
        font-weight: 600;
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
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <circle cx="12" cy="8" r="2"/>
                    <circle cx="12" cy="16" r="2"/>
                    <circle cx="8" cy="12" r="2"/>
                    <circle cx="16" cy="12" r="2"/>
                    <path d="M12 6v4M12 14v4M6 12h4M14 12h4"/>
                </svg>
                Genre
            </button>
            <button class="pv-filter-btn" data-filter="style">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 18V5l12-2v13"/>
                    <circle cx="6" cy="18" r="3"/>
                    <circle cx="18" cy="16" r="3"/>
                </svg>
                Style
            </button>
            <button class="pv-filter-btn" data-filter="type">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 21h8M8 3h8l-1 7H9L8 3z"/>
                    <path d="M9 10l1 4v4l-1 2h4l-1-2v-4l1-4"/>
                    <line x1="12" y1="3" x2="12" y2="10"/>
                </svg>
                Type
            </button>
            <button class="pv-filter-btn" data-filter="budget">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 10c0-2 2-4 6-4s6 2 6 4c0 2-2 4-6 4s-6-2-6-4z"/>
                    <path d="M6 10v8c0 2 2 4 6 4s6-2 6-4v-8"/>
                    <path d="M12 6v2M12 18v2"/>
                </svg>
                Budget
            </button>
            <button class="pv-filter-btn" data-filter="nombre">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
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
        <!-- Section Mes Favoris -->
        <div style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 2rem;">Mes Favoris</h2>
            <div class="pv-cards-grid">
                <div class="pv-card">
                    <div class="pv-card-header">
                        <img class="pv-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Yasmine Ben Aïssa</span>
                        <span class="pv-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            2
                        </span>
                    </div>
                    <img class="pv-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1170262407-2573825772631-1-original.20251105-225643.jpeg" alt="Roller Party">
                    <div class="pv-card-body">
                        <div class="pv-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</div>
                        <div class="pv-meta">
                            <span class="pv-chip">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="5"/><line x1="16" y1="3" x2="16" y2="5"/></svg>
                                Dec 6 at 6pm to Dec 7 at 3am
                            </span>
                            <span class="pv-chip">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                                Av. du Port 86C
                            </span>
                        </div>
                        <div class="pv-actions">
                            <span class="pv-price">à partir de 16,66€</span>
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
                        <span>Lina Moreau</span>
                        <span class="pv-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            2
                        </span>
                    </div>
                    <img class="pv-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1171232278-288138124246-1-original.20251118-123706.jpeg" alt="Tarmac">
                    <div class="pv-card-body">
                        <div class="pv-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</div>
                        <div class="pv-meta">
                            <span class="pv-chip">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="5"/><line x1="16" y1="3" x2="16" y2="5"/></svg>
                                Dec 6 at 6pm to Dec 7 at 3am
                            </span>
                            <span class="pv-chip">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                                Av. du Port 86C
                            </span>
                        </div>
                        <div class="pv-actions">
                            <span class="pv-price">à partir de 16,66€</span>
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
                        <span>Lina Moreau</span>
                        <span class="pv-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            2
                        </span>
                    </div>
                    <img class="pv-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https---cdn.evbuc.com-images-1059497733-1445950664583-1-original.20250624-145420.jpeg" alt="Old School Vibes">
                    <div class="pv-card-body">
                        <div class="pv-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</div>
                        <div class="pv-meta">
                            <span class="pv-chip">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="5"/><line x1="16" y1="3" x2="16" y2="5"/></svg>
                                Dec 6 at 6pm to Dec 7 at 3am
                            </span>
                            <span class="pv-chip">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                                Av. du Port 86C
                            </span>
                        </div>
                        <div class="pv-actions">
                            <span class="pv-price">à partir de 16,66€</span>
                            <div class="pv-actions-right">
                                <button class="pv-btn">Rejoindre</button>
                                <button class="pv-like" aria-label="Ajouter aux favoris">♥</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Mes Groupes -->
        <div>
            <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 2rem;">Mes Groupes</h2>
            <div class="pv-cards-grid">
                <div class="pv-card">
                    <div class="pv-card-header">
                        <img class="pv-avatar" src="<?php echo get_template_directory_uri(); ?>/images/image/logo%20blanc.png" alt="">
                        <span>Noura Haddad</span>
                        <span class="pv-participants" style="margin-left:auto;">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            2
                        </span>
                    </div>
                <img class="pv-cover" src="<?php echo get_template_directory_uri(); ?>/images/image/https___cdn.evbuc.com_images_1157678513_986235900673_1_original.jpeg" alt="New Years">
                <div class="pv-card-body">
                    <div class="pv-title">ROLLY - 06 DEC 2025 - Last Roller Party of 2025</div>
                    <div class="pv-meta">
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="5"/><line x1="16" y1="3" x2="16" y2="5"/></svg>
                            Dec 6 at 6pm to Dec 7 at 3am
                        </span>
                        <span class="pv-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.4-7-11a7 7 0 0 1 14 0c0 5.6-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                            Av. du Port 86C
                        </span>
                    </div>
                    <div class="pv-actions">
                        <span class="pv-price">à partir de 16,66€</span>
                        <div class="pv-actions-right">
                            <button class="pv-btn">Rejoindre</button>
                            <button class="pv-like" aria-label="Ajouter aux favoris">♥</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
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
            <label for="pv-genre-select" class="pv-modal-label">Choisissez un genre :</label>
            <select id="pv-genre-select" class="pv-modal-select">
                <option value="">Sélectionner...</option>
                <option value="fille">Fille</option>
                <option value="garcon">Garçon</option>
                <option value="mixte">Mixte</option>
            </select>
        </div>
    </div>
</div>

<div class="pv-modal" id="pv-modal-style" aria-hidden="true">
    <div class="pv-modal-content">
        <div class="pv-modal-header">
            <h3>Filtre : Style</h3>
            <button class="pv-modal-close" data-close>×</button>
        </div>
        <div class="pv-modal-body">
            <label for="pv-style-select" class="pv-modal-label">Choisissez un style :</label>
            <select id="pv-style-select" class="pv-modal-select">
                <option value="">Sélectionner...</option>
                <option value="rock">Rock</option>
                <option value="rap">Rap</option>
                <option value="electro">Electro</option>
                <option value="pop">Pop</option>
            </select>
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
            <label for="pv-type-select" class="pv-modal-label">Choisissez un type :</label>
            <select id="pv-type-select" class="pv-modal-select">
                <option value="">Sélectionner...</option>
                <option value="soiree">Soirée</option>
                <option value="festival">Festival</option>
                <option value="concert">Concert</option>
            </select>
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
            <label for="pv-budget-slider" class="pv-modal-label">Budget maximum : <span id="pv-budget-value">50€</span></label>
            <input type="range" id="pv-budget-slider" class="pv-modal-slider" min="0" max="100" value="50" step="1">
            <div class="pv-slider-labels">
                <span>0€</span>
                <span>100€</span>
            </div>
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
            <label for="pv-nombre-select" class="pv-modal-label">Choisissez le nombre de personnes :</label>
            <select id="pv-nombre-select" class="pv-modal-select">
                <option value="">Sélectionner...</option>
                <option value="1-2">1-2</option>
                <option value="3-4">3-4</option>
                <option value="5-plus">5 et plus</option>
            </select>
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
        style: document.getElementById('pv-modal-style'),
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
    
    // Gestion du slider budget
    const budgetSlider = document.getElementById('pv-budget-slider');
    const budgetValue = document.getElementById('pv-budget-value');
    if (budgetSlider && budgetValue) {
        budgetSlider.addEventListener('input', (e) => {
            budgetValue.textContent = e.target.value + '€';
        });
    }
});
</script>

<?php get_footer(); ?>
