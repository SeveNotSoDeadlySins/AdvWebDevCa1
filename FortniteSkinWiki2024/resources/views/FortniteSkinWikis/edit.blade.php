<form method="POST" action="{{ route('FortniteSkinWikis.update', $FortniteSkinWiki) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $FortniteSkinWiki->name) }}" required>
    </div>

    <div>
        <label for="vbuck_price">Price:</label>
        <input name="vbuck_price" id="vbuck_price" value="{{ old('vbuck_price', $FortniteSkinWiki->vbuck_price) }}" required>
    </div>

    <div>
        <label for="rarity">Rarity:</label>
        <input name="rarity" id="rarity" value="{{ old('rarity', $FortniteSkinWiki->rarity) }}" required>
    </div>

    <div>
        <label for="season">Season:</label>
        <input name="season" id="season" value="{{ old('season', $FortniteSkinWiki->season) }}" required>
    </div>

    <div>
        <label for="image">Image:</label>
        <input name="image" id="image" value="{{ old('image', $FortniteSkinWiki->image) }}">
    </div>

    <button type="submit">Update Skin</button>
</form>