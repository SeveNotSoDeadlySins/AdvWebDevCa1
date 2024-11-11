@props(['name', 'Price', 'Rarity', 'SeasonRelease', 'image'])


<!-- What is written in the cards displayed on the index page. -->
<div class="border rounded-lg shodow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bond text-lg">{{ $name }}</h4>
    <p class="text-gray-600">{{$Rarity}}</p>
    <img src="{{asset('images/FortniteSkinWikis/' . $image)}}" alt="{{$name}}">
    <p class="text-gray-600">{{ $Price }}</p>
    <p class="text-gray-800 mt-4">{{$SeasonRelease}}</p>
</div>  