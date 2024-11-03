@props(['action', 'method', 'FortniteSkinWiki'])

<form action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Name</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $FortniteSkinWiki->name ?? '') }}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('name')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="rarity" class="block text-sm text-gray-700">Rarity</label>
        <input
            type="text"
            name="rarity"
            id="rarity"
            value="{{ old('rarity', $FortniteSkinWiki->rarity ?? '') }}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('rarity')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    @isset($FortniteSkinWiki->image)
        <div class="mb-4">
            <img src="{{asset('images/FortniteSkinWikis/' . $FortniteSkinWiki->image)}}" alt="{{$FortniteSkinWiki->name}}">
        </div>
    @endisset

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Skin Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{ isset($FortniteSkinWiki) ? '' : 'required' }} 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('image')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
    </div>
    <!-- had to add the '' after the image otherwise there is no backup value -->

    <div class="mb-4">
        <label for="vbuck_price" class="block text-sm text-gray-700">Price</label>
        <input
            type="number"
            name="vbuck_price"
            id="vbuck_price"
            value="{{ old('vbuck_price', $FortniteSkinWiki->vbuck_price ?? '') }}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('vbuck_price')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="season" class="block text-sm text-gray-700 ">Season</label>
        <input
            type="number"
            name="season"
            id="season"
            value="{{ old('season', $FortniteSkinWiki->season ?? '') }}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm mb-2" />
        @error('season')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror



    <div>
        <x-primary-button>
            {{ isset($FortniteSkinWiki) ? 'Update Skin' : 'Add Skin' }}
        </x-primary-button>
    </div>
</form>