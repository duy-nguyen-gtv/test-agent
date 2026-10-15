<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Privacy Policy - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] antialiased">
        <header class="sticky top-0 z-50 border-b border-[#e3e3e0] dark:border-[#3E3E3A] bg-[#FDFDFC]/80 dark:bg-[#0a0a0a]/80 backdrop-blur">
            <div class="flex items-center justify-between w-full max-w-6xl px-6 py-4 mx-auto">
                <a href="{{ url('/') }}" class="text-lg font-semibold tracking-tight">
                    Apex<span class="text-[#f53003] dark:text-[#FF4433]">Soft</span>
                </a>

                <nav class="hidden items-center gap-8 text-sm md:flex">
                    <a href="{{ url('/#about') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">About</a>
                    <a href="{{ url('/#team') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Team</a>
                    <a href="{{ route('services') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Services</a>
                    <a href="{{ url('/#contact') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
                </nav>

                @if (Route::has('login'))
                    <div class="flex items-center gap-3">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="inline-block px-5 py-1.5 text-sm text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 text-sm border border-transparent rounded-sm hover:border-[#19140035] dark:hover:border-[#3E3E3A]"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 text-sm text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </header>

        <section class="relative overflow-hidden">
            <div class="flex flex-col items-center justify-center w-full max-w-6xl px-6 py-20 mx-auto text-center lg:py-32">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Legal</p>
                <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                    Privacy Policy
                </h1>
                <p class="max-w-2xl mt-6 text-lg text-[#706f6c] dark:text-[#A1A09A]">
                    This privacy policy explains how we collect, use and protect your personal information when you use this service.
                </p>
            </div>
        </section>

        <section id="policy" class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Your privacy</p>
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">How we handle your data</h2>
                <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $sections = [
                            ['title' => 'Information we collect', 'body' => 'We collect information you provide directly, such as your name, email address and messages sent through our contact form, as well as basic usage data like the pages you visit.'],
                            ['title' => 'How we use your information', 'body' => 'We use your information to provide and improve the service, respond to your inquiries and keep your account secure.'],
                            ['title' => 'Sharing of information', 'body' => 'We do not sell your personal information. We only share it with trusted providers who help us operate the service, or when required by law.'],
                            ['title' => 'Cookies', 'body' => 'We use cookies to keep you signed in and remember your preferences. You can disable cookies in your browser, but some features may not work properly.'],
                            ['title' => 'Data retention and security', 'body' => 'We keep your information only as long as necessary and use reasonable technical measures to protect it from unauthorized access.'],
                            ['title' => 'Your rights', 'body' => 'You may request access to, correction of or deletion of your personal information at any time by contacting us.'],
                        ];
                    @endphp

                    @foreach ($sections as $section)
                        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h3 class="text-lg font-medium">{{ $section['title'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $section['body'] }}</p>
                        </div>
                    @endforeach
                </div>

                <p class="mt-10 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                    We may update this policy from time to time. Continued use of the service constitutes acceptance of any changes.
                </p>
            </div>
        </section>

        <section id="contact" class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto text-center">
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">Questions about this policy?</h2>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-[#706f6c] dark:text-[#A1A09A]">
                    Reach out and we will get back to you about how your information is handled.
                </p>
                <a
                    href="{{ route('contacts') }}"
                    class="inline-block px-6 py-3 mt-8 text-sm font-medium text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                >
                    Contact us
                </a>
            </div>
        </section>

        <footer class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="flex flex-col items-center justify-between w-full max-w-6xl gap-4 px-6 py-8 mx-auto text-sm text-[#706f6c] dark:text-[#A1A09A] sm:flex-row">
                <p>&copy; {{ date('Y') }} ApexSoft. All rights reserved.</p>
                <p>Built with Laravel.</p>
            </div>
        </footer>
    </body>
</html>
