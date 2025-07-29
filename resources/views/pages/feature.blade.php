<!-- resources/views/pages/feature.blade.php -->
<div class="bg-[#12474D] text-white">
  <!-- Gambar Besar -->
  <div class="max-w-6xl mx-auto px-6 pt-10">
    <div class="h-[500px] w-full rounded-xl overflow-hidden bg-cover bg-center"
         style="background-image: url('{{ asset('Images/Feature.png') }}');">
    </div>
  </div>

  <!-- Konten 3 Kolom -->
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-6 pb-10 pt-10">
    
    <!-- Bagian 1 -->
    <div class="p-0">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 text-[#FFB71A]">
        Why Should Training in Neosia?
      </h2>
      <p class="mb-4">
        Neosia offers certified training programs designed by industry experts to help you gain practical skills, build strong portfolios, and grow your career in tech and engineering.
      </p>
      <a href="#" class="inline-block text-yellow-400 border border-yellow-400 px-4 py-2 rounded hover:bg-yellow-400 hover:text-[#12474D] transition">
        View All Courses
      </a>
    </div>

    <!-- Bagian 2 -->
    <div class="p-0 flex flex-col items-start text-left">
      <!-- Icon Atas -->
      <div class="mb-4 w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5]">
        <i class="fa-regular fa-pen-to-square"></i>
      </div>

      <!-- Judul & Deskripsi -->
      <h3 class="text-xl font-semibold mb-2 text-[#FFB71A]">1500+ Courses</h3>
      <p class="text-white mb-4">
        Comprehensive courses across tech, design, and industry tools.
      </p>

      <!-- Icon Bawah -->
      <div class="mt-4 w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5]">
        <i class="fas fa-copy"></i>
      </div>

      <!-- Judul & Deskripsi Icon Bawah -->
      <h4 class="text-lg font-semibold mt-2 text-[#FFB71A]">10+ Lessons</h4>
      <p class="text-white">
        Structured lessons in each course to guide you from fundamentals to advanced skills.
      </p>
    </div>

    <!-- Bagian 3 -->
    <div class="p-0 flex flex-col items-start text-left">
      <!-- Icon Atas -->
      <div class="mb-4 w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5]">
        <i class="fa-solid fa-display"></i>
      </div>

      <!-- Judul & Deskripsi -->
      <h3 class="text-xl font-semibold mb-2 text-[#FFB71A]">200+ Free videos</h3>
      <p class="text-white mb-4">
       Watch and learn on-demand, at zero cost.
      </p>

      <!-- Icon Bawah -->
      <div class="mt-4 w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5]">
        <i class="fas fa-chalkboard-teacher"></i>

      </div>

      <!-- Judul & Deskripsi Icon Bawah -->
      <h4 class="text-lg font-semibold mt-2 text-[#FFB71A]">Quality teachers</h4>
      <p class="text-white">
        Learn directly from certified instructors with real-world experience in their fields.
      </p>
    </div>
    
  </div>
</div>
