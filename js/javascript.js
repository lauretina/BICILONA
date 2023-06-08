//todos los scripts se ejecutarán cuando el documento esté cargado
document.addEventListener("DOMContentLoaded", function() {
// Muestra el menú hamburguesa o lo oculta, cambia el icono de la X a las barras y viceversa
let btnMenu = document.querySelector('#btn-menu');
let aspa = document.querySelector('#cruz');
let menu = document.querySelector('#menu');

btnMenu.addEventListener('click', muestraMenu);

function muestraMenu() {
    menu.classList.toggle('mostrar');
    aspa.classList.toggle('fa-times');
}


// Mostrar formulario insertar producto y post
var tienda = document.getElementById("tienda"); //icono tienda en variable
var foro = document.getElementById("foro"); //icono foro en variable
var formularioTienda = document.getElementById("zonatienda"); //formulario tienda en variable
var formularioForo = document.getElementById("zonaforo"); //formulario foro en variable

//se muestran y ocultan los formularios al hacer click en los iconos, y este queda con transparencia
//se han definido las clases en el css
function despliegaProd() {
    formularioTienda.classList.toggle("escondido"); 
    foro.classList.toggle("escondido");
    tienda.classList.toggle("transparencia");
}


function despliegaPost() {
  formularioForo.classList.toggle("escondido"); 
  tienda.classList.toggle("escondido");
  foro.classList.toggle("transparencia");
}
tienda.addEventListener('click', despliegaProd, false);
foro.addEventListener('click', despliegaPost, false);
});