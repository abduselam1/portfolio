<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta-description','')" >


        <title>@yield('title','Portfolio')</title>

        <style>[x-cloak] { display: none !important; }</style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @stack('scripts')
        @livewireScripts
    </head>

    <body class="antialiased">
        <livewire:components.header />
        <div class="w-full">
            {{ $slot }}
        </div>


        <livewire:components.footer />
        @livewire('notifications')
    </body>
</html>
