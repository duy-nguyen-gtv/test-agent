<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Terms of Use - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-[335px]">
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h1 class="mb-6 text-lg font-medium">Terms of Use</h1>

                <div class="flex flex-col gap-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                    <p>
                        By accessing or using this service, you agree to be bound by these terms of use.
                    </p>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Acceptance of terms</h2>
                        <p>
                            Your use of the service is subject to your acceptance of and compliance with these terms.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Use of the service</h2>
                        <p>
                            You agree to use the service only for lawful purposes and in a manner that does not infringe the rights of others.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Limitation of liability</h2>
                        <p>
                            The service is provided on an "as is" and "as available" basis without warranties of any kind.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Changes to these terms</h2>
                        <p>
                            We may update these terms from time to time. Continued use of the service constitutes acceptance of any changes.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
