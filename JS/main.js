// Récupère les éléments
const menuIcon = document.getElementById('menu-icon');
const sideNav = document.getElementById('side-nav');
const body = document.body;

// Ajoute l'événement de clic à l'icône hamburger
menuIcon.addEventListener('click', () => {
  // Ajoute ou retire la classe 'open' au menu
  sideNav.classList.toggle('open');

  // Ajoute ou retire la classe 'menu-open' au body pour décaler le contenu
  body.classList.toggle('menu-open');
});
