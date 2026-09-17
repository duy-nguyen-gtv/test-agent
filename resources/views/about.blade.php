@extends('layouts.app')

@section('title', 'About - ' . config('app.name', 'Laravel'))

@section('content')
    <section class="py-16 lg:py-24">
        <div class="max-w-3xl">
            <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">About us</p>
            <h1 class="text-4xl lg:text-5xl font-medium leading-tight">A team you can count on</h1>
            <p class="mt-6 text-lg text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                We are a small, focused team building software that feels effortless to use.
                Learn who we are, why teams choose us, and how to get in touch.
            </p>
        </div>
    </section>

    <section id="who-we-are" class="pb-16">
        <h2 class="mb-6 text-2xl font-medium">Who we are</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                    We are engineers, designers, and product thinkers who believe great software
                    starts with listening. Since day one, our goal has been simple: build tools
                    that are honest, useful, and a pleasure to use.
                </p>
            </div>
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                    We work remotely across time zones, and we treat every project like our own.
                    No hand-offs, no silos — just one team invested in your outcome.
                </p>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="pb-16">
        <h2 class="mb-6 text-2xl font-medium">Why choose us</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h3 class="mb-2 text-lg font-medium">Craft</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                    Every detail is considered, from performance to accessibility, so your product
                    feels polished on day one.
                </p>
            </div>
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h3 class="mb-2 text-lg font-medium">Clarity</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                    Transparent process, clear communication, and honest timelines. You always know
                    where things stand.
                </p>
            </div>
            <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                <h3 class="mb-2 text-lg font-medium">Partnership</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                    We stay after launch. Long-term support and thoughtful iteration keep your product
                    growing.
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="pb-16">
        <h2 class="mb-6 text-2xl font-medium">Contact</h2>
        <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
            <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                Have a project in mind, or just want to say hello? We would love to hear from you.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
                <div>
                    <h3 class="mb-1 font-medium">Email</h3>
                    <a href="mailto:hello@example.com" class="text-[#f53003] dark:text-[#FF4433] underline underline-offset-4">hello@example.com</a>
                </div>
                <div>
                    <h3 class="mb-1 font-medium">Phone</h3>
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">+1 (555) 123-4567</p>
                </div>
                <div>
                    <h3 class="mb-1 font-medium">Office</h3>
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">123 Market Street, Suite 400<br>San Francisco, CA 94103</p>
                </div>
            </div>
        </div>
    </section>
@endsection
