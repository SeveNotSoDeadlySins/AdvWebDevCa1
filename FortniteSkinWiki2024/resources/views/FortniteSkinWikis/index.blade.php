<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Fortnite Skins')}}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
            <form method="GET" action="{{ route('FortniteSkinWikis.index') }}">
                <label for="season">Filter by Season:</label>
                <select name="season" id="season" onchange="this.form.submit()">
                    <option value="">-- Select a Season --</option>
                    <option value="1" {{ request('season') == '1' ? 'selected' : '' }}>Season 1</option>
                    <option value="2" {{ request('season') == '2' ? 'selected' : '' }}>Season 2</option>
                    <option value="3" {{ request('season') == '3' ? 'selected' : '' }}>Season 3</option>
                    <option value="4" {{ request('season') == '4' ? 'selected' : '' }}>Season 4</option>
                    <option value="5" {{ request('season') == '5' ? 'selected' : '' }}>Season 5</option>
                    <option value="6" {{ request('season') == '6' ? 'selected' : '' }}>Season 6</option>
                    <option value="7" {{ request('season') == '7' ? 'selected' : '' }}>Season 7</option>
                    <option value="8" {{ request('season') == '8' ? 'selected' : '' }}>Season 8</option>
                    <option value="9" {{ request('season') == '9' ? 'selected' : '' }}>Season 9</option>
                    <option value="10" {{ request('season') == '10' ? 'selected' : '' }}>Season 10</option>
                </select>
            </form>

                <h3 class="font-semibold text-lg mb-4">List of FortniteSkins:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($FortniteSkinWikis as $FortniteSkinWiki)
                        <div class = "border p-4 rounded-lg shadow-md">
                            <a href="{{ route('FortniteSkinWikis.show', $FortniteSkinWiki)}}">
                                <x-FortniteSkinWiki-card :name="$FortniteSkinWiki->name" :Price="$FortniteSkinWiki->vbuck_price" :Rarity="$FortniteSkinWiki->rarity" :SeasonRelease="$FortniteSkinWiki->season" :image="$FortniteSkinWiki->image"/>
                            </a>

                            <div class ="mt-4 flex space-x-2">
                                <a href="{{ route('FortniteSkinWikis.edit', $FortniteSkinWiki) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                    edit
                                </a>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="{{route('FortniteSkinWikis.destroy' , $FortniteSkinWiki) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this fortnite skin?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-600 bg-red-300 hover:bg-red font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<x-alert-success>
    {{session('success')}}
</x-alert-success>