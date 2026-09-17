@extends('layouts.app')

@section('title', 'Welcome to ' . config('app.name', 'Laravel'))

@section('content')
    <section class="py-16 lg:py-24">
        <div class="max-w-3xl">
            <p class="mb-4 text-sm font-medium text-[#f53003] dark:text-[#FF4433]">Welcome</p>
            <h1 class="text-4xl lg:text-5xl font-medium leading-tight">
                Build something great with {{ config('app.name', 'Laravel') }}
            </h1>
            <p class="mt-6 text-lg text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                We craft reliable, delightful web applications with care. From first idea to launch,
                we help teams ship faster with confidence and clarity.
            </p>
            <div class="mt-8 flex flex-wrap items-center gap-3">
                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="inline-block px-5 py-2 bg-[#1b1b18] border border-black rounded-sm text-white hover:bg-black dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white"
                    >
                        Get started
                    </a>
                @endif
                <a
                    href="{{ route('about') }}"
                    class="inline-block px-5 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm hover:border-[#1915014a] dark:hover:border-[#62605b]"
                >
                    Learn more
                </a>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 pb-16">
        <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
            <h2 class="mb-2 text-lg font-medium">Simple</h2>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                Clean, focused interfaces that get out of your way so you can do your best work.
            </p>
        </div>
        <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
            <h2 class="mb-2 text-lg font-medium">Reliable</h2>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                Battle-tested foundations built for speed, security, and long-term maintainability.
            </p>
        </div>
        <div class="p-6 lg:p-8 bg-white dark:bg-[#161615] rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
            <h2 class="mb-2 text-lg font-medium">Human</h2>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                Support from real people who care about your success, every step of the way.
            </p>
        </div>
    </section>
@endsection
