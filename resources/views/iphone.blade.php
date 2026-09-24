<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iPhone 18 - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-[335px] lg:max-w-4xl">
            <section class="grid gap-8 lg:grid-cols-[1fr_0.8fr] lg:items-center">
                <div class="flex flex-col gap-6">
                    <p class="text-sm font-medium text-[#f53003] dark:text-[#FF4433]">iphone 18</p>

                    <div class="flex flex-col gap-4">
                        <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">iPhone 18</h1>
                        <p class="max-w-xl text-base leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                            Built for speed, clarity, and all-day power in a beautifully refined design.
                        </p>
                    </div>

                    <button
                        type="button"
                        onclick="alert('please wait.')"
                        class="w-fit px-6 py-3 text-sm font-medium text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                    >
                        Buy now
                    </button>
                </div>

                <div class="relative mx-auto flex aspect-[9/16] w-full max-w-[260px] items-center justify-center rounded-[2rem] bg-[#1b1b18] p-3 shadow-[inset_0px_0px_0px_1px_rgba(255,255,255,0.2)] dark:bg-[#eeeeec]">
                    <div class="h-full w-full rounded-[1.5rem] bg-[#FDFDFC] p-4 dark:bg-[#0a0a0a]">
                        <div class="mx-auto mb-8 h-5 w-20 rounded-full bg-[#1b1b18] dark:bg-[#eeeeec]"></div>
                        <div class="flex h-[calc(100%-3.25rem)] flex-col justify-end rounded-[1rem] bg-[#f6f6f2] p-5 dark:bg-[#161615]">
                            <p class="text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Now showing</p>
                            <p class="mt-2 text-2xl font-semibold">iPhone 18</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
