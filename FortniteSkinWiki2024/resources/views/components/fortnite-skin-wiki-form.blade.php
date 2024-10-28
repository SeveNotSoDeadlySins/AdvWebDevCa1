@props(['action', 'method'])

<form action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif


    <div class="mb-4">
        <label for="Name" class="block text-sm text-gray-700">Name</label>
        <input
            type="text"
            name="Name"
            id="Name"
            value="{{old('Name', $FortniteSkinWiki->Name ?? '' )}}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('Name')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
    </div>
    <!-- There are missing quotes in the notes in the class ling and there is an extra quote in the value -->

    <div class="mb-4">
        <label for="Rarity" class="block text-sm text-gray-700">Rarity</label>
        <input
            type="text"
            name="Rarity"
            id="Rarity"
            value="{{old('Rarity', $FortniteSkinWiki->Rarity ?? '')}}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('Rarity')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
    </div>

    <div class="mb-4">
        <label for = "image" class="block text-sm font-meduim text-gray-700">FortniteSkinWiki Cover Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{isset($image) ? '' : 'required'}} 
            
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm forcus:ring-indigo-500 focus:border-indigo-500"/>
            @error('image')
                <p class="text-sm text-red-600">{{message}}</p>
            @enderror
    </div>

    <!-- There was missing '' in the value as there was a ?? without a fallback value. Other u will get an error. -->

    <div class="mb-4">
        <label for="Price" class="block text-sm text-gray-700">Price</label>
        <input
            type="text"
            name="Price"
            id="Price"
            value="{{old('Price', $FortniteSkinWiki->Price ?? '')}}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('Price')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
    </div>

    <div class="mb-4">
        <label for="SeasonRelease" class="block text-sm text-gray-700">SeasonRelease</label>
        <input
            type="text"
            name="SeasonRelease"
            id="SeasonRelease"
            value="{{old('SeasonRelease', $FortniteSkinWiki->SeasonRelease ?? '')}}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('SeasonRelease')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
    </div>


    @isset($FortniteSkinWikis->image)
        <div class="mb-4">
            <img src ="{{asset($FortniteSkinWikis->image)}}" alt="Skin Cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{isset($FortniteSkinWiki)? 'Update Skin' :'Add Skin'}}
    </x-primary-button>
    </div>
</form>