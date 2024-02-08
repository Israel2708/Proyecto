document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('trumpQuoteForm');
    const quoteArea = document.getElementById('cita');
    const searchKeywordInput = document.getElementById('Palabra Clave');
    const changeBackgroundButton = document.getElementById('CambiarFondo');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const searchKeyword = searchKeywordInput.value.trim();

        // Validación: Verifica si la palabra clave tiene al menos 3 letras
        if (searchKeyword.length < 3) {
            alert('La palabra clave debe tener al menos 3 letras.');
            return; // Sale de la función sin continuar con la solicitud
        }

        fetchTrumpQuote(searchKeyword);
    });

    changeBackgroundButton.addEventListener('click', function() {
        toggleBackgroundColor();
    });

    function fetchTrumpQuote(keyword) {
        const apiUrl = keyword ?
            `https://www.tronalddump.io/search/quote?query=${encodeURIComponent(keyword)}` :
            'https://www.tronalddump.io/random/quote';

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data._embedded && data._embedded.quotes.length > 0) {
                    displayQuote(data._embedded.quotes[0].value);
                } else {
                    displayQuote('No se encontraron citas relacionadas.');
                }
            })
            .catch(error => console.error('Error fetching Trump quote:', error));
    }

    function displayQuote(quote) {
        quoteArea.innerHTML = `<blockquote class="blockquote">${quote}</blockquote>`;
    }

    function toggleBackgroundColor() {
        const body = document.body;
        const currentColor = getComputedStyle(body).backgroundColor;

        if (currentColor === 'rgb(0, 0, 0)') {
            body.style.backgroundColor = 'white';
            body.style.color = 'black';
        } else {
            body.style.backgroundColor = 'black';
            body.style.color = 'white';
        }
    }
});
