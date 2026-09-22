<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recruit - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-[560px]">
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h1 class="mb-2 text-lg font-medium">We're hiring</h1>
                <p class="mb-6 text-sm text-[#706f6c] dark:text-[#A1A09A]">Join our team and help build exceptional web applications.</p>

                <h2 class="mb-3 text-base font-medium">PHP Laravel Developer</h2>

                <div class="flex flex-col gap-4 text-sm leading-6">
                    <section>
                        <h3 class="mb-1 font-medium">About the role</h3>
                        <p class="text-[#706f6c] dark:text-[#A1A09A]">
                            We are looking for a PHP Laravel developer to build and maintain modern, secure,
                            and scalable web applications. You will work across the full stack, from Eloquent
                            models and migrations to Blade views and Tailwind-styled interfaces.
                        </p>
                    </section>

                    <section>
                        <h3 class="mb-1 font-medium">What you'll do</h3>
                        <ul class="flex flex-col gap-1 text-[#706f6c] dark:text-[#A1A09A] list-disc list-inside">
                            <li>Design and build features using Laravel best practices</li>
                            <li>Write clean, testable code covered by Pest tests</li>
                            <li>Collaborate on architecture, APIs, and database design</li>
                        </ul>
                    </section>

                    <section>
                        <h3 class="mb-1 font-medium">What we're looking for</h3>
                        <ul class="flex flex-col gap-1 text-[#706f6c] dark:text-[#A1A09A] list-disc list-inside">
                            <li>Strong experience with PHP and the Laravel framework</li>
                            <li>Comfort with relational databases and Eloquent</li>
                            <li>A focus on security, testing, and clean code</li>
                        </ul>
                    </section>

                    <a
                        href="mailto:careers@example.com"
                        class="inline-flex self-start px-5 py-1.5 mt-2 text-sm leading-normal text-white bg-[#1b1b18] border border-black rounded-sm hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                    >
                        Apply now
                    </a>
                </div>
            </div>
        </main>
    </body>
</html>
