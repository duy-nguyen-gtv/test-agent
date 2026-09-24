<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $post['title'] }} - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-[335px] lg:max-w-2xl">
            <article class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                    {{ $post['published_at'] }} &middot; {{ $post['author'] }}
                </p>

                <h1 class="mt-2 mb-6 text-lg font-medium">{{ $post['title'] }}</h1>

                <div class="flex flex-col gap-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                    @foreach ($post['content'] as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </article>
        </main>
    </body>
</html>
