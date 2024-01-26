document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('trumpQuoteForm');
    const quoteArea = document.getElementById('quoteArea');
    const searchKeywordInput = document.getElementById('searchKeyword');
    const changeBackgroundButton = document.getElementById('changeBackgroundButton');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const searchKeyword = searchKeywordInput.value.trim();
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
