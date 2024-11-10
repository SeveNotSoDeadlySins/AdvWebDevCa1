function searchSkins() {
    const query = document.getElementById('name').value;
    
    if (query.length > 0) { //checking if there is text in the suggestions box so it can run the query
        fetch(`/search-skins?query=${encodeURIComponent(query)}`)
            .then(response => response.json()) 
            .then(data => {
                displaySuggestions(data);
            })
            .catch(error => console.error('Error:', error)); //Will give a concole error if somthing goes wrong
    } else {
        document.getElementById('suggestions').innerHTML = '';
    }
}

function displaySuggestions(suggestions) {
    const suggestionsDiv = document.getElementById('suggestions');
    suggestionsDiv.innerHTML = '';

    if (suggestions.length > 0) {  //Loop through the suggestions and display them.
        suggestions.forEach(suggestion => {
            const div = document.createElement('div');
            div.classList.add('suggestion');
            div.textContent = suggestion.name;
            div.onclick = () => {
                document.getElementById('name').value = suggestion.name;
                suggestionsDiv.innerHTML = ''; // clear suggestionsDiv(suggestions) when one is selected
            };
            suggestionsDiv.appendChild(div);
        });
    } else {
        suggestionsDiv.innerHTML = '<div class="suggestion">No results found</div>'; // suggestionsDiv is the div with suggestions it will display no results found if you type in random letters that dont match up with any names.
    }
}
