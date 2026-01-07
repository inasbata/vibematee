// Gestion du bouton favori (cœur)
document.addEventListener('DOMContentLoaded', function() {
    const favoriteBtn = document.querySelector('.btn-favorite-group');
    
    if (favoriteBtn) {
        favoriteBtn.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    }
});

