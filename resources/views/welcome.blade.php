<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewireStyles
    </head>
    <body>
        <div id="app" class="flex min-h-screen bg-gray-200">
            <div class="container mx-auto mt-12">
                <h1 class="mb-12 text-center text-gray-900 text-4xl font-semibold">Laravel 7.x Laravel Livewire search</h1>

                <!-- Searchbox -->
                <div class="w-full p-6 mb-6 bg-white border rounded shadow-xl">
                    <input
                        type="text"
                        name=""
                        class="w-full px-4 py-2 bg-gray-100 border"
                    >
                </div>
                <!-- // Searchbox -->

                <!-- Search Results -->
                <div class="w-full p-6 divide-y bg-white border rounded shadow-xl">
                    <div>
                        <h2>Name</h2>
                    </div>

                    <div>
                        <h2>Name</h2>
                    </div>
                </div>
                <!-- // Search Results -->
            </div>
        </div>

        @livewireScripts
    </body>
</html>
