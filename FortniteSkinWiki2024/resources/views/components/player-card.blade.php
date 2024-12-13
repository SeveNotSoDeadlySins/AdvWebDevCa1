@props(['username', 'email', 'level', 'pfp'])


<!-- What is written in the cards displayed on the index page. -->
<div class="border rounded-lg shodow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bond text-lg">{{ $username }}</h4>
    <img src="{{asset('images/Players/' . $pfp)}}" alt="{{$username}}">
    <p class="text-gray-600">{{ $email }}</p>
    <p class="text-gray-600">{{ $level }}</p>
</div>  