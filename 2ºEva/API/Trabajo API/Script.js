document.addEventListener('DOMContentLoaded', function() {
    // Esta función se ejecuta cuando el contenido del DOM ha sido completamente cargado

    // Obtener referencias a elementos HTML que vamos a manipular
    const form = document.getElementById('trumpQuoteForm');
    const quoteArea = document.getElementById('quoteArea');
    const searchKeywordInput = document.getElementById('searchKeyword');

    // Agregar un evento de escucha al formulario cuando se envía
    form.addEventListener('submit', function(event) {
        // Prevenir el comportamiento predeterminado del formulario (evitar que se recargue la página)
        event.preventDefault();
        
        // Obtener el valor de la palabra clave de la entrada de texto y eliminar espacios en blanco
        const searchKeyword = searchKeywordInput.value.trim();
        
        // Llamar a la función para buscar y mostrar citas con la palabra clave
        fetchTrumpQuote(searchKeyword);
    });

    // Función para hacer la llamada a la API de Tronaldump y obtener citas
    function fetchTrumpQuote(keyword) {
        // Construir la URL de la API basada en si se proporciona una palabra clave
        const apiUrl = keyword ?
            `https://www.tronalddump.io/search/quote?query=${encodeURIComponent(keyword)}` :
            'https://www.tronalddump.io/random/quote';

        // Llamada a la API de Tronaldump
        fetch(apiUrl)
            .then(response => response.json()) // Convertir la respuesta a formato JSON
            .then(data => {
                // Verificar si se encontraron citas en la respuesta
                if (data._embedded && data._embedded.quotes.length > 0) {
                    // Mostrar la primera cita relacionada encontrada
                    displayQuote(data._embedded.quotes[0].value);
                } else {
                    // No se encontraron citas relacionadas o se obtiene una cita aleatoria
                    displayQuote('No se encontraron citas relacionadas.');
                }
            })
            .catch(error => console.error('Error fetching Trump quote:', error));
    }

    // Función para mostrar la cita en el área designada del HTML
    function displayQuote(quote) {
        // Actualizar el contenido en el área de citas con un formato de bloque de citas HTML
        quoteArea.innerHTML = `<blockquote class="blockquote">${quote}</blockquote>`;
    }
});
