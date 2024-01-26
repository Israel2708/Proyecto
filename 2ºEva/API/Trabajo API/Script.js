document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('trumpQuoteForm');
    const quoteArea = document.getElementById('quoteArea');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        fetchTrumpQuote();
    });

    function fetchTrumpQuote() {
        // Llamada a la API de Tronaldump
        fetch('https://www.tronalddump.io/random/quote')
            .then(response => response.json())
            .then(data => {
                // Mostrar la cita en el área designada
                displayQuote(data.value);
            })
            .catch(error => console.error('Error fetching Trump quote:', error));
    }

    function displayQuote(quote) {
        // Actualizar el contenido en el área de citas
        quoteArea.innerHTML = `<blockquote class="blockquote">${quote}</blockquote>`;
    }
});