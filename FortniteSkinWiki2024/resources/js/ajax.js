<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
function searchSkins() {
    // Get the values from the input and filters
    const search = $('#search').val();
    const season = $('#season').val();
    const rarity = $('#rarity').val();
    $.ajax({
        url: "{{ route('FortniteSkinWikis.index') }}",
        method: "GET",
        data: {
            search: search,
            season: season,
            rarity: rarity
        },
        success: function(data) {
            // Update the results div with the new data
            $('#results').html(data);
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
}
