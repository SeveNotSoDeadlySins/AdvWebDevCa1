@props(['name', 'Price', 'Rarity', 'SeasonRelease', 'image'])

<!-- What is displayed after after clicking on one of the card on the cards details. -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">

    
    <div class="overflow-hidden rounded-lg mb-4 flex justify-center"> 
        <!-- Assest goes to the public folder then go throughts this directory to display the image. -->
        <img src="{{ asset('images/FortniteSkinWikis/' . $image) }}" alt="{{ $name }}" class="w-full max-w-xs h-auto object-cover">
    </div>

    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{$name}}</h1>


    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Price: {{ $Price }}</h2> 

    <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Rarity: {{ $Rarity }}</h3>

    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Seasons: {{ $SeasonRelease }}</h2> 
</div> 
