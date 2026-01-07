// Gestion de la sélection de genre
document.addEventListener('DOMContentLoaded', function() {
    const genderButtons = document.querySelectorAll('.gender-btn');
    
    genderButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            genderButtons.forEach(btn => btn.classList.remove('active'));
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
        });
    });
});

