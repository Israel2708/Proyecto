document.addEventListener('DOMContentLoaded', function () {
   // Generar un número aleatorio entre 1 y 100
   const randomNumber = Math.floor(Math.random() * 100) + 1;
 
   // Obtener referencias a los elementos HTML relevantes
   const guessField = document.getElementById('guessField');
   const guessSubmit = document.querySelector('.guessSubmit');
   const guesses = document.querySelector('.guesses');
   const lastResult = document.querySelector('.lastResult');
   const lowOrHi = document.querySelector('.lowOrHi');
 
   // Inicializar variables
   let guessCount = 0;
   let resetButton;
 
   // Función para comparar la conjetura con el número aleatorio
   function checkGuess() {
     let userGuess = Number(guessField.value);
     guessCount++;
 
     if (guessCount === 1) {
       guesses.textContent = 'Intentos anteriores: ';
     }
 
     guesses.textContent += userGuess + ' ';
 
     if (userGuess === randomNumber) {
       lastResult.textContent = '¡Felicidades! ¡Lo adivinaste!';
       //lastResult.style.backgroundColor = 'green';
       lowOrHi.textContent = '';
       setGameOver();
     } else if (guessCount === 10) {
       lastResult.textContent = '¡Fin del juego! ¿Quieres intentarlo de nuevo?';
       setGameOver();
     } else {
       lastResult.textContent = 'Incorrecto!';
       //lastResult.style.backgroundColor = 'red';
 
       if (userGuess < randomNumber) {
         lowOrHi.textContent = 'El número es demasiado bajo.';
       } else if (userGuess > randomNumber) {
         lowOrHi.textContent = 'El número es demasiado alto.';
       }
     }
 
     guessField.value = '';
     guessField.focus();
   }
 
   // Manejar clic en el botón de envío de la conjetura
   guessSubmit.addEventListener('click', checkGuess);
 
   // Función para finalizar el juego
   function setGameOver() {
     guessField.disabled = true;
     guessSubmit.disabled = true;
     resetButton = document.createElement('button');
     resetButton.textContent = 'Iniciar nuevo juego';
     document.body.appendChild(resetButton);
     resetButton.addEventListener('click', resetGame);
   }
 
   // Función para reiniciar el juego
   function resetGame() {
     guessCount = 0;
     const resetParas = document.querySelectorAll('.resultParas p');
     for (let i = 0; i < resetParas.length; i++) {
       resetParas[i].textContent = '';
     }
 
     resetButton.parentNode.removeChild(resetButton);
     guessField.disabled = false;
     guessSubmit.disabled = false;
     guessField.value = '';
     guessField.focus();
 
     lastResult.style.backgroundColor = 'white';
 
     // Generar un nuevo número aleatorio
     randomNumber = Math.floor(Math.random() * 100) + 1;
   }
 });