@props(['Name' , 'Price', 'Rarity', 'SeasonRelease', 'image'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto"> <!-- Limit the overall container width to make the component more compact --> 

<h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $Name }}</h1> <!-- Heading with larger text and color --> 

 

<!-- Book Cover Image --> 
<div class="overflow-hidden rounded-lg mb-4 flex justify-center"> 
<!-- Image is further restricted to a smaller size --> 
<img src="{{ asset('images/books/' . $image) }}" alt="{{ $title }}" class="w-full max-w-xs h-auto object-cover"> <!-- Restrict image to max-w-xs (20rem) and ensure responsiveness --> 
</div> 

<!-- Publication Year --> 
<h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Published: {{ $Price }}</h2> <!-- Emphasizing year with italics and smaller text --> 

<!-- Book Description --> 
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Rarity</h3> <!-- Subheading for description --> 
<p class="text-gray-700 leading-relaxed">{{ $Rarity }}</p> <!-- Text is spaced out for readability --> 

<h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Published: {{ $SeasonRelease }}</h2> <!-- Emphasizing year with italics and smaller text --> 

<img src="{{asset('images/FortniteSkinWikis/' .$image)}}" alt="{{$Name}}">

</div> 