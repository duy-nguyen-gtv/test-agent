<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-[335px]">
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h1 class="mb-6 text-lg font-medium">Contact us</h1>

                @if (session('status'))
                    <p class="mb-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">{{ session('status') }}</p>
                @endif

                <form method="POST" action="{{ route('contacts.store') }}" class="flex flex-col gap-4">
                    @csrf

                    <div class="flex flex-col gap-1">
                        <label for="name" class="text-sm font-medium">Name</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            class="w-full px-3 py-2 text-sm bg-transparent border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm"
                        >
                        @error('name')
                            <p class="text-sm text-[#f53003] dark:text-[#FF4433]">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="email" class="text-sm font-medium">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            class="w-full px-3 py-2 text-sm bg-transparent border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm"
                        >
                        @error('email')
                            <p class="text-sm text-[#f53003] dark:text-[#FF4433]">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="message" class="text-sm font-medium">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            class="w-full px-3 py-2 text-sm bg-transparent border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-sm text-[#f53003] dark:text-[#FF4433]">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="px-5 py-1.5 mt-2 text-sm leading-normal text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                    >
                        Send message
                    </button>
                </form>
            </div>
        </main>
    </body>
</html>
