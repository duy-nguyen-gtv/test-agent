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
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-2xl">
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h1 class="mb-6 text-lg font-medium">Services</h1>

                <div class="flex flex-col gap-4">
                    <div class="p-4 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">
                        <h2 class="text-sm font-medium">Web Development</h2>
                        <p class="mt-1 text-sm text-[#706f6c] dark:text-[#A1A09A]">Custom websites and applications built with modern frameworks.</p>
                    </div>

                    <div class="p-4 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">
                        <h2 class="text-sm font-medium">API Integration</h2>
                        <p class="mt-1 text-sm text-[#706f6c] dark:text-[#A1A09A]">Connect your product with third-party services and platforms.</p>
                    </div>

                    <div class="p-4 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">
                        <h2 class="text-sm font-medium">Consulting</h2>
                        <p class="mt-1 text-sm text-[#706f6c] dark:text-[#A1A09A]">Expert guidance on architecture, performance, and best practices.</p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
