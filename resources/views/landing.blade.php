<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex min-h-screen flex-col">
        <header class="w-full max-w-5xl mx-auto px-6 py-6 text-sm">
            <nav class="flex items-center justify-between gap-4">
                <a href="{{ route('home') }}" class="font-medium">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="flex items-center gap-4">
                    <a href="{{ route('services.index') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433]">
                        Services
                    </a>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433]">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433]">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="flex-1 w-full max-w-5xl mx-auto px-6 py-16 lg:py-24">
            <section class="max-w-2xl">
                <p class="text-sm font-medium text-[#f53003] dark:text-[#FF4433] mb-4">
                    Software Development &amp; Marketing
                </p>
                <h1 class="text-4xl lg:text-5xl font-semibold leading-tight mb-6">
                    We build products people love, and grow the brands behind them.
                </h1>
                <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-8">
                    A full-service team for custom software and growth marketing — from the first line of code to the first paying customer.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a
                        href="{{ route('services.index') }}"
                        class="inline-block px-5 py-2.5 text-sm text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                    >
                        Explore our services
                    </a>
                    <a
                        href="{{ route('register') }}"
                        class="inline-block px-5 py-2.5 text-sm border border-[#19140035] rounded-sm hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]"
                    >
                        Get started
                    </a>
                </div>
            </section>

            <section class="mt-20 lg:mt-28">
                <h2 class="text-2xl font-medium mb-6">What we do</h2>
                <div class="grid gap-6 sm:grid-cols-2">
                    <a
                        href="{{ route('services.index') }}"
                        class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] hover:shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.4)] transition-shadow"
                    >
                        <h3 class="text-lg font-medium mb-2">Software Development</h3>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                            Custom web applications, APIs, and cloud-native systems built to solve your hardest problems.
                        </p>
                    </a>
                    <a
                        href="{{ route('services.index') }}"
                        class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] hover:shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.4)] transition-shadow"
                    >
                        <h3 class="text-lg font-medium mb-2">Marketing</h3>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                            Data-driven campaigns and brand strategies that turn attention into lasting growth.
                        </p>
                    </a>
                </div>
            </section>
        </main>

        <footer class="w-full max-w-5xl mx-auto px-6 py-8 text-sm text-[#706f6c] dark:text-[#A1A09A] border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </footer>
    </body>
</html>
