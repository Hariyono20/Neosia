<div class="bg-black text-white py-12 px-4 sm:px-6">
  <div class="max-w-6xl mx-auto text-center">
    <!-- Judul -->
    <h2 class="text-2xl md:text-3xl font-semibold mb-6 text-[#FFB71A] leading-snug">
      These Are Some of the Amazing Products<br>
      We’ve Proudly Helped Bring to Life
    </h2>

    <!-- Grid Logo Mitra -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 mt-10">
      @for ($i = 1; $i <= 6; $i++)
        <div
          class="bg-white p-4 rounded-2xl shadow-md flex items-center justify-center w-full h-20 
                 transition transform hover:scale-105 hover:shadow-lg duration-300">
          <img src="{{ asset("Images/Mitra/Mitra$i.png") }}" alt="Mitra {{ $i }}"
            class="max-h-12 w-auto object-contain">
        </div>
      @endfor
    </div>
  </div>
</div>
