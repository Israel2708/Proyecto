// Espera a que el DOM de la página web esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Obtiene referencias a elementos HTML por sus IDs
    const form = document.getElementById('trumpQuoteForm');  // Formulario
    const quoteArea = document.getElementById('quoteArea');  // Área para mostrar la cita
    const searchKeywordInput = document.getElementById('searchKeyword');  // Entrada de palabra clave
    const changeBackgroundButton = document.getElementById('changeBackgroundButton');  // Botón de cambio de fondo

    // Agrega un evento de escucha para el envío del formulario
    form.addEventListener('submit', function(event) {
        event.preventDefault();  // Previene el comportamiento predeterminado del formulario
        const searchKeyword = searchKeywordInput.value.trim();  // Obtiene y limpia la palabra clave
        fetchTrumpQuote(searchKeyword);  // Realiza una solicitud para obtener una cita relacionada con la palabra clave
    });

    // Agrega un evento de escucha para el clic en el botón de cambio de fondo
    changeBackgroundButton.addEventListener('click', function() {
        toggleBackgroundColor();  // Alterna entre dos esquemas de color para el fondo y el texto
    });

    // Función para realizar una solicitud y obtener una cita de Trump
    function fetchTrumpQuote(keyword) {
        // Construye la URL de la solicitud según si hay una palabra clave o no
        const apiUrl = keyword ?
            `https://www.tronalddump.io/search/quote?query=${encodeURIComponent(keyword)}` :
            'https://www.tronalddump.io/random/quote';

        // Realiza la solicitud HTTP y maneja la respuesta como un objeto JSON
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Muestra la cita en el área designada si se encuentra alguna
                if (data._embedded && data._embedded.quotes.length > 0) {
                    displayQuote(data._embedded.quotes[0].value);
                } else {
                    displayQuote('No se encontraron citas relacionadas.');
                }
            })
            .catch(error => console.error('Error fetching Trump quote:', error));
    }

    // Función para mostrar una cita en el área designada
    function displayQuote(quote) {
        quoteArea.innerHTML = `<blockquote class="blockquote">${quote}</blockquote>`;
    }

    // Función para alternar entre dos esquemas de color para el fondo y el texto
    function toggleBackgroundColor() {
        const body = document.body;
        const currentColor = getComputedStyle(body).backgroundColor;

        // Verifica el color de fondo actual y cambia entre blanco y negro
        if (currentColor === 'rgb(0, 0, 0)') {
            // Cambiar de negro a blanco
            body.style.backgroundColor = 'white';
            body.style.color = 'black';
        } else {
            // Cambiar de blanco a negro
            body.style.backgroundColor = 'black';
            body.style.color = 'white';
        }
    }
});