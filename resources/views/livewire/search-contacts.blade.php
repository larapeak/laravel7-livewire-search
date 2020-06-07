<div class="container mx-auto mt-12">
    <h1 class="mb-12 text-center text-gray-900 text-4xl font-semibold">Laravel 7.x Laravel Livewire search</h1>

    <!-- Searchbox -->
    <div class="w-full p-6 mb-6 bg-white border rounded shadow-xl">
        <input
            wire:model="search"
            type="text"
            placeholder="Search..."
            class="w-full px-4 py-2 bg-gray-100 border"
        >
    </div>
    <!-- // Searchbox -->

    <!-- Search Results -->
    <div class="w-full p-6 divide-y bg-white border rounded shadow-xl">
        @foreach($contacts as $contact)
            <div class="p-2">
                <h2 class="text-md font-semibold text-gray-900">{{ $contact->name }}</h2>
                <p class="text-gray-900">
                    {{ $contact->phone_number }}
                </p>
            </div>
        @endforeach

        @if($contacts == '[]')
            <p class="text-gray-900">No contacts found...</p>
        @endif
    </div>
    <!-- // Search Results -->
</div>
