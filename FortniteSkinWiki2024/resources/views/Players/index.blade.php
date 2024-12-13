<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Players')}}
        </h2>
    </x-slot>

    <x-alert-success>
        {{session('success')}}
    </x-alert-success>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 space-x-4 items-center">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of FortniteSkins:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($players as $player)
                        <!-- To make sure that i wasnt getting a null value back after creating -->
                        @if($player && is_object($player)) 
                            <div class="border p-4 rounded-lg shadow-md">
                                <a href="{{ route('Players.show', $player) }}">
                                    <x-player-card :username="$player->username" :email="$player->email" :level="$player->level" :pfp="$player->pfp" />
                                </a>

                                @if(Auth::check() && Auth::user()->admin === 1)
                                    <div class="mt-4 flex space-x-2">
                                        <a href="{{ route('Players.edit', $player) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                            Edit
                                        </a>

                                        <form action="{{ route('Players.destroy', $player) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this player?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-gray-600 bg-red-300 hover:bg-red font-bold py-2 px-4 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/suggestion.js') }}"></script>
    </div>
</x-app-layout>