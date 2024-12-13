@props(['action', 'method', 'players', 'fortniteskinwikis'])

<form action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="username" class="block text-sm text-gray-700">Username</label>
        <input
            type="text"
            name="username"
            id="username"
            value="{{ old('$player->username', $players->username ?? '') }}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('username')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    @isset($players->pfp)
        <div class="mb-4">
            <img src="{{asset('images/Players/' . $players->pfp)}}" alt="{{$players->username}}">
        </div>
    @endisset

    <div class="mb-4">
        <label for="pfp" class="block text-sm font-medium text-gray-700">Player Profile Picture</label>
        <input
            type="file"
            name="pfp"
            id="pfp"          
            {{ isset($players) ? '' : 'required' }} 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('pfp')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm text-gray-700">Email</label>
        <input
            type="text"
            name="email"
            id="email"
            value="{{ old('$player->email', $players->email ?? '') }}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm mb-2" />
        @error('email')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="level" class="block text-sm text-gray-700">Level</label>
        <input
            type="number"
            name="level"
            id="level"
            value="{{ old('level', $players->level ?? '') }}" 
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm mb-2" />
        @error('level')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4 ">
        <label class="block text-sm text-gray-700 pb-5">Select Fortnite Skins:</label>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            @foreach($fortniteskinwikis as $skin)
                <div>
                    <label>
                        <input
                            type="checkbox"
                            name="fortniteskinwikis[]"
                            id="fortniteskinwikis"
                            value="{{ $skin->id }}"
                            {{ isset($players) && in_array($skin->id, old('fortniteskinwikis', $players->fortniteskinwikis->pluck('id')->toArray())) ? 'checked' : '' }}
                        >
                        {{ $skin->name }}

                    </label>
                </div>
            @endforeach
            @error('FortniteSkinWikis')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <x-primary-button>
        {{ isset($players) ? 'Update players' : 'Add players' }}
    </x-primary-button>
</form>

