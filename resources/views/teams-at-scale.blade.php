<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teams at Scale - {{ config('app.name', 'Laravel') }}</title>

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
                    <a href="#teams" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Teams</a>
                    <a href="#projects" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Projects</a>
                    <a href="{{ route('products') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Products</a>
                </nav>
            </div>
        </header>

        <section class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <div class="max-w-3xl">
                    <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Teams at scale</p>
                    <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">
                        How we organize to ship great work.
                    </h1>
                    <p class="mt-6 text-lg leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                        ApexSoft grows without losing momentum. We break into small, cross-functional teams that
                        own outcomes end to end — and we back them with the projects worth talking about.
                    </p>
                </div>
            </div>
        </section>

        <section id="teams" class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Our teams</p>
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">The squads behind the work</h2>

                @php
                    $teams = [
                        ['name' => 'Platform Engineering', 'focus' => 'Infrastructure', 'bio' => 'Owns the cloud, CI/CD, and developer experience that keeps every other team shipping fast and safely.'],
                        ['name' => 'Product Design', 'focus' => 'Experience', 'bio' => 'Designs clear, inclusive interfaces and the design system every product is built on.'],
                        ['name' => 'Data & AI', 'focus' => 'Intelligence', 'bio' => 'Builds the pipelines, models, and analytics that turn raw data into confident decisions.'],
                        ['name' => 'Delivery', 'focus' => 'Outcomes', 'bio' => 'Leads engagements, coordinates releases, and keeps clients in the loop every step of the way.'],
                    ];
                @endphp

                <div class="grid gap-8 mt-10 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($teams as $team)
                        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h3 class="text-lg font-medium">{{ $team['name'] }}</h3>
                            <p class="mt-1 text-sm text-[#f53003] dark:text-[#FF4433]">{{ $team['focus'] }}</p>
                            <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $team['bio'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="projects" class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Our projects</p>
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">Recent work we are proud of</h2>

                @php
                    $projects = [
                        ['name' => 'Acme Retail Platform', 'type' => 'Commerce', 'bio' => 'A headless commerce platform serving two million shoppers across web and mobile.'],
                        ['name' => 'Northwind Analytics', 'type' => 'Data', 'bio' => 'A real-time reporting suite that cut month-end close from days to minutes.'],
                        ['name' => 'Pulse Health Portal', 'type' => 'Healthcare', 'bio' => 'A patient-facing portal with scheduling, telehealth, and secure messaging.'],
                        ['name' => 'Finley Payments', 'type' => 'Fintech', 'bio' => 'A PCI-compliant payment orchestration layer processing 40k transactions a day.'],
                    ];
                @endphp

                <div class="grid gap-8 mt-10 sm:grid-cols-2">
                    @foreach ($projects as $project)
                        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium">{{ $project['name'] }}</h3>
                                <span class="px-2 py-0.5 text-xs font-medium rounded-full bg-[#fff2f2] text-[#f53003] dark:bg-[#1D0002] dark:text-[#FF4433]">{{ $project['type'] }}</span>
                            </div>
                            <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $project['bio'] }}</p>
                        </div>
                    @endforeach
                </div>
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
