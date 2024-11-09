<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Fortnite Skins')}}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Skin</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <h3 class="font-semibold text-lg mb-4">Skin Details</h3>
                            <x-Fortniteskinwiki-details
                                :name="$FortniteSkinWiki->name"
                                :Price="$FortniteSkinWiki->vbuck_price"
                                :Rarity="$FortniteSkinWiki->rarity"
                                :SeasonRelease="$FortniteSkinWiki->season"
                                :image="$FortniteSkinWiki->image"
                            />

                            <form action="{{ route('reviews.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="FortniteSkinWiki" value="{{ $FortniteSkinWiki->id }}">
                            <div>
                                <label for="rating">Rating:</label>
                                <select name="rating" id="rating" required>
                                    <option value="1">1 Star</option>
                                    <option value="2">2 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="5">5 Stars</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="comment">Comment:</label>
                                <textarea name="comment" id="comment" rows="3" class="form-control" placeholder="Write your review" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit Review</button>
                        </form>
                    </div>

                    <hr class="my-6">

                    <!-- Reviews Section -->
                    <h2 class="font-semibold text-lg mb-4">All Reviews</h2>
                    <ul id="reviewList">
                        @foreach($reviews as $review)
                            <li>{{ $review->username }}: {{ $review->comment }} ({{ $review->rating }} Stars)</li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>