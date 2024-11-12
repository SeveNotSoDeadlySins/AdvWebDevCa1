<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- name -->
        <div>
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Admin -->
        <div class="mt-4">
            <x-input-label for="admin" :value="__('Admin')" />

            <!-- If the checkbox isn't ticked it will return 0 -->
            <input type="hidden" name="admin" value=0 />

            <!-- If you tick the box it return 1 to the database making you a admin -->
            <input id="admin" class="block mt-1"
                type="checkbox"
                name="admin"
                value="1"
                {{ old('admin', $admin ?? false) ? 'checked' : '' }} />

            <x-input-error :messages="$errors->get('admin')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div id="g-signin2"></div>

        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script>
        function onSignIn(googleUser) {
            // This is the object you will use to handle the signed-in user
            var profile = googleUser.getBasicProfile();
            var idToken = googleUser.getAuthResponse().id_token;

            // You can now send the ID token to your server for validation and registration
            console.log("ID Token: " + idToken);

            // Optionally, you can get more information about the user, such as:
            // profile.getName(), profile.getEmail(), profile.getImageUrl(), etc.
        }
        </script>
    </form>
</x-guest-layout>
