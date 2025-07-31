<!-- Tambahkan ini di layout (biasanya di layouts/app.blade.php) -->
<!-- AOS Animation CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({ once: true });
  });
</script>

<!-- Komponen Utama -->
<div class="bg-black text-white py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto text-center">
    <h2 
      class="text-2xl sm:text-3xl md:text-4xl font-bold mb-10 text-[#FFB71A]" 
      data-aos="fade-up"
    >
      Together with Our Amazing Clients, We Build Digital Solutions That Make a Difference
    </h2>

    <!-- Grid Logo Brand -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 justify-items-center" data-aos="zoom-in-up">
      @foreach (['Brand1', 'Brand2', 'Brand3', 'Brand1'] as $brand)
        <div class="w-32 h-16 bg-[#FFB71A] rounded-xl flex items-center justify-center shadow-md hover:scale-105 transition-transform duration-300">
          <img src="{{ asset('Images/brand/' . $brand . '.png') }}" alt="{{ $brand }}" class="h-10 object-contain">
        </div>
      @endforeach
    </div>
  </div>
</div>
