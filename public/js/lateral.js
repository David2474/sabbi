document.addEventListener('DOMContentLoaded', function() {
    var boton = document.getElementById('toggleButton');
    var menu = document.querySelector('.menu-desplegable');

    function toggleMenu() {
        if (menu) {
            menu.classList.toggle('hidden');

            var textosMenu = document.querySelectorAll('.menu-text');
            textosMenu.forEach(function(texto) {
                texto.classList.toggle('hidden');
            });
        }
    }

    boton.addEventListener('click', toggleMenu);

    var mediaQuery = window.matchMedia('(min-width: 2xl)');

    function handleScreenSizeChange(e) {
        if (e.matches) {
            if (menu) {
                menu.classList.remove('hidden');
            }
        } else {
            if (menu) {
                menu.classList.add('hidden');
            }
        }
    }

});