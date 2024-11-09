<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Fortnite Skins')}}
        </h2>
    </x-slot>

    <style>
        .inline-form {
            display: inline-block;
            margin-right: 20px;
            vertical-align: middle;
            padding-bottom: 20px;
            font-weight: bold;
            font-size: 20px
        }
    </style>

    <x-alert-success>
        {{session('success')}}
    </x-alert-success>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 space-x-4 items-center">
                <div class="p-6 text-gray-900">
                    <div class="flex">
                        
                        <form method="GET" action="{{ route('FortniteSkinWikis.index') }}" class="inline-form">
                        <div class="search">
                            <input type="text" name="name" id="name" value="{{ request('name') }}" placeholder="Search skins..." onkeyup="searchSkins()" autocomplete="on" class="border rounded px-3 py-2">
                            <div id="suggestions" class="absolute top-50 left-50 w-fit bg-white border border-gray-300 max-h-40 overflow-y-auto z-50"></div>

                            <label for="season">Filter by Season:</label>
                            <select name="season" FortniteSkinWiki="season" onchange="this.form.submit()">
                                <option value="">-- Select a Season --</option>
                                <option value=1 {{ request('season') == 1 ? 'selected' : '' }}>Season 1</option>
                                <option value=2 {{ request('season') == 2 ? 'selected' : '' }}>Season 2</option>
                                <option value=3 {{ request('season') == 3 ? 'selected' : '' }}>Season 3</option>
                                <option value=4 {{ request('season') == 4 ? 'selected' : '' }}>Season 4</option>
                                <option value=5 {{ request('season') == 5 ? 'selected' : '' }}>Season 5</option>
                                <option value=6 {{ request('season') == 6 ? 'selected' : '' }}>Season 6</option>
                                <option value=7 {{ request('season') == 7 ? 'selected' : '' }}>Season 7</option>
                                <option value=8 {{ request('season') == 8 ? 'selected' : '' }}>Season 8</option>
                                <option value=9 {{ request('season') == 9 ? 'selected' : '' }}>Season 9</option>
                                <option value=10 {{ request('season') == 10 ? 'selected' : '' }}>Season 10</option>
                            </select>


                            <label for="rarity">Filter by rarity:</label>
                            <select name="rarity" FortniteSkinWiki="rarity" onchange="this.form.submit()">
                                <option value="">-- Select a Rarity --</option>
                                <option value="Legendary" {{ request('rarity') == 'Legendary' ? 'selected' : '' }}>Legendary</option>
                                <option value="Epic" {{ request('rarity') == 'Epic' ? 'selected' : '' }}>Epic</option>
                                <option value="Rare" {{ request('rarity') == 'Rare' ? 'selected' : '' }}>Rare</option>
                                <option value="Common" {{ request('rarity') == 'Common' ? 'selected' : '' }}>Common</option>
                            </select>

                            <input type="hidden" name="rarity" value="{{ request('rarity') }}">
                            <!-- The hidden input also requests the data from the rarity so that it wont override it and make its value defualt(showing all) -->

                            <input type="hidden" name="season" value="{{ request('season') }}">
                        </form>
                    </div>
                    </div>
                    @if($FortniteSkinWikis->isEmpty())
                        <p>No skins found.</p>
                    @else
                        <h3 class="font-semibold text-lg mb-4">List of FortniteSkins:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($FortniteSkinWikis as $FortniteSkinWiki)
                                <div class = "border p-4 rounded-lg shadow-md">
                                    <a href="{{ route('FortniteSkinWikis.show', $FortniteSkinWiki)}}">
                                        <x-FortniteSkinWiki-card :name="$FortniteSkinWiki->name" :Price="$FortniteSkinWiki->vbuck_price" :Rarity="$FortniteSkinWiki->rarity" :SeasonRelease="$FortniteSkinWiki->season" :image="$FortniteSkinWiki->image"/>
                                    </a>
                                    <!-- Checks if the user is logged in and that the user admin in the database is 1.-->
                                    @if(Auth::check() && Auth::user()->admin === 1) 
                                        <div class ="mt-4 flex space-x-2">
                                            <a href="{{ route('FortniteSkinWikis.edit', $FortniteSkinWiki) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                                edit
                                            </a>

                                            <form action="{{route('FortniteSkinWikis.destroy' , $FortniteSkinWiki) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this fortnite skin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-gray-600 bg-red-300 hover:bg-red font-bold py-2 px-4 rounded">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
            function searchSkins() {
                const query = document.getElementById('name').value;
                
                if (query.length > 0) { //checking if there is text in the suggestions box so it can run the query
                    fetch(`/search-skins?query=${encodeURIComponent(query)}`)
                        .then(response => response.json()) //Handling the responce from the fetch after running the query
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

                if (suggestions.length > 0) {
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
        </script>

</x-app-layout>


