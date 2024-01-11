document.addEventListener('DOMContentLoaded', function () {
    // Obtener referencias a elementos HTML
    const userMsg = document.getElementById('user_msg');
    const passMsg = document.getElementById('pass_msg');
    const termMsg = document.getElementById('term_msg');
    const userField = document.getElementById('user');
    const passField = document.getElementById('pass');
    const termCheckbox = document.getElementById('term');
  
    // Función de validación del ID de usuario
    function validarUsuario() {
      const userId = Number(userField.value);
  
      if (isNaN(userId) || userId < 0 || userId > 100) {
        userMsg.textContent = 'El ID de usuario debe ser un número entre 0 y 100.';
        userMsg.style.color = 'red';
      } else {
        userMsg.textContent = 'ID de usuario válido.';
        userMsg.style.color = 'green';
      }
    }
  
    // Función de validación de la contraseña
    function validarContrasena() {
      if (passField.value.length < 5) {
        passMsg.textContent = 'La contraseña debe tener al menos 5 caracteres.';
        passMsg.style.color = 'red';
      } else {
        passMsg.textContent = 'Contraseña válida.';
        passMsg.style.color = 'green';
      }
    }
  
    // Función de validación de aceptación de términos y condiciones
    function validarTerminos() {
      if (!termCheckbox.checked) {
        termMsg.textContent = 'Debes aceptar los términos y condiciones.';
        termMsg.style.color = 'red';
      } else {
        termMsg.textContent = 'Términos y condiciones aceptados.';
        termMsg.style.color = 'green';
      }
    }
  
    // Agregar eventos de cambio para realizar la validación en tiempo real
    userField.addEventListener('input', validarUsuario);
    passField.addEventListener('input', validarContrasena);
    termCheckbox.addEventListener('change', validarTerminos);
  });