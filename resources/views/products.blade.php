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
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-[335px] lg:max-w-4xl">
            <h1 class="mb-6 text-lg font-medium">Our products</h1>

            @if ($products->isEmpty())
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">No products available yet.</p>
            @else
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($products as $product)
                        <div class="p-6 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h2 class="text-base font-medium">{{ $product->name }}</h2>
                            <p class="mt-2 text-sm text-[#706f6c] dark:text-[#A1A09A]">{{ $product->description }}</p>
                            <p class="mt-4 text-sm font-medium">${{ number_format($product->price, 2) }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </main>
    </body>
</html>
