<section id="konsultasi" class="bg-[#12474D] text-white py-20 px-6 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">

        <!-- KIRI: Konten -->
        <div class="space-y-10">
            <!-- Judul & Deskripsi -->
            <div>
                <h2 class="text-4xl sm:text-5xl font-bold text-[#FFB71A] leading-snug mb-6">
                    ANSYS is a powerful<br class="hidden sm:block">
                    simulation tool for your<br class="hidden sm:block">
                    engineering needs.
                </h2>
                <p class="text-base sm:text-xl leading-relaxed text-justify">
                    Accelerate your design and analysis process with comprehensive tools for structural,
                    fluid, thermal, and electromagnetic simulation.
                </p>
            </div>

             <!-- Gambar GRID (MOBILE SAJA) -->
            <div class="grid grid-cols-2 gap-8 lg:hidden">
                @php
                    $images = ['K1.png', 'K2.png', 'K3.png', 'K4.png'];
                    $translate = ['translate-y-6', '-translate-y-6', 'translate-y-6', '-translate-y-6'];
                @endphp
                @foreach ($images as $index => $img)
                    <div
                        class="aspect-square w-full bg-white rounded-xl overflow-hidden shadow-lg {{ $translate[$index] }}
                               transition duration-500 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('Images/service/' . $img) }}"
                             class="w-full h-full object-cover"
                             alt="Image {{ $index + 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Garis -->
            <div class="w-full h-px bg-white/50"></div>


            <!-- Fitur -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div>
                    <h3 class="text-[#FFB71A] font-semibold text-lg mb-1">300+ Use Case</h3>
                    <p class="text-sm text-white/90">Across industries from automotive to aerospace.</p>
                </div>
                <div>
                    <h3 class="text-[#FFB71A] font-semibold text-lg mb-1">15k Engineers</h3>
                    <p class="text-sm text-white/90">Leveraging ANSYS to solve complex challenges.</p>
                </div>
                <div>
                    <h3 class="text-[#FFB71A] font-semibold text-lg mb-1">89% Accuracy</h3>
                    <p class="text-sm text-white/90">Simulation results align closely with real-world performance.</p>
                </div>
            </div>
        </div>

        <!-- Gambar GRID (DESKTOP SAJA) -->
        <div class="grid grid-cols-2 gap-8 hidden lg:grid">
            @foreach ($images as $index => $img)
                <div
                    class="aspect-square w-full bg-white rounded-xl overflow-hidden shadow-lg {{ $translate[$index] }}
                           transition duration-500 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                    <img src="{{ asset('Images/service/' . $img) }}"
                         class="w-full h-full object-cover"
                         alt="Image {{ $index + 1 }}">
                </div>
            @endforeach
        </div>

    </div>
</section>
