///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Fonction pour afficher/masquer le header en fonction du défilement

let lastScrollTop = 0;
const header = document.querySelector('header');

window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > window.innerHeight) {
        header.classList.add('scrolled');
        if (currentScroll > lastScrollTop) {
            // Scroll down
            header.style.top = '-100px'; // Masquer le header
        } else {
            // Scroll up
            header.style.top = '0'; // Afficher le header
        }
    } else {
        header.classList.remove('scrolled');
        header.style.top = '0'; // Afficher le header si au-dessus de 100vh
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Pour Mobile ou Chrome, <= 0 est nécessaire
});



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 