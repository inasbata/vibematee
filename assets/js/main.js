// Main JavaScript file

document.addEventListener('DOMContentLoaded', function() {
    // Theme JavaScript
    
    // Convertir automatiquement tous les boutons "Créer un groupe" en liens
    function linkCreateGroupButtons() {
        // Récupérer l'URL depuis la variable globale WordPress
        const createGroupUrl = (typeof vibeMateData !== 'undefined' && vibeMateData.createGroupUrl) || 
                               '/creer-un-groupe';
        
        const buttons = document.querySelectorAll('button');
        
        buttons.forEach(button => {
            const buttonText = button.textContent.trim();
            if ((buttonText === 'Créer un groupe' || buttonText === 'créer un groupe') && !button.closest('a')) {
                // Vérifier si le bouton n'est pas déjà un lien
                const link = document.createElement('a');
                link.href = createGroupUrl;
                link.className = button.className;
                link.textContent = button.textContent;
                
                // Copier les styles inline
                if (button.style.cssText) {
                    link.style.cssText = button.style.cssText;
                }
                
                // Copier tous les attributs pertinents
                Array.from(button.attributes).forEach(attr => {
                    if (attr.name !== 'type' && attr.name !== 'class' && attr.name !== 'style') {
                        link.setAttribute(attr.name, attr.value);
                    }
                });
                
                button.parentNode.replaceChild(link, button);
            }
        });
    }
    
    // Exécuter au chargement
    linkCreateGroupButtons();
    
    // Observer les changements du DOM pour les boutons ajoutés dynamiquement
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.addedNodes.length) {
                linkCreateGroupButtons();
            }
        });
    });
    
    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});

