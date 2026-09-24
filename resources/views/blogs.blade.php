<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog - {{ config('app.name', 'Laravel') }}</title>

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
                    <a href="{{ route('blogs') }}" class="text-[#f53003] dark:text-[#FF4433]">Blog</a>
                    <a href="{{ route('products') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Products</a>
                    <a href="{{ route('contacts') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
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

        @php
            $featuredPost = [
                'category' => 'Engineering',
                'title' => 'How we scaled our platform to handle ten million requests a day',
                'excerpt' => 'A behind-the-scenes look at the architecture decisions, trade-offs, and lessons learned while growing our infrastructure to meet demand.',
                'author' => 'Priya Patel',
                'date' => 'Sep 18, 2026',
                'readingTime' => '8 min read',
            ];

            $categories = ['All', 'Engineering', 'Product', 'Design', 'Company'];

            $posts = [
                [
                    'category' => 'Product',
                    'title' => 'Introducing our new dashboard experience',
                    'excerpt' => 'We rebuilt the dashboard from the ground up to make it faster, clearer, and easier to act on your data.',
                    'author' => 'Daniel Kim',
                    'date' => 'Sep 12, 2026',
                    'readingTime' => '5 min read',
                ],
                [
                    'category' => 'Design',
                    'title' => 'Designing for clarity: our new component library',
                    'excerpt' => 'How we approached consistency and accessibility while building a shared design system across every product surface.',
                    'author' => 'Sofia Alvarez',
                    'date' => 'Sep 5, 2026',
                    'readingTime' => '6 min read',
                ],
                [
                    'category' => 'Engineering',
                    'title' => 'A deep dive into our queue processing pipeline',
                    'excerpt' => 'The tools and patterns we rely on to process background jobs reliably, even under heavy load.',
                    'author' => 'Priya Patel',
                    'date' => 'Aug 29, 2026',
                    'readingTime' => '7 min read',
                ],
                [
                    'category' => 'Company',
                    'title' => 'Welcoming five new teammates to ApexSoft',
                    'excerpt' => 'Meet the newest members of our team and learn what they will be working on in the months ahead.',
                    'author' => 'Alex Morgan',
                    'date' => 'Aug 21, 2026',
                    'readingTime' => '3 min read',
                ],
                [
                    'category' => 'Product',
                    'title' => 'Five tips to get more out of your workflow',
                    'excerpt' => 'Small changes that add up: shortcuts, automations, and settings that help teams move faster every day.',
                    'author' => 'Daniel Kim',
                    'date' => 'Aug 14, 2026',
                    'readingTime' => '4 min read',
                ],
                [
                    'category' => 'Engineering',
                    'title' => 'Migrating our test suite for faster feedback loops',
                    'excerpt' => 'Why we invested in test performance, what changed, and how it cut our CI time in half.',
                    'author' => 'Sofia Alvarez',
                    'date' => 'Aug 7, 2026',
                    'readingTime' => '6 min read',
                ],
            ];
        @endphp

        <section class="relative overflow-hidden border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-16 mx-auto text-center lg:py-24">
                <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Our blog</p>
                <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">
                    News, ideas, and lessons from our team
                </h1>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-[#706f6c] dark:text-[#A1A09A]">
                    Updates on what we are building, how we work, and what we are learning along the way.
                </p>
            </div>
        </section>

        <section class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="flex flex-wrap items-center gap-2 w-full max-w-6xl px-6 py-6 mx-auto">
                @foreach ($categories as $category)
                    <button
                        type="button"
                        class="px-4 py-1.5 text-sm rounded-full border {{ $category === 'All' ? 'bg-[#1b1b18] text-white border-black dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:border-[#eeeeec]' : 'border-[#e3e3e0] dark:border-[#3E3E3A] hover:border-[#19140035] dark:hover:border-[#62605b]' }}"
                    >
                        {{ $category }}
                    </button>
                @endforeach
            </div>
        </section>

        <section class="w-full max-w-6xl px-6 py-12 mx-auto">
            <a href="#" class="grid gap-8 p-6 transition-colors bg-white border rounded-lg lg:grid-cols-2 dark:bg-[#161615] border-[#e3e3e0] dark:border-[#3E3E3A] hover:border-[#19140035] dark:hover:border-[#62605b]">
                <div class="flex items-center justify-center h-64 rounded-lg bg-[#fff2f2] dark:bg-[#1D0002] lg:h-full">
                    <span class="text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Featured image</span>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="mb-3 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">{{ $featuredPost['category'] }}</p>
                    <h2 class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">
                        {{ $featuredPost['title'] }}
                    </h2>
                    <p class="mt-4 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                        {{ $featuredPost['excerpt'] }}
                    </p>
                    <div class="flex items-center gap-3 mt-6 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        <span>{{ $featuredPost['author'] }}</span>
                        <span>&middot;</span>
                        <span>{{ $featuredPost['date'] }}</span>
                        <span>&middot;</span>
                        <span>{{ $featuredPost['readingTime'] }}</span>
                    </div>
                </div>
            </a>
        </section>

        <section class="w-full max-w-6xl px-6 pb-20 mx-auto">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <a href="#" class="flex flex-col overflow-hidden transition-colors bg-white border rounded-lg dark:bg-[#161615] border-[#e3e3e0] dark:border-[#3E3E3A] hover:border-[#19140035] dark:hover:border-[#62605b]">
                        <div class="flex items-center justify-center h-40 bg-[#fff2f2] dark:bg-[#1D0002]">
                            <span class="text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Post image</span>
                        </div>
                        <div class="flex flex-col flex-1 p-6">
                            <p class="mb-3 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">{{ $post['category'] }}</p>
                            <h3 class="text-lg font-medium leading-snug">{{ $post['title'] }}</h3>
                            <p class="flex-1 mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                                {{ $post['excerpt'] }}
                            </p>
                            <div class="flex items-center gap-3 mt-6 text-xs text-[#706f6c] dark:text-[#A1A09A]">
                                <span>{{ $post['author'] }}</span>
                                <span>&middot;</span>
                                <span>{{ $post['date'] }}</span>
                                <span>&middot;</span>
                                <span>{{ $post['readingTime'] }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="flex justify-center mt-12">
                <button
                    type="button"
                    class="inline-block px-6 py-2.5 text-sm font-medium border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm hover:border-[#19140035] dark:hover:border-[#62605b]"
                >
                    Load more posts
                </button>
            </div>
        </section>

        <section class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto text-center">
                <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">Never miss a post</h2>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-[#706f6c] dark:text-[#A1A09A]">
                    Subscribe to get our latest articles delivered straight to your inbox.
                </p>
                <form class="flex flex-col max-w-md gap-3 mx-auto mt-8 sm:flex-row">
                    <input
                        type="email"
                        placeholder="you@example.com"
                        class="flex-1 px-4 py-2.5 text-sm bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm focus:outline-none focus:border-[#19140035] dark:focus:border-[#62605b]"
                    >
                    <button
                        type="submit"
                        class="inline-block px-6 py-2.5 text-sm font-medium text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                    >
                        Subscribe
                    </button>
                </form>
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
