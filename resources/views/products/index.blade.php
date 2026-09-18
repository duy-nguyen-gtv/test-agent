<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex flex-col min-h-screen">
        <header class="w-full max-w-5xl mx-auto px-6 py-6 flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-lg font-medium">{{ config('app.name', 'Laravel') }}</a>

            @if (Route::has('login'))
                <nav class="flex items-center gap-4 text-sm">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 border border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 border border-[#19140035] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm leading-normal"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="flex-1 w-full max-w-5xl mx-auto px-6 pb-16">
            <section class="py-12 lg:py-16 text-center">
                <h1 class="text-4xl lg:text-5xl font-medium">Our Products</h1>
                <p class="mt-3 text-[#706f6c] dark:text-[#A1A09A]">Thoughtfully made goods for everyday life.</p>
            </section>

            <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @forelse ($products as $product)
                    <article class="flex flex-col gap-3 p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                        <div class="flex items-start justify-between gap-4">
                            <h2 class="text-lg font-medium">{{ $product->name }}</h2>

                            @if ($product->in_stock)
                                <span class="shrink-0 inline-flex items-center gap-1.5 text-sm text-emerald-700 dark:text-emerald-400">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 dark:bg-emerald-400"></span>
                                    In stock
                                </span>
                            @else
                                <span class="shrink-0 inline-flex items-center gap-1.5 text-sm text-[#f53003] dark:text-[#FF4433]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#f53003] dark:bg-[#FF4433]"></span>
                                    Out of stock
                                </span>
                            @endif
                        </div>

                        <p class="text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $product->description }}</p>

                        <p class="mt-auto text-xl font-medium">${{ number_format($product->price, 2) }}</p>
                    </article>
                @empty
                    <p class="col-span-full py-16 text-center text-[#706f6c] dark:text-[#A1A09A]">No products available yet.</p>
                @endforelse
            </section>
        </main>
    </body>
</html>
