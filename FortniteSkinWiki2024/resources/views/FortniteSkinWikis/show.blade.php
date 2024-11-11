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
                        <x-Fortniteskinwiki-details
                            :name="$fortniteSkinWiki->name"
                            :Price="$fortniteSkinWiki->vbuck_price"
                            :Rarity="$fortniteSkinWiki->rarity"
                            :SeasonRelease="$fortniteSkinWiki->season"
                            :image="$fortniteSkinWiki->image"
                        />

                        <div>
                            <div class="items-center justify-items-center">
                                <div class="flex items-center font-bold my-3">
                                    <h1 class="text-xl mr-1">Reviews: </h1>
                                    @auth
                                    <form action="{{ route('reviews.store', $fortniteSkinWiki->id) }}" method="POST">
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

                            <!-- Show all existing reviews -->
                            <div>
                                @foreach($fortniteSkinWiki->reviews as $review)
                                    <div class="border-solid border-2 border-black-200 bg-white-200 mb-1 p-1">
                                        <p class="items-center flex"><strong class="mr-2 text-2xl">{{ $review->user->name ?? 'Anonymous' }}</strong>
                                            @if($review->rating === 1)
                                                <label for="1stars" title="1 star" class="cursor-pointer text-yellow-500 text-2xl">★</label>
                                                @elseif($review->rating === 2)
                                                <label for="2stars" title="2 star" class="cursor-pointer text-yellow-500 text-2xl">★★</label>
                                                @elseif($review->rating === 3)
                                                <label for="3stars" title="3 star" class="cursor-pointer text-yellow-500 text-2xl">★★★</label>
                                                @elseif($review->rating === 4)
                                                <label for="4stars" title="4 star" class="cursor-pointer text-yellow-500 text-2xl">★★★★</label>
                                                @elseif($review->rating === 5)
                                                <label for="5stars" title="5 star" class="cursor-pointer text-yellow-500 text-2xl">★★★★★</label>                    
                                            @endif
                                        </p>
                                        <p class="text-base">{{ $review->comment }}</p>
                                    </div>
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