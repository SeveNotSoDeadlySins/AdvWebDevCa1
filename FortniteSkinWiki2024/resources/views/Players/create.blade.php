<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Add a new Player')}}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm-rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Add a New Player:</h3>
                    <!-- Pass the $fortniteskinwikis variable to the form component -->
                    <x-player-form
                        :action="route('Players.store')"
                        :method="'POST'"
                        :fortniteskinwikis="$fortniteskinwikis"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
