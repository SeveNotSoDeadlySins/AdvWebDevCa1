<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Fortnite Skins') }}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                        <h3 class="font-semibold text-lg mb-4">Skin Details: </h3>
                        <x-player-details
                            :username="$player->username"
                            :email="$player->email"
                            :level="$player->level"
                            :pfp="$player->pfp"
                        />

                        <div>
                            <div class="items-center justify-items-center">
                                <div class="flex items-center font-bold my-3">
                                    <h1 class="text-xl mr-1">Reviews: </h1>
                                    @auth
                                    <form action="{{ route('reviews.store', $player->id) }}" method="POST">
                                        @csrf
                                        <!-- Showing the stars on the create review section -->
                                        <div class="flex space-x-1 text-2xl" id="star-rating">
                                            <input type="radio" id="star1" name="rating" value="1" class="hidden" required />
                                            <label for="star1" title="1 star" class="cursor-pointer text-gray-300 hover:text-yellow-500 transition-colors duration-200 text-4xl">★</label>
                                            
                                            <input type="radio" id="star2" name="rating" value="2" class="hidden" />
                                            <label for="star2" title="2 stars" class="cursor-pointer text-gray-300 hover:text-yellow-500 transition-colors duration-200 text-4xl">★</label>
                                            
                                            <input type="radio" id="star3" name="rating" value="3" class="hidden" />
                                            <label for="star3" title="3 stars" class="cursor-pointer text-gray-300 hover:text-yellow-500 transition-colors duration-200 text-4xl">★</label>
                                            
                                            <input type="radio" id="star4" name="rating" value="4" class="hidden" />
                                            <label for="star4" title="4 stars" class="cursor-pointer text-gray-300 hover:text-yellow-500 transition-colors duration-200 text-4xl">★</label>
                                            
                                            <input type="radio" id="star5" name="rating" value="5" class="hidden" />
                                            <label for="star5" title="5 stars" class="cursor-pointer text-gray-300 hover:text-yellow-500 transition-colors duration-200 text-4xl">★</label>
                                        </div>
                                    </div>

                                    <textarea class="w-full h-48 p-4 border border-gray-300 rounded-md text-xl" name="comment" required placeholder="Comment... "></textarea>

                                    <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded mb-4">Submit Review</button>
                                </form>
                                @else
                                    <p>Please <a href="{{ route('login') }}">log in</a> to leave a review.</p>
                                @endauth
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach($player->fortniteSkinWikis as $FortniteSkinWiki)
                                    <a href="{{ route('FortniteSkinWikis.show', $FortniteSkinWiki) }}">
                                        <x-FortniteSkinWiki-card 
                                            :name="$FortniteSkinWiki->name" 
                                            :Price="'Price: ' . $FortniteSkinWiki->vbuck_price" 
                                            :Rarity="'Rarity: '. $FortniteSkinWiki->rarity" 
                                            :SeasonRelease="'Season: ' . $FortniteSkinWiki->season" 
                                            :image="$FortniteSkinWiki->image" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/star.js') }}"></script>
    </div>
</x-app-layout>