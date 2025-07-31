<!-- resources/views/components/event.blade.php -->
<section class="bg-[#12474D] py-16 px-6 md:px-16">
    <div class="text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up">
        <h2 class="text-3xl md:text-5xl font-bold text-[#FFB71A] mb-4">
            Join Our Upcoming Events
        </h2>
        <p class="text-gray-200 text-base md:text-lg leading-relaxed">
            Stay ahead in the industry by attending our upcoming events. Gain insights from top experts,
            network with professionals, and explore the latest innovations.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
        @php
            $events = [
                ['date' => '15 Agustus 2025', 'location' => 'Jakarta', 'title' => 'Tech Innovation Summit', 'desc' => 'Discover cutting-edge technologies and trends shaping the future of digital innovation.'],
                ['date' => '20 Agustus 2025', 'location' => 'Bandung', 'title' => 'Digital Marketing Conference', 'desc' => 'Learn marketing strategies from industry leaders and explore the future of online branding.'],
                ['date' => '25 Agustus 2025', 'location' => 'Surabaya', 'title' => 'Startup & Founder Meetup', 'desc' => 'Connect with startup founders, share your journey, and explore investment opportunities.'],
                ['date' => '1 September 2025', 'location' => 'Yogyakarta', 'title' => 'AI & Data Science Forum', 'desc' => 'Delve into machine learning, big data, and real-world AI implementations.'],
                ['date' => '5 September 2025', 'location' => 'Jakarta', 'title' => 'UX/UI Design Workshop', 'desc' => 'Hands-on workshop to sharpen your design skills and understand user-centered principles.'],
                ['date' => '10 September 2025', 'location' => 'Bali', 'title' => 'Remote Work Revolution', 'desc' => 'Explore remote work tools, productivity hacks, and digital nomad strategies.'],
                ['date' => '15 September 2025', 'location' => 'Medan', 'title' => 'Cloud Computing Expo', 'desc' => 'Experience demos, talks, and the latest in cloud platforms and DevOps.'],
                ['date' => '20 September 2025', 'location' => 'Makassar', 'title' => 'Cybersecurity Summit', 'desc' => 'Protect your organization by learning from cybersecurity experts and case studies.'],
                ['date' => '25 September 2025', 'location' => 'Semarang', 'title' => 'Entrepreneurship Bootcamp', 'desc' => 'Level up your business with actionable strategies and mentorship sessions.'],
            ];
        @endphp

        @foreach ($events as $index => $event)
            <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                class="bg-[#FFB71A] rounded-2xl shadow-md p-6 flex flex-col justify-between transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                
                <div class="mb-4">
                    <p class="text-xs text-gray-800 font-semibold mb-1">
                        {{ $event['date'] }} &nbsp; | &nbsp; {{ $event['location'] }}
                    </p>
                    <h3 class="text-lg md:text-xl font-bold text-black mb-2 leading-snug">
                        {{ $event['title'] }}
                    </h3>
                    <p class="text-sm text-gray-900 leading-relaxed">
                        {{ $event['desc'] }}
                    </p>
                </div>

                <button
                    class="w-full mt-4 text-sm font-semibold text-black bg-white border border-black rounded-xl py-2 px-4 hover:bg-[#f8cd61] transition duration-200">
                    Detail
                </button>
            </div>
        @endforeach
    </div>
</section>

<!-- Tambahkan di bawah <body> di layout utama untuk aktifkan animasi -->
@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 800 });
    </script>
@endpush

@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
@endpush
