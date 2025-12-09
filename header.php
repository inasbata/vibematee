<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="site-header">
        <div class="navbar">
            <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Accueil VibeMate">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 48 48" role="presentation" focusable="false">
                        <path d="M6 10.5c0-1.1.9-2 2-2h7.4c1 0 1.8.7 2 1.6l2.3 10.3c.1.6 1 .6 1.1 0l2-8.7c.2-.9 1-1.6 2-1.6h7.7c.9 0 1.7.6 1.9 1.5l5 19c.3 1.3-.6 2.6-1.9 2.6H31c-.9 0-1.7-.6-1.9-1.5l-2.3-9.4c-.1-.5-.9-.5-1 0l-2.3 9.4c-.2.9-1 1.5-1.9 1.5h-4.4c-.9 0-1.7-.6-1.9-1.5L6.3 13.2c-.2-.9.5-1.7 1.5-1.7z" fill="currentColor"/>
                    </svg>
                </span>
            </a>

            <form role="search" method="get" class="nav-search" action="<?php echo esc_url(home_url('/')); ?>">
                <button type="submit" aria-label="Lancer la recherche">
                    <svg viewBox="0 0 20 20" role="presentation" focusable="false">
                        <path d="M13.8 12.4l3.7 3.7-1.4 1.4-3.7-3.7a6 6 0 1 1 1.4-1.4zM4.5 8.5a4 4 0 1 0 8 0 4 4 0 0 0-8 0z" fill="currentColor"/>
                    </svg>
                </button>
                <input type="search" name="s" placeholder="Rechercher un événement" aria-label="Rechercher un événement">
            </form>

            <nav class="nav-links" aria-label="Navigation principale">
                <a href="<?php echo esc_url(home_url('/events')); ?>">Events</a>
                <a href="<?php echo esc_url(home_url('/perfect-vibemate')); ?>">Perfect VibeMate</a>
                <a href="<?php echo esc_url(home_url('/a-propos')); ?>">À propos</a>
                <a class="nav-account" href="<?php echo esc_url(home_url('/compte')); ?>">Compte</a>
            </nav>
        </div>
    </header>

    <main id="main-content">