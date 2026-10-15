<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Privacy Policy - {{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
        <main class="w-full max-w-[335px]">
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h1 class="mb-6 text-lg font-medium">Privacy Policy</h1>

                <div class="flex flex-col gap-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                    <p>
                        This privacy policy explains how we collect, use and protect your personal information when you use this service.
                    </p>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Information we collect</h2>
                        <p>
                            We collect information you provide directly, such as your name, email address and messages sent through our contact form, as well as basic usage data like the pages you visit.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">How we use your information</h2>
                        <p>
                            We use your information to provide and improve the service, respond to your inquiries and keep your account secure.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Sharing of information</h2>
                        <p>
                            We do not sell your personal information. We only share it with trusted providers who help us operate the service, or when required by law.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Cookies</h2>
                        <p>
                            We use cookies to keep you signed in and remember your preferences. You can disable cookies in your browser, but some features may not work properly.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Data retention and security</h2>
                        <p>
                            We keep your information only as long as necessary and use reasonable technical measures to protect it from unauthorized access.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Your rights</h2>
                        <p>
                            You may request access to, correction of or deletion of your personal information at any time by contacting us.
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h2 class="text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Changes to this policy</h2>
                        <p>
                            We may update this policy from time to time. Continued use of the service constitutes acceptance of any changes.
                        </p>
                    </div>

                    <p>
                        Questions about this policy?
                        <a href="{{ route('contacts') }}" class="underline underline-offset-4 font-medium text-[#f53003] dark:text-[#FF4433]">Contact us</a>.
                    </p>
                </div>
            </div>
        </main>
    </body>
</html>
