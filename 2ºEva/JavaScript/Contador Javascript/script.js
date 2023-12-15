//Localizo el elemento HTML con el que interactuo
const botonSuma = document.getElementById('suma');
const contadorElemento = document.getElementById('salida');
const botonResta = document.getElementById('resta') ;
let contadorGlobal = contadorElemento.innerHTML;
//Declaro la funcion que quiero que suceda cuando pulsen el boton
/*
    Recupero el valor del elemento HTML
*/
function accionSumar(){
    if(contadorGlobal <10){
    contadorGlobal++;
    }
    contadorElemento.innerHTML = contadorGlobal;
}
function accionRestar(){
    if(contadorGlobal > 0){
    contadorGlobal--;
    }
    contadorElemento.innerHTML = contadorGlobal;

}
// Asocio la accion al boton y especifico el evento que lo desencadena
// Necesito especificar el tipo de evento y la funcion que deberia ejecutar
botonSuma.addEventListener("click",accionSumar);
botonResta.addEventListener("click",accionRestar);