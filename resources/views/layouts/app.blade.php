<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        
    </head>
    <body class="font-sans antialiased bg-black">
        <div class="container" style="background-image: url('{{URL::asset('assets/images/hero-background.jpg')}}')">
        <x-jet-banner />
        @include('partials.header')
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main class="container mt-5">
            {{ $slot }}
        </main>
        @include('partials.footer')

        @stack('modals')

        @livewireScripts

        @stack('scripts')
        </div>
    </body>
</html>
