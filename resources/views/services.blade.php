<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Services - {{ config('app.name', 'Laravel') }}</title>

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
                    <a href="#services" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Services</a>
                    <a href="#process" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Process</a>
                    <a href="{{ route('products') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Products</a>
                    <a href="{{ route('contacts') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
                </nav>
            </div>
        </header>

        <section class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <div class="max-w-3xl">
                    <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Our services</p>
                    <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">
                        Everything you need to go from idea to launch.
                    </h1>
                    <p class="mt-6 text-lg leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                        ApexSoft partners with ambitious teams to design, build, and run software that matters.
                        Pick a single service or bring us in end to end.
                    </p>
                </div>
            </div>
        </section>

        <section id="services" class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">What we do</p>
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">Services built around your goals</h2>

                @php
                    $services = [
                        ['name' => 'Custom Software Development', 'tagline' => 'Build', 'bio' => 'Web and mobile applications engineered for reliability, tested thoroughly, and built to grow with your business.'],
                        ['name' => 'Product Design', 'tagline' => 'Experience', 'bio' => 'Research, prototyping, and design systems that make your product clear, inclusive, and a joy to use.'],
                        ['name' => 'Cloud & DevOps', 'tagline' => 'Infrastructure', 'bio' => 'Cloud architecture, CI/CD pipelines, and observability so you can ship often and sleep well.'],
                        ['name' => 'Data & AI', 'tagline' => 'Intelligence', 'bio' => 'Data pipelines, analytics, and machine learning features that turn raw data into confident decisions.'],
                        ['name' => 'Ongoing Support', 'tagline' => 'Care', 'bio' => 'Maintenance, monitoring, and continuous improvement that keep your software healthy long after launch.'],
                    ];
                @endphp

                <div class="grid gap-8 mt-10 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($services as $service)
                        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h3 class="text-lg font-medium">{{ $service['name'] }}</h3>
                            <p class="mt-1 text-sm text-[#f53003] dark:text-[#FF4433]">{{ $service['tagline'] }}</p>
                            <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $service['bio'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="process" class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">How we work</p>
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">A simple, proven process</h2>

                @php
                    $steps = [
                        ['name' => 'Discover', 'bio' => 'We dig into your goals, users, and constraints to define what success looks like.'],
                        ['name' => 'Design', 'bio' => 'We shape the solution with prototypes and a plan you can review before we build.'],
                        ['name' => 'Build', 'bio' => 'We ship in small, tested increments so you see progress every week.'],
                        ['name' => 'Support', 'bio' => 'We monitor, maintain, and improve your software after it goes live.'],
                    ];
                @endphp

                <div class="grid gap-8 mt-10 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($steps as $step)
                        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 text-sm font-medium rounded-full bg-[#fff2f2] text-[#f53003] dark:bg-[#1D0002] dark:text-[#FF4433]">
                                {{ $loop->iteration }}
                            </div>
                            <h3 class="text-lg font-medium">{{ $step['name'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $step['bio'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <div class="w-full max-w-6xl px-6 py-20 mx-auto text-center">
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">Have a project in mind?</h2>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-[#706f6c] dark:text-[#A1A09A]">
                    Tell us what you are building. We will help you take it from idea to launch.
                </p>
                <a
                    href="{{ route('contacts') }}"
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
