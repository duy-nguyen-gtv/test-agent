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
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] antialiased">
        <header class="sticky top-0 z-50 border-b border-[#e3e3e0] dark:border-[#3E3E3A] bg-[#FDFDFC]/80 dark:bg-[#0a0a0a]/80 backdrop-blur">
            <div class="flex items-center justify-between w-full max-w-6xl px-6 py-4 mx-auto">
                <a href="{{ url('/') }}" class="text-lg font-semibold tracking-tight">
                    Apex<span class="text-[#f53003] dark:text-[#FF4433]">Soft</span>
                </a>

                <nav class="hidden items-center gap-8 text-sm md:flex">
                    <a href="#about" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">About</a>
                    <a href="#team" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Team</a>
                    <a href="#contact" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
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
            <div class="flex items-center justify-center w-full max-w-6xl px-6 py-20 mx-auto lg:py-32">
                <h1 class="text-4xl font-semibold leading-tight tracking-tight text-center sm:text-5xl lg:text-6xl">
                    CONTACT US FOR WORK
                </h1>
            </div>
        </section>

        <section id="about" class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">About us</p>
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">A team built for the long run</h2>
                <div class="grid gap-8 mt-10 md:grid-cols-3">
                    <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                        <h3 class="text-lg font-medium">Strategy first</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                            We start with your goals, not the tech stack. Every engagement begins by understanding
                            the problem we are solving together.
                        </p>
                    </div>
                    <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                        <h3 class="text-lg font-medium">Craft in code</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                            Clean, tested, and maintainable software is our default. We care about the details that
                            keep products healthy for years.
                        </p>
                    </div>
                    <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                        <h3 class="text-lg font-medium">Partnership</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                            We embed with your team, share what we learn, and hand over software you can truly own.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Our team</p>
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">The people behind the work</h2>
                <div class="grid gap-8 mt-10 sm:grid-cols-2 lg:grid-cols-4">
                    @php
                        $team = [
                            ['name' => 'Alex Morgan', 'role' => 'Founder & CEO', 'bio' => 'Former startup CTO who loves turning fuzzy ideas into shipped products.'],
                            ['name' => 'Priya Patel', 'role' => 'Head of Engineering', 'bio' => 'Architects scalable systems and obsesses over code quality and reliability.'],
                            ['name' => 'Daniel Kim', 'role' => 'Product Designer', 'bio' => 'Designs interfaces that are clear, inclusive, and a joy to use.'],
                            ['name' => 'Sofia Alvarez', 'role' => 'Delivery Lead', 'bio' => 'Keeps projects on track and keeps clients in the loop, every step of the way.'],
                        ];
                    @endphp

                    @foreach ($team as $member)
                        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <div class="flex items-center justify-center w-12 h-12 mb-4 text-sm font-medium rounded-full bg-[#fff2f2] text-[#f53003] dark:bg-[#1D0002] dark:text-[#FF4433]">
                                {{ collect(str_word_count($member['name'], 1))->map(fn ($w) => $w[0])->take(2)->implode('') }}
                            </div>
                            <h3 class="font-medium">{{ $member['name'] }}</h3>
                            <p class="mt-1 text-sm text-[#f53003] dark:text-[#FF4433]">{{ $member['role'] }}</p>
                            <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $member['bio'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto text-center">
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">Have a project in mind?</h2>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-[#706f6c] dark:text-[#A1A09A]">
                    Tell us what you are building. We will help you take it from idea to launch.
                </p>
                <a
                    href="mailto:hello@apexsoft.example"
                    class="inline-block px-6 py-3 mt-8 text-sm font-medium text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                >
                    Start a conversation
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
