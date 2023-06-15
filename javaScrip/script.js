     // Función para mostrar/ocultar el menú al hacer clic en la hamburguesa
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu');

    hamburger.addEventListener('click', () => {
      menu.classList.toggle('active');
    });

    // Función para ocultar el menú al hacer clic en un enlace del menú
    const menuLinks = document.querySelectorAll('.menu a');

    menuLinks.forEach(link => {
      link.addEventListener('click', () => {
        menu.classList.remove('active');
      });
    });

    // Función para ocultar el menú al redimensionar la pantalla
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        menu.classList.remove('active');
      }
    });