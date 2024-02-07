function setActivePage(page) {
    // Réinitialise la classe active de tous les liens
    const links = document.querySelectorAll('section ul li a');
    links.forEach(link => {
        link.classList.remove('active-page');
    });

    // Ajoute la classe active à la page sélectionnée
    const activeLink = document.querySelector(`sections ul li a[href="#"][onclick="setpagesactive('${page}')"]`);
    if (activeLink) {
        activeLink.classList.add('active-page');
    }
}