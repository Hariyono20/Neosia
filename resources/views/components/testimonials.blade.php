<!-- resources/views/components/testimonials.blade.php -->
<section class="py-16 px-6 md:px-16 bg-[#FFB71A]">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-10">
        <!-- Heading dan Deskripsi -->
        <div class="max-w-3xl">
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-3">
                See How Neosia Transformed Their Careers
            </h2>
            <p class="text-[#12474D] text-base md:text-lg leading-relaxed">
                Real success stories from real learners. Discover how Neosia’s expert-led training has empowered
                professionals to elevate their skills, boost their careers, and make an impact in their industries.
                Don’t just take our word for it—see the transformations for yourself.
            </p>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex gap-3">
            <button class="w-10 h-10 bg-black rounded-md flex items-center justify-center hover:bg-[#12474D] transition">
                <i class="fa-solid fa-angle-left text-white"></i>
            </button>
            <button class="w-10 h-10 bg-black rounded-md flex items-center justify-center hover:bg-[#12474D] transition">
                <i class="fa-solid fa-angle-right text-white"></i>
            </button>
        </div>
    </div>

    <!-- Testimonial Cards -->
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        @php
            $testimonials = [
                [
                    'name' => 'John Doe',
                    'role' => 'Mechanical Engineer at ABC Corp',
                    'comment' => 'The SolidWorks Certification Program from Neosia completely transformed my approach to product design. The hands-on learning experience made complex concepts so much easier to understand. Now, I’m confidently leading projects at work with a deeper understanding of 3D modeling and simulation.',
                    'image' => 'https://i.pravatar.cc/60?img=1',
                ],
                [
                    'name' => 'Sarah Lim',
                    'role' => 'Senior CAD Designer at Facebook',
                    'comment' => 'Neosia’s training gave me the skills I needed to transition into a higher role. The expert instructors and real-world applications gave me practical knowledge that I could apply immediately to my work. I highly recommend Neosia to anyone looking to level up their CAD and CAM skills.',
                    'image' => 'https://i.pravatar.cc/60?img=2',
                ],
                [
                    'name' => 'Michael Tan',
                    'role' => 'Automation Engineer at TechPro Solutions',
                    'comment' => 'I’ve taken several CAD courses, but Neosia’s program was by far the best. The mix of theory and practical work helped me grasp complex engineering concepts quickly. After completing the course, I felt prepared to tackle automation systems and drive innovation within my team.',
                    'image' => 'https://i.pravatar.cc/60?img=3',
                ],
            ];
        @endphp

        @foreach ($testimonials as $testimonial)
            <div class="bg-[#12474D] text-white p-6 rounded-2xl shadow-md relative flex flex-col gap-4">
                <div class="absolute top-4 right-4 text-4xl font-bold text-white">”</div>
                <!-- Profile -->
                <div class="flex items-center gap-4">
                    <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                        class="w-12 h-12 rounded-md object-cover">
                    <div>
                        <p class="font-bold">{{ $testimonial['name'] }}</p>
                        <p class="text-sm text-gray-300">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
                <!-- Comment -->
                <p class="text-sm text-gray-200 leading-relaxed">“{{ $testimonial['comment'] }}”</p>
            </div>
        @endforeach
    </div>

    <!-- Footer Navigasi -->
    <div class="flex justify-between items-center mt-10 flex-wrap gap-4">
        <!-- Titik Navigasi -->
        <div class="flex gap-2">
            <span class="w-6 h-2.5 bg-[#12474D] rounded-full"></span>
            <span class="w-2.5 h-2.5 bg-white/50 rounded-full"></span>
            <span class="w-2.5 h-2.5 bg-white/50 rounded-full"></span>
        </div>

        <!-- Link Lihat Semua -->
        <a href="#" class="flex items-center gap-1 text-[#12474D] font-semibold text-sm hover:underline">
            Show me more
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</section>
