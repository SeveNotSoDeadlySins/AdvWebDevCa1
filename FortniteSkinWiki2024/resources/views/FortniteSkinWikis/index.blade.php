<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Fortnite Skins')}}
        </h2>
    </x-slot>

    <x-alert-success>
        {{session('success')}}
    </x-alert-success>
    <x-alert-error>
        {{session('error')}}
    </x-alert-error>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 space-x-4 items-center">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-center">
                        <form method="GET" action="{{ route('FortniteSkinWikis.index') }}" class="inline-block align-middle pb-5 font-bold text-lg">
                            <div class="search">
                                <!-- Search bar with suggestions on what you might be looking for.-->
                                <input type="text" name="name" id="name" value="{{ request('name') }}" placeholder="Search skins..." onkeyup="searchSkins()" autocomplete="on" class="border rounded px-3 py-2 mx-5 text-black-500">
                                <div id="suggestions" class="absolute top-50 left-50 w-fit max-h-40 overflow-hidden z-50 text-black-500 ml-5 bg-gray-100 border-black"></div>

                                <!-- all values that can be picked for my filters -->
                                <select name="season" class="rounded mx-5" FortniteSkinWiki="season" onchange="this.form.submit()">
                                    <option value="" class="text-black-500 bg-gray-100 border-black">-- Select a Season --</option>
                                    <option value=1 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 1 ? 'selected' : '' }}>Season 1</option>
                                    <option value=2 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 2 ? 'selected' : '' }}>Season 2</option>
                                    <option value=3 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 3 ? 'selected' : '' }}>Season 3</option>
                                    <option value=4 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 4 ? 'selected' : '' }}>Season 4</option>
                                    <option value=5 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 5 ? 'selected' : '' }}>Season 5</option>
                                    <option value=6 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 6 ? 'selected' : '' }}>Season 6</option>
                                    <option value=7 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 7 ? 'selected' : '' }}>Season 7</option>
                                    <option value=8 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 8 ? 'selected' : '' }}>Season 8</option>
                                    <option value=9 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 9 ? 'selected' : '' }}>Season 9</option>
                                    <option value=10 class="text-black-500 bg-gray-100 border-black" {{ request('season') == 10 ? 'selected' : '' }}>Season 10</option>
                                </select>


                                <select name="rarity" class="rounded mx-5" FortniteSkinWiki="rarity" onchange="this.form.submit()">
                                    <option value="" class="text-black-500 bg-gray-100 border-black">-- Select a Rarity --</option>
                                    <option value="Legendary" class="text-black-500 bg-gray-100 border-black" {{ request('rarity') == 'Legendary' ? 'selected' : '' }}>Legendary</option>
                                    <option value="Epic" class="text-black-500 bg-gray-100 border-black" {{ request('rarity') == 'Epic' ? 'selected' : '' }}>Epic</option>
                                    <option value="Rare" class="text-black-500 bg-gray-100 border-black" {{ request('rarity') == 'Rare' ? 'selected' : '' }}>Rare</option>
                                    <option value="Common" class="text-black-500 bg-gray-100 border-black" {{ request('rarity') == 'Common' ? 'selected' : '' }}>Common</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <h3 class="font-semibold text-lg mb-4">List of FortniteSkins:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($FortniteSkinWikis as $FortniteSkinWiki)
                            <div class = "border p-4 rounded-lg shadow-md">
                                <a href="{{ route('FortniteSkinWikis.show', $FortniteSkinWiki)}}">
                                    <x-FortniteSkinWiki-card :name="$FortniteSkinWiki->name" :Price="'Price: ' . $FortniteSkinWiki->vbuck_price" :Rarity="'Rarity: '. $FortniteSkinWiki->rarity" :SeasonRelease="'Season: ' . $FortniteSkinWiki->season" :image="$FortniteSkinWiki->image"/>
                                </a>

                                <div class="mt-2 text-sm text-gray-600">
                                    <strong>Category:</strong>
                                    {{ $FortniteSkinWiki->cathegory->cathegory_name ?? 'No Category' }}
                                </div>



                                <!-- Checks if the user is logged in and that the user admin in the database is 1.-->
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @if(Auth::check() && Auth::user()->admin === 1) 
                                        <div class ="mt-4 flex space-x-2">
                                            <a href="{{ route('FortniteSkinWikis.edit', $FortniteSkinWiki) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                                Edit
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
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/suggestion.js') }}"></script>
    </div>
</x-app-layout>