let menu = document.querySelector('.list-container');
let containerMenu = document.querySelector('.menu');
let activador = true;

//**Menu de Navegación - Animación */

//* intercalar clase Active /
let enlaces = document.querySelectorAll('.list li a');

enlaces.forEach((element) => {

    element.addEventListener('click', (event) => {

        enlaces.array.forEach((link) => {
            link.classList.remove('activo');
        });

        event.target.classList.add('activo');

    });

});

/* Efectos Scroll*/

let prevScrollpost = window.pageYOffset;
let goTop = document.querySelector('.go-top');

window.onscroll = () => {

    let currenScrollPos = window.pageYOffset;

    //Mostrar y ocultar menu
    if (prevScrollpost > currenScrollPos) {
        containerMenu.style.top = "0";
        containerMenu.style.transition = "0.5s";

    } else {
        containerMenu.style.top = "-60";
        containerMenu.style.transition = "0.5s";
    }

    prevScrollpost = currenScrollPos;

    // Mortrar y ocultar scroll Estilos

    let arriba = window.pageYOffset;

    if (arriba <= 600) {
        containerMenu.style.borderBottom = "none"

        goTop.style.right = "-100%";

    } else {
        containerMenu.style.borderBottom = "2px solid #ff2e63"

        goTop.style.right = "0";
        goTop.style.transition = "0.5s";
    }
}

goTop.addEventListener('click', () => {

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

let verAbajo = document.querySelector('#abajo');

verAbajo.addEventListener('click', () => {
    document.body.scrollTop = 1000;
    document.documentElement.scrollTop = 1000;
});

function addFavoritos() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}

function addCarrito() {
    var x = document.getElementById("snackbarCarrito");
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}
