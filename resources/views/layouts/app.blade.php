<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Healthy Life</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="">
        <!-- {{-- @livewire('navigation-menu') --}} -->

        <!-- Page Heading -->
        <!-- {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}} -->

        <!-- Page Content -->
        <main>
            <livewire:ui.navbar />
            {{ $slot }}
        </main>
    </div>

    @stack('modals')
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    @livewireScripts
</body>

</html>
