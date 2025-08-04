@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="relative w-full bg-[#12474D] overflow-hidden text-white pt-28 px-4 sm:px-6 lg:px-20 lg:py-28">

    {{-- Background --}}
    <div class="absolute inset-0 z-0 h-full">
      <img 
        src="{{ asset('Images/Home1.png') }}" 
        alt="Background" 
        class="w-full h-full object-cover brightness-[.6] saturate-150 sm:h-[500px] md:h-auto"
      >
      <div class="absolute inset-0 bg-[#12474D]/70 mix-blend-multiply"></div>
    </div>

    {{-- Main Content --}}
    <div class="relative z-10 flex flex-col gap-20 mt-36">

      {{-- Header Section --}}
      <div class="max-w-8xl w-full mx-auto text-left p-4 sm:p-6 md:p-10">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-snug tracking-wide uppercase mb-6">
          UNLOCK YOUR POTENTIAL <br>
          <span class="text-[#FFB71A]">WITH NEOSIA TRAINING CENTER</span>
        </h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-3">
          Discover comprehensive solutions at Neosia Training Center: your premier destination for training programs, licensing, certification, and expert consultation services.
        </p>
        <p class="text-base sm:text-lg md:text-xl text-gray-300">
          Empowering you with the skills and knowledge to thrive in the ever-evolving tech industry.
        </p>

        <a href="#explore" class="inline-block mt-8 text-[#FFB71A] font-semibold border-2 border-[#FFB71A] px-8 py-3 rounded-md hover:bg-[#FFB71A] hover:text-white transition-all duration-300 text-lg">
          Explore Now
        </a>
      </div>

      {{-- Highlight Section --}}
      <div class="w-full bg-[#FFB71A] rounded-xl px-4 sm:px-6 lg:px-10 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-6 text-base font-medium text-black">
          @php
            $items = [
              'Launching Simulating Space',
              'Simulating Word 2025',
              'Design Software Stacks for Autonomous System in A&D',
              'How Engineering Simulation Drives Impact for Sustainability',
              'Ansys has Agreed to Combine with Synopsys'
            ];
          @endphp

          @foreach ($items as $item)
            <div class="flex items-start gap-3">
              <div class="w-1 h-full bg-black rounded"></div>
              <p class="leading-snug">{{ $item }}</p>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
@endsection
