<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name', 'Laravel'))</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex flex-col min-h-screen">
        <header class="w-full max-w-5xl mx-auto px-6 lg:px-8 py-6">
            <nav class="flex items-center justify-between gap-4">
                <a href="{{ route('home') }}" class="text-lg font-medium">{{ config('app.name', 'Laravel') }}</a>

                <div class="flex items-center gap-4 text-sm">
                    <a href="{{ route('home') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Home</a>
                    <a href="{{ route('about') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">About</a>

                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm hover:border-[#1915014a] dark:hover:border-[#62605b]"
                        >
                            Dashboard
                        </a>
                    @else
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Log in</a>
                        @endif

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 bg-[#1b1b18] border border-black rounded-sm text-white hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </nav>
        </header>

        <main class="flex-1 w-full max-w-5xl mx-auto px-6 lg:px-8">
            @yield('content')
        </main>

        <footer class="w-full max-w-5xl mx-auto px-6 lg:px-8 py-10 mt-16 border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>

                <div class="flex items-center gap-4">
                    <a href="{{ route('about') }}" class="hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">About</a>
                    <a href="{{ route('about') }}#contact" class="hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Contact</a>
                </div>
            </div>
        </footer>
    </body>
</html>
