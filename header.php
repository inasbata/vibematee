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

            <a class="brand" href="<?php echo esc_url(get_homepage_url()); ?>" aria-label="Accueil VibeMate">

                <span class="brand-mark" aria-hidden="true">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/image/logo V blanc.svg" alt="VibeMate Logo" class="brand-logo">
                </span>

            </a>

            <form role="search" method="get" class="nav-search" action="<?php echo esc_url(home_url('/')); ?>">

                <button type="submit" aria-label="Lancer la recherche">

                    <svg viewBox="0 0 20 20" role="presentation" focusable="false">

                        <path d="M13.8 12.4l3.7 3.7-1.4 1.4-3.7-3.7a6 6 0 1 1 1.4-1.4zM4.5 8.5a4 4 0 1 0 8 0 4 4 0 0 0-8 0z" fill="currentColor"/>

                    </svg>

                </button>

                <input type="search" name="s" placeholder="Rechercher" aria-label="Rechercher">

            </form>



            <nav class="nav-links" aria-label="Navigation principale">

                <a href="<?php echo esc_url(home_url('/events')); ?>">Events</a>
                <a href="<?php echo esc_url(home_url('/perfect-vibemate')); ?>">Perfect VibeMate</a>
                <a href="<?php echo esc_url(home_url('/a-propos')); ?>">À propos</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
                <a class="nav-account" href="<?php echo esc_url(home_url('/compte')); ?>" aria-label="Mon compte">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </a>
            </nav>

        </div>

    </header>



    <main id="main-content">
