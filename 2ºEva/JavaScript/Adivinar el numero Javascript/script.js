//Mapeo los campos que voy a necesitar
const inputUsuario = document.getElementById("guessField");
const inputSubmit = document.getElementById("guessSubmit");
const elementGuesses = document.getElementById("guesses");
const elementLast = document.getElementById("lastResult");
const elementLowHigh = document.getElementById("lowOrHi");

//Genero y muestro el numero aleatorio
const numeroAleatorio = Math.floor(Math.random() * 100) + 1;
let numeroIntentos = 0;
const maxIntentos = 10;
console.log("Numero generado: " + numeroAleatorio);
// Cuando haces click recupero el valor del usuario
inputSubmit.addEventListener("click",()=>{
 const numUsuario=inputUsuario.value;
 console.log("El usuario escribe: " + numUsuario);
 //Comparamos el numero generado con el del usuario
 if(numUsuario == numeroAleatorio){
    elementLowHigh.innerHTML="Acertaste!!";
 }
 else if(numUsuario > numeroAleatorio)
 {
    elementLowHigh.innerHTML="El numero que has puesto es mayor que el numero a adivinar";
 }
 else if( numUsuario < numeroAleatorio)
 {
    elementLowHigh.innerHTML="El numero que has puesto es menor que el numero a adivinar";
 }

 else{
    elementLowHigh.innerHTML = "Sigue intentandolo";
 }
 //Aumento el numero de intentos
 numeroIntentos++;
 elementGuesses.innerHTML = "Llevas " +numeroIntentos+ " intentos de "+maxIntentos;
 //Numeros probados
 elementLast.innerHTML +=" "+numUsuario;
 //Bloque si llegamos al limite
 if(numeroIntentos>=maxIntentos){
   inputSubmit.setAttribute("disable",true);
 }
});
/* Otro metodo
function leerDatoUsuario(){
    const numusuario = inputUsuario.getAttribute("value");
    console.log("El usuario escribe: " + numUsuario);
}
inputSubmit.addEventListener("click",leerDatoUsuario);
*/
