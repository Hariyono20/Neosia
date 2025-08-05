<!-- CEO Section -->
<section class="bg-black py-20 px-4 sm:px-6 lg:px-16">
    <div class="max-w-7xl mx-auto">

        <!-- Layout 2 kolom -->
        <div class="grid grid-cols-1 xl:grid-cols-[1fr_1.8fr] gap-12 items-start">

            <!-- KIRI: Judul dan Deskripsi -->
            <div class="text-left">
                <h2 class="text-4xl sm:text-5xl font-bold mb-6 text-[#FFB71A] leading-tight">
                    Meet the<br>
                    Experts Behind<br>
                    Neosia
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed max-w-md">
                    Our team of certified trainers brings years of real-world experience to help you learn faster and smarter — whether you're just starting out or leveling up.
                </p>
            </div>

            <!-- KANAN: Grid CEO -->
            <div class="-ml-4 sm:-ml-6"> <!-- Tarik grid lebih ke kiri -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 xl:gap-10">
                    @php
                        $ceos = [
                            [
                                'img' => asset('Images/Ceo/ceo1.png'),
                                'name' => 'Budi Santoso',
                                'role' => 'Mechanical Design Expert',
                                'description' =>
                                    'Expert in CAD modeling and mechanical simulations, Budi has led multiple projects involving automotive components and industrial equipment design.',
                                'linkedin' => 'https://linkedin.com/in/budi',
                            ],
                            [
                                'img' => asset('Images/Ceo/ceo2.png'),
                                'name' => 'Ayu Lestari',
                                'role' => 'Advanced Manufacturing Specialist',
                                'description' =>
                                    'With deep expertise in lean manufacturing and smart factory implementation, Ayu helps companies streamline production using cutting-edge technologies.',
                                'linkedin' => 'https://linkedin.com/in/ayu',
                            ],
                            [
                                'img' => asset('Images/Ceo/ceo3.png'),
                                'name' => 'Rama Dwi',
                                'role' => 'Simulation & Analysis Engineer',
                                'description' =>
                                    'Rama specializes in structural analysis, CFD, and digital prototyping, offering insights to reduce design errors before physical production.',
                                'linkedin' => 'https://linkedin.com/in/rama',
                            ],
                            [
                                'img' => asset('Images/Ceo/ceo4.png'),
                                'name' => 'Sinta Rahma',
                                'role' => 'Product Development Specialist',
                                'description' =>
                                    'Sinta blends user-centered design with agile development to build innovative products from concept to market-ready solutions.',
                                'linkedin' => 'https://linkedin.com/in/sinta',
                            ],
                        ];
                    @endphp

                    @foreach ($ceos as $ceo)
                        <div class="bg-[#12474D] rounded-2xl shadow-xl p-8 text-white flex flex-col items-start text-start h-full hover:scale-[1.02] transition-transform duration-300">
                            <!-- Gambar -->
                            <div class="w-full aspect-[3/2] mb-4">
                                <img src="{{ $ceo['img'] }}" alt="{{ $ceo['name'] }}"
                                    class="w-full h-full object-cover rounded-xl" />
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-4 space-y-2">
                                <h3 class="text-xl font-semibold text-[#FFB71A]">{{ $ceo['role'] }}</h3>
                                <p class="text-gray-200 text-sm leading-relaxed">
                                    {{ $ceo['description'] }}
                                </p>
                            </div>

                            <!-- Footer -->
                            <div class="mt-auto w-full border border-[#FFB71A] rounded-xl p-4 flex items-center justify-between gap-4">
                                <div class="text-start">
                                    <div class="text-sm font-bold text-[#FFB71A]">{{ $ceo['name'] }}</div>
                                    <div class="text-xs text-gray-300">Technical Trainer</div>
                                </div>
                                <a href="{{ $ceo['linkedin'] }}" target="_blank"
                                    class="text-xs font-bold border border-[#FFB71A] text-[#FFB71A] hover:bg-[#FFB71A] hover:text-[#12474D] px-4 py-1 rounded-md transition duration-200 whitespace-nowrap">
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>
