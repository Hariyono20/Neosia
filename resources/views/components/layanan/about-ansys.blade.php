<section id="about-ansys" class="bg-[#FFB71A] py-20 px-4 sm:px-6 lg:px-20 text-black">
  <div class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

    <!-- KIRI: Gambar berlapis -->
    <div class="relative flex justify-center items-center overflow-hidden">
      <!-- Gambar belakang -->
      <img src="{{ asset('Images/service/A1.png') }}" alt="ANSYS Background"
        class="w-60 sm:w-72 lg:w-96 aspect-[4/3] object-cover rounded-xl shadow-md transform -translate-x-20 -translate-y-6 transition-transform duration-500" />

      <!-- Gambar depan -->
      <img src="{{ asset('Images/service/A2.png') }}" alt="ANSYS Foreground"
        class="absolute w-60 sm:w-72 lg:w-96 aspect-[4/3] object-cover rounded-xl shadow-xl transform translate-x-20 translate-y-10 hover:scale-105 transition-transform duration-500" />
    </div>

    <!-- KANAN: Konten -->
    <div>
      <h2 class="text-2xl sm:text-3xl lg:text-5xl font-bold text-[#12474D] mb-6">
        About ANSYS Capabilities
      </h2>
      <p class="text-sm sm:text-base lg:text-xl leading-relaxed text-gray-800 mb-6">
        ANSYS delivers a comprehensive suite of engineering simulation tools, enabling predictive insights across structural, fluid, thermal, and electromagnetic domains — helping engineers solve real-world challenges.
      </p>

      <!-- Garis -->
      <div class="h-px bg-black/60 mb-6"></div>

      <!-- Tiga poin fitur -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div>
          <h3 class="text-base sm:text-lg font-semibold mb-2">Scalable Solutions</h3>
          <p class="text-sm text-gray-700 leading-relaxed">
            ANSYS tools adapt from small components to complex systems with high efficiency.
          </p>
        </div>
        <div>
          <h3 class="text-base sm:text-lg font-semibold mb-2">Cross-Disciplinary</h3>
          <p class="text-sm text-gray-700 leading-relaxed">
            Integrates simulation across physics, enabling holistic product development.
          </p>
        </div>
        <div>
          <h3 class="text-base sm:text-lg font-semibold mb-2">Accelerated Innovation</h3>
          <p class="text-sm text-gray-700 leading-relaxed">
            Reduce development cycles and enhance product quality through virtual testing.
          </p>
        </div>
      </div>
    </div>
    
  </div>
</section>
