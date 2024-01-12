document.addEventListener('DOMContentLoaded', function () {
  const button = document.querySelector('button');
  const userIdInput = document.getElementById('userid');
  const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('confirm-password');

  // Asegúrate de que el botón exista antes de intentar acceder a sus propiedades
  if (button) {
      // Desactivar el botón al cargar la página
      button.disabled = true;

      // Función para validar el ID de usuario
      function validarUserId() {
          const userId = parseInt(userIdInput.value);
          if (!isNaN(userId) && userId >= 1 && userId <= 99) {
              console.log('ID de usuario válido');
              return true;
          } else {
              console.error('Error: ID de usuario no válido');
              return false;
          }
      }

      // Función para validar la contraseña
      function validarPassword() {
          const password = passwordInput.value;
          if (password.length >= 5) {
              console.log('Contraseña válida');
              return true;
          } else {
              console.error('Error: La contraseña debe tener al menos 5 caracteres');
              return false;
          }
      }

      // Función para validar la confirmación de contraseña
      function validarConfirmPassword() {
          const password = passwordInput.value;
          const confirmPassword = confirmPasswordInput.value;
          if (password === confirmPassword) {
              console.log('Confirmación de contraseña válida');
              return true;
          } else {
              console.error('Error: Las contraseñas no coinciden');
              return false;
          }
      }

      // Función para actualizar el estado del botón
      function actualizarEstadoBoton() {
          button.disabled = !(validarUserId() && validarPassword() && validarConfirmPassword());
      }

      // Agregar eventos a los campos para actualizar el estado del botón en tiempo real
      userIdInput.addEventListener('input', actualizarEstadoBoton);
      passwordInput.addEventListener('input', actualizarEstadoBoton);
      confirmPasswordInput.addEventListener('input', actualizarEstadoBoton);

      // Agregar evento al formulario para validar antes de enviar
      document.getElementById('signup').addEventListener('submit', function (event) {
          // Validar antes de enviar el formulario
          if (!(validarUserId() && validarPassword() && validarConfirmPassword())) {
              alert('Error: Por favor, corrija los campos antes de enviar el formulario');
              event.preventDefault(); // Evitar que se envíe el formulario si hay errores
          }
      });
  }
});
