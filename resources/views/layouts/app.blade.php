<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .scrol-color{
                scrollbar-color: rgb(14, 73, 112) rgba(0, 0, 0, 0);
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/typewritterEffect.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-r from-gray-900 to-cyan-950">
            {{-- @include('layouts.navigation') --}}

            <div class="w-screen h-screen fixed p-12 rounded overflow-hidden border-b border-gray-200">
                <div class="grid grid-cols-5 gap-4 w-100 h-100 rounded bg-gradient-to-bl from-slate-950 to-sky-950 overflow-auto shadow-md sm:rounded-lg scrol-color" style="height: 100%">
                    <div class="sidebar">
                        @include('layouts.sidebar')
                    </div>
                    <div class="col-span-4" style="background-image: url('{{ asset('storage/images/sparkle.png') }}');">
                        @yield('content')
                        {{-- @include('layouts.footer') --}}
                    </div>
                </div>
            </div>

        </div>

        <script src="https://cdn.tailwindcss.com"></script>

        
    </body>
</html>
