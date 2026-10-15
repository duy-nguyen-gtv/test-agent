<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Terms and Conditions - {{ config('app.name', 'Laravel') }}</title>

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
                    <a href="#overview" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Overview</a>
                    <a href="#contents" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contents</a>
                    <a href="{{ route('contacts') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
                </nav>
            </div>
        </header>

        <section id="overview" class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <div class="max-w-3xl">
                    <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Legal</p>
                    <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">
                        Terms and Conditions
                    </h1>
                    <p class="mt-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">Last updated: October 15, 2026</p>
                    <p class="mt-6 text-lg leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                        These terms govern your access to and use of the ApexSoft website, products, and services.
                        Please read them carefully. They explain your rights and obligations, and ours.
                    </p>
                </div>
            </div>
        </section>

        @php
            $sections = [
                ['id' => 'acceptance', 'title' => 'Acceptance of terms', 'body' => [
                    'By accessing or using our website or services, you agree to be bound by these Terms and Conditions and by any additional terms referenced here.',
                    'If you do not agree to these terms, you must not access or use the website or services.',
                ]],
                ['id' => 'eligibility', 'title' => 'Eligibility and accounts', 'body' => [
                    'You must be at least 18 years old, or the age of majority where you live, to create an account or use our services.',
                    'You are responsible for keeping your account credentials confidential, for all activity under your account, and for keeping the information you provide accurate and up to date. Tell us promptly if you suspect unauthorized use of your account.',
                ]],
                ['id' => 'use', 'title' => 'Use of the services', 'body' => [
                    'You agree to use the services only for lawful purposes and in line with these terms.',
                    'You must not attempt to reverse engineer, scrape, overload, or interfere with the services or their security, upload malicious code, or use the services to infringe the rights of others.',
                ]],
                ['id' => 'products', 'title' => 'Products and services', 'body' => [
                    'Descriptions of products and services on this website are provided for general information only and may change without notice.',
                    'Specific client engagements are governed by a separate written agreement or statement of work. If that agreement conflicts with these terms, the agreement takes precedence.',
                ]],
                ['id' => 'fees', 'title' => 'Fees and payment', 'body' => [
                    'Fees for our services are set out in the applicable agreement. Unless stated otherwise, invoices are due within 30 days of issue.',
                    'Overdue amounts may accrue interest at the rate permitted by law, and we may suspend services until outstanding balances are paid.',
                ]],
                ['id' => 'intellectual-property', 'title' => 'Intellectual property', 'body' => [
                    'ApexSoft retains all rights in this website, our brand, and our pre-existing tools, libraries, and know-how.',
                    'Ownership of deliverables created for a client transfers as described in the applicable engagement agreement, once all related fees have been paid in full.',
                ]],
                ['id' => 'user-content', 'title' => 'User content and feedback', 'body' => [
                    'You keep ownership of any content you submit to us, such as messages sent through our contact form.',
                    'You grant us a non-exclusive licence to use that content to respond to you and to provide and improve our services. Feedback you choose to share may be used without obligation to you.',
                ]],
                ['id' => 'confidentiality', 'title' => 'Confidentiality', 'body' => [
                    'Each party agrees to protect the other party\'s non-public information with reasonable care and to use it only for the purpose for which it was shared.',
                ]],
                ['id' => 'third-parties', 'title' => 'Third-party services', 'body' => [
                    'Our website and services may link to or integrate with third-party websites and services. We do not control them and are not responsible for their content, policies, or availability.',
                ]],
                ['id' => 'warranties', 'title' => 'Disclaimer of warranties', 'body' => [
                    'Except as expressly stated in a written agreement, the website and services are provided on an "as is" and "as available" basis, without warranties of any kind, whether express or implied.',
                ]],
                ['id' => 'liability', 'title' => 'Limitation of liability', 'body' => [
                    'To the maximum extent permitted by law, ApexSoft will not be liable for any indirect, incidental, special, or consequential damages, or for any loss of profits, data, or goodwill.',
                    'Our total liability for any claim relating to the services is limited to the fees you paid us in the 12 months before the claim arose.',
                ]],
                ['id' => 'indemnification', 'title' => 'Indemnification', 'body' => [
                    'You agree to indemnify and hold ApexSoft harmless from any claims, losses, and expenses arising from your misuse of the services or your breach of these terms.',
                ]],
                ['id' => 'termination', 'title' => 'Termination', 'body' => [
                    'We may suspend or terminate your access to the services if you breach these terms. You may stop using the services at any time.',
                    'Provisions that by their nature should survive termination, including intellectual property, confidentiality, and limitation of liability, will remain in effect.',
                ]],
                ['id' => 'governing-law', 'title' => 'Governing law and disputes', 'body' => [
                    'These terms are governed by the laws of the jurisdiction in which ApexSoft is registered.',
                    'Before starting formal proceedings, both parties agree to try in good faith to resolve any dispute through negotiation.',
                ]],
                ['id' => 'changes', 'title' => 'Changes to these terms', 'body' => [
                    'We may update these terms from time to time. Changes are posted on this page with a new "Last updated" date. Continued use of the website or services after a change means you accept the updated terms.',
                ]],
            ];
        @endphp

        <section id="contents" class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="w-full max-w-6xl px-6 py-20 mx-auto">
                <div class="max-w-3xl">
                    <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Contents</p>

                    <ol class="grid gap-2 text-sm list-decimal list-inside sm:grid-cols-2">
                        @foreach ($sections as $section)
                            <li>
                                <a href="#{{ $section['id'] }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">{{ $section['title'] }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a href="#contact" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact us</a>
                        </li>
                    </ol>

                    <div class="flex flex-col gap-10 mt-16">
                        @foreach ($sections as $section)
                            <div id="{{ $section['id'] }}" class="scroll-mt-24">
                                <h2 class="text-xl font-semibold tracking-tight">{{ $loop->iteration }}. {{ $section['title'] }}</h2>
                                @foreach ($section['body'] as $paragraph)
                                    <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">{{ $paragraph }}</p>
                                @endforeach
                            </div>
                        @endforeach

                        <div id="contact" class="scroll-mt-24">
                            <h2 class="text-xl font-semibold tracking-tight">{{ count($sections) + 1 }}. Contact us</h2>
                            <p class="mt-3 text-sm leading-relaxed text-[#706f6c] dark:text-[#A1A09A]">
                                Questions about these terms? Email us at
                                <a href="mailto:legal@apexsoft.example" class="text-[#f53003] dark:text-[#FF4433] underline underline-offset-4">legal@apexsoft.example</a>
                                or reach out through our
                                <a href="{{ route('contacts') }}" class="text-[#f53003] dark:text-[#FF4433] underline underline-offset-4">contact page</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
            <div class="flex flex-col items-center justify-between w-full max-w-6xl gap-4 px-6 py-8 mx-auto text-sm text-[#706f6c] dark:text-[#A1A09A] sm:flex-row">
                <p>&copy; {{ date('Y') }} ApexSoft. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('terms-of-conditions') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Terms and Conditions</a>
                    <p>Built with Laravel.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
