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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .scrol-color {
                scrollbar-color: rgb(14, 73, 112) rgba(0, 0, 0, 0);
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/typewritterEffect.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-r from-gray-900 to-sky-950 relative flex flex-col lg:flex-row">

            <!-- Hamburger Icon (Visible on Mobile) -->
            <div class="fixed top-4 right-4 lg:hidden" style="z-index: 1005">
                <button onclick="toggleSidebar()" class="text-white focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar -->
            <div class="lg:w-1/5 w-full bg-slate-950 fixed lg:relative h-screen lg:h-auto transform translate-x-0 lg:translate-x-0 transition-transform duration-300 ease-in-out" id="mobile-sidebar"
            style="z-index: 1000">
                @include('layouts.sidebar')
            </div>

            <!-- Main Content Area -->
            <div class="lg:w-4/5 w-full h-screen bg-cover overflow-x-auto" style="background-image: url('{{ asset('storage/images/sparkle.png') }}');">
                @yield('content')
            </div>
            
        </div>

        <script src="https://cdn.tailwindcss.com"></script>

        <script>

            var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
            if(width<=800){
                var sidebar = document.getElementById('mobile-sidebar');
                if (sidebar.classList.contains('translate-x-0')) {
                    sidebar.classList.remove('translate-x-0');
                    sidebar.classList.add('-translate-x-full');
                }
            }


            function toggleSidebar() {
                var sidebar = document.getElementById('mobile-sidebar');
                if (sidebar.classList.contains('translate-x-0')) {
                    sidebar.classList.remove('translate-x-0');
                    sidebar.classList.add('-translate-x-full');
                } else {
                    sidebar.classList.remove('-translate-x-full');
                    sidebar.classList.add('translate-x-0');
                }
            }
        </script>

    </body>
</html>
