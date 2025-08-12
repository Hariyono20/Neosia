<section id="Pelatihan" class="bg-black py-20 px-4 sm:px-6 lg:px-20 text-white">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <!-- KIRI -->
        <div class="space-y-8 text-left">
            <!-- Judul -->
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#FFB71A] leading-tight tracking-tight">
                Certainly a Superpower in Simulation.
            </h2>

            <!-- Paragraf -->
            <p class="text-base sm:text-lg md:text-xl text-white/90 leading-relaxed">
                ANSYS gives engineers the ability to see the future. Predict how a product will work — or won’t — before
                building it.
            </p>

            <!-- Gambar Bertumpuk (Mobile & Desktop) -->
            <div class="grid grid-cols-2 gap-4 sm:gap-6 order-2 lg:order-none">
                <img src="{{ asset('Images/service/P1.png') }}" alt="Image 1"
                    class="w-full aspect-[3/4] object-cover rounded-2xl shadow-2xl translate-y-4 transition duration-300 ease-in-out hover:scale-[1.02]">
                <img src="{{ asset('Images/service/P2.png') }}" alt="Image 2"
                    class="w-full aspect-[3/4] object-cover rounded-2xl shadow-2xl -translate-y-4 transition duration-300 ease-in-out hover:scale-[1.02]">
            </div>
            <!-- Garis -->
            <div class="h-px bg-white/40 w-full"></div>

            <!-- Logo Adaptif -->
            <div class="grid grid-cols-3 items-center gap-y-6">
                <div class="flex justify-start">
                    <img src="{{ asset('Images/service/Nasa.png') }}" alt="Logo NASA"
                        class="max-w-[4rem] sm:max-w-[4.5rem] object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('Images/service/BOSCH.png') }}" alt="Logo BOSCH"
                        class="max-w-[6rem] sm:max-w-[8rem] object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-end">
                    <img src="{{ asset('Images/service/GE.png') }}" alt="Logo GE"
                        class="max-w-[6rem] sm:max-w-[7.5rem] object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
            </div>
        </div>

        <!-- KANAN: Gambar Bertumpuk (DESKTOP SAJA) -->
        <div class="hidden lg:flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center sm:items-start">
            <img src="{{ asset('Images/service/P1.png') }}" alt="Image 1"
                class="w-full sm:w-[48%] aspect-[3/4] object-cover rounded-2xl shadow-2xl translate-y-4 transition duration-300 ease-in-out hover:scale-[1.02]">

            <img src="{{ asset('Images/service/P2.png') }}" alt="Image 2"
                class="w-full sm:w-[48%] aspect-[3/4] object-cover rounded-2xl shadow-2xl -translate-y-4 transition duration-300 ease-in-out hover:scale-[1.02]">
        </div>
    </div>
</section>
