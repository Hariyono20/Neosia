<!-- resources/views/pages/feature.blade.php -->
<div id="feature" class="bg-[#12474D] text-white">

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <div class="h-[500px] w-full rounded-xl overflow-hidden bg-cover bg-center"
         style="background-image: url('{{ asset('Images/Feature.png') }}');">
    </div>
  </div>

  <!-- Konten 3 Kolom -->
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Bagian 1 -->
    <div>
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 text-[#FFB71A]">
        Why Should Training in Neosia?
      </h2>
      <p class="mb-6 leading-relaxed">
        Neosia offers certified training programs designed by industry experts to help you gain practical skills, build strong portfolios, and grow your career in tech and engineering.
      </p>
      <a href="#" class="inline-block text-yellow-400 border border-yellow-400 px-5 py-2 rounded hover:bg-yellow-400 hover:text-[#12474D] transition font-medium">
        View All Courses
      </a>
    </div>

    <!-- Bagian 2 -->
    <div class="flex flex-col gap-6">
      <div>
        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5] mb-4 transition-transform duration-300 hover:scale-110 hover:rotate-6">
          <i class="fa-regular fa-pen-to-square text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-[#FFB71A] mb-2">1500+ Courses</h3>
        <p>Comprehensive courses across tech, design, and industry tools.</p>
      </div>

      <div>
        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5] mb-4 transition-transform duration-300 hover:scale-110 hover:-rotate-6">
          <i class="fas fa-copy text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold text-[#FFB71A] mb-2">10+ Lessons</h4>
        <p>Structured lessons in each course to guide you from fundamentals to advanced skills.</p>
      </div>
    </div>

    <!-- Bagian 3 -->
    <div class="flex flex-col gap-6">
      <div>
        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5] mb-4 transition-transform duration-300 hover:scale-110 hover:rotate-6">
          <i class="fa-solid fa-display text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-[#FFB71A] mb-2">200+ Free Videos</h3>
        <p>Watch and learn on-demand, at zero cost.</p>
      </div>

      <div>
        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#4F46E5] mb-4 transition-transform duration-300 hover:scale-110 hover:-rotate-6">
          <i class="fas fa-chalkboard-teacher text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold text-[#FFB71A] mb-2">Quality Teachers</h4>
        <p>Learn directly from certified instructors with real-world experience in their fields.</p>
      </div>
    </div>
    
  </div>
</div>
