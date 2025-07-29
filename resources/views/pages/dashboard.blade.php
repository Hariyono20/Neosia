@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="relative w-screen min-h-screen overflow-hidden text-white pt-28 px-4 sm:px-6 lg:px-20 bg-[#12474D]">
    
    {{-- Background Image --}}
    <div class="absolute inset-0 z-0">
      <img 
        src="{{ asset('Images/Home1.png') }}" 
        alt="Background" 
        class="w-full h-full object-cover brightness-[.6] saturate-150"
      >
      <div class="absolute inset-0 bg-[#12474D] opacity-70 mix-blend-multiply"></div>
    </div>

    <div class="relative z-10 mt-20">
      {{-- Header Section --}}
      <div class="p-4 sm:p-6 md:p-10 rounded-2xl max-w-5xl w-full">
        <h1 class="text-2xl sm:text-4xl md:text-5xl font-extrabold leading-snug tracking-wide uppercase mb-5">
          UNLOCK YOUR POTENTIAL <br>
          <span class="text-[#FFB71A]">WITH NEOSIA TRAINING CENTER</span>
        </h1>
        <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-3">
          Discover comprehensive solutions at Neosia Training Center: your premier destination for training programs, licensing, certification, and expert consultation services.
        </p>
        <p class="text-sm sm:text-base md:text-lg text-gray-300">
          Empowering you with the skills and knowledge to thrive in the ever-evolving tech industry.
        </p>

        <a href="#explore" class="inline-block mt-6 text-[#FFB71A] font-bold border-2 border-[#FFB71A] px-6 py-2 rounded-md hover:bg-[#FFB71A] hover:text-white transition duration-300">
          Explore Now
        </a>
      </div>

      {{-- Additional Information Section --}}
      <div class="mt-16 sm:mt-20 bg-[#FFB71A] rounded-xl px-4 sm:px-6 lg:px-10 py-10 w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-6 text-sm font-normal text-black">
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
              <!-- Vertical Bar -->
              <div class="w-1 h-full bg-black rounded"></div>
              <!-- Info Text -->
              <p class="text-sm leading-snug">
                {{ $item }}
              </p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
