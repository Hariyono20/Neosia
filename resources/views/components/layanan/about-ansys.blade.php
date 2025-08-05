<section id="about-ansys" class="bg-[#FFB71A] py-20 px-4 sm:px-6 lg:px-20 text-black">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

        <!-- KIRI: Gambar responsif -->
        <div class="relative">
            <!-- Mobile: gambar bertumpuk biasa -->
            <div class="flex flex-col space-y-6 lg:hidden">
                <img src="{{ asset('Images/service/A1.png') }}" alt="ANSYS Background"
                     class="w-full max-w-md mx-auto aspect-[4/3] object-cover rounded-2xl shadow-lg
                            transition duration-500 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 will-change-transform"
                     data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" />

                <img src="{{ asset('Images/service/A2.png') }}" alt="ANSYS Foreground"
                     class="w-full max-w-md mx-auto aspect-[6/4] object-cover rounded-2xl shadow-2xl
                            transition duration-500 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 will-change-transform"
                     data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" />
            </div>

            <!-- Desktop: gambar ditumpuk pakai absolute -->
            <div class="hidden lg:block relative w-full h-[30rem]">
                <img src="{{ asset('Images/service/A1.png') }}" alt="ANSYS Background"
                     class="absolute top-0 left-0 w-[24rem] aspect-[4/3] object-cover rounded-2xl shadow-lg
                            transition duration-500 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 will-change-transform"
                     data-aos="fade-right" data-aos-delay="100" data-aos-duration="800" />

                <img src="{{ asset('Images/service/A2.png') }}" alt="ANSYS Foreground"
                     class="absolute top-48 left-40 w-[24rem] aspect-[6/4] object-cover rounded-2xl shadow-2xl
                            transition duration-500 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 will-change-transform"
                     data-aos="fade-left" data-aos-delay="200" data-aos-duration="800" />
            </div>
        </div>

        <!-- KANAN: Konten dan grid fitur -->
        <div class="space-y-8 text-start">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#12474D] leading-tight" data-aos="fade-up">
                About ANSYS Capabilities
            </h2>

            <p class="text-base sm:text-lg lg:text-xl leading-relaxed text-gray-800" data-aos="fade-up" data-aos-delay="100">
                When simulation meets certainty — ANSYS helps you test, iterate, and innovate with confidence before manufacturing begins.
            </p>

            <div class="h-px bg-black/60"></div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-8 gap-y-6">
                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-lg lg:text-xl font-semibold mb-2 text-[#12474D]">Structural Analysis</h3>
                    <p class="text-base text-gray-800 leading-relaxed">
                        Simulate stress, deformation, and fatigue with FEA.
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-delay="150">
                    <h3 class="text-lg lg:text-xl font-semibold mb-2 text-[#12474D]">Computational Fluid Dynamics</h3>
                    <p class="text-base text-gray-800 leading-relaxed">
                        Analyze fluid flow, pressure, and thermal exchange.
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg lg:text-xl font-semibold mb-2 text-[#12474D]">Electromagnetic Simulation</h3>
                    <p class="text-base text-gray-800 leading-relaxed">
                        Design and optimize electrical devices and fields.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
