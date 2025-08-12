@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="relative w-full bg-[#12474D] text-white overflow-hidden pt-28 px-4 sm:px-6 lg:px-20 lg:py-28 min-h-screen">

        {{-- Background Image with Overlay --}}
        <div class="absolute inset-0 z-0 w-full h-full">
            <img src="{{ asset('Images/Home1.png') }}" alt="Background"
                class="w-full h-full object-cover brightness-[.6] saturate-150" />
            <div class="absolute inset-0 bg-[#12474D]/70 mix-blend-multiply"></div>
        </div>

        {{-- Foreground Content --}}
        <div class="relative z-10 flex flex-col gap-20 mt-36">

            {{-- Header Section --}}
            <div class="w-full max-w-7xl font-satoshi px-4 sm:px-6 md:px-10 text-left flex flex-col items-start">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold uppercase tracking-wide leading-snug mb-2">
                    Unlock your <span class="font-serif italic">potential</span> with
                </h1>

                <h2 class="text-5xl sm:text-6xl md:text-7xl font-extrabold text-[#FFB71A] leading-tight tracking-wide mb-6">
                    NEOSIA TRAINING CENTER
                </h2>

                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 max-w-4xl">
                    Discover comprehensive solutions at Neosia Training Center — your premier destination for comprehensive
                    training programs, licensing services, professional certification, and expert consultation services.
                </p>

                <div class="mt-8 mb-4 max-w-3xl space-y-1">
                    <p class="text-base sm:text-lg md:text-xl text-gray-300">
                        Empowering you with the skills and knowledge to succeed in
                    </p>
                    <p class="text-base sm:text-lg md:text-xl text-gray-300">
                        the ever-evolving tech industry.
                    </p>
                </div>

                <a href="#explore"
                    class="inline-block mt-8 text-[#FFB71A] font-semibold border-2 border-[#FFB71A] px-8 py-3 rounded-md hover:bg-[#FFB71A] hover:text-white transition duration-300 text-lg">
                    Explore Now
                </a>
            </div>

            {{-- Highlight Section --}}
            <div class="w-full bg-[#FFB71A] rounded-xl px-4 sm:px-6 lg:px-10 py-12">
                <div
                    class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-3 xl:grid-cols-5 gap-6 text-base font-medium text-black">
                    @php
                        $items = [
                            'Launching Simulating Space',
                            'Simulating Word 2025',
                            'Design Software Stacks for Autonomous System in A&D',
                            'How Engineering Simulation Drives Impact for Sustainability',
                            'Ansys has Agreed to Combine with Synopsys',
                        ];
                    @endphp

                    @foreach ($items as $item)
                        <div class="flex items-start gap-3">
                            <div class="w-1 h-full bg-black rounded"></div>
                            <p class="leading-snug text-sm sm:text-base">{{ $item }}</p>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
@endsection
