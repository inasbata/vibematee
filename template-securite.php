<?php
/**
 * Template Name: Securite
 */
get_header();
?>

<div class="securite-page">
    <div class="container-fluid">
        <div class="row g-0">
            <!-- Panneau de navigation gauche -->
            <div class="col-12 col-lg-3 profil-sidebar">
                <div class="sidebar-content">
                    <!-- Avatar -->
                    <div class="profil-avatar-wrapper">
                        <div class="profil-avatar">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/image/pdp.png' ); ?>" alt="Profil" class="avatar-img" />
                        </div>
                        <div class="avatar-edit-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z" fill="#7a27be"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Titre Paramètres -->
                    <h2 class="sidebar-title">Paramètres</h2>

                    <!-- Menu de navigation -->
                    <nav class="sidebar-nav">
                        <a href="<?php echo esc_url(get_profil_page_url()); ?>" class="nav-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-icon">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="white"/>
                            </svg>
                            <span>Profil</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-arrow">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" fill="white"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url(get_events_favorites_page_url()); ?>" class="nav-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-icon">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="white"/>
                            </svg>
                            <span>Favoris</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-arrow">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" fill="white"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url(get_securite_page_url()); ?>" class="nav-item active">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-icon">
                                <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" fill="white"/>
                            </svg>
                            <span>Sécurité & connexion</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-arrow">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" fill="white"/>
                            </svg>
                        </a>
                    </nav>

                    <!-- Bouton déconnexion -->
                    <a href="<?php echo wp_logout_url(home_url()); ?>" class="logout-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="logout-arrow">
                            <path d="M15 3H6c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h9c1.1 0 2-.9 2-2v-2h-2v2H6V5h9v2h2V5c0-1.1-.9-2-2-2zm4 8l-4-4v3H8v2h7v3l4-4z" fill="white"/>
                        </svg>
                        <span>Se déconnecter</span>
                    </a>
                </div>
            </div>

            <!-- Panneau de contenu droit -->
            <div class="col-12 col-lg-9 profil-content">
                <div class="securite-content-wrapper">
                    <!-- Section Changer le mot de passe -->
                    <div class="securite-section">
                        <h2 class="securite-section-title">Changer le mot de passe</h2>
                        <form class="securite-form">
                            <div class="form-group mb-3">
                                <label class="form-label">Mot de passe actuel</label>
                                <input type="password" class="form-control" name="current_password" required />
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" name="new_password" required />
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" name="confirm_password" required />
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-update">Mettre à jour</button>
                            </div>
                        </form>
                    </div>

                    <!-- Section Supprimer le compte -->
                    <div class="securite-section">
                        <h2 class="securite-section-title">Supprimer le compte</h2>
                        <a href="#" class="delete-account-link">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
