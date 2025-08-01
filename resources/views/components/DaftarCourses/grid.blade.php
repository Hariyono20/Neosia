<section class="py-12 px-6 lg:px-20" style="background-color: #FFB71A;">
  <!-- Kotak Header di Tengah -->
  <div class="max-w-7xl mx-auto">
  <div class="max-w-6xl mx-auto bg-[#12474D] text-[#FFB71A] rounded-xl px-8 py-6 mb-12 flex flex-col sm:flex-row justify-between items-center gap-6">
    <h2 class="text-xl sm:text-2xl font-bold">Category Courses</h2>

    <!-- Custom Dropdown with Icon -->
    <div class="relative w-30">
      <select class="appearance-none w-full bg-[#12474D] text-[#FFB71A] border border-[#FFB71A] rounded px-5 py-2 text-base font-medium focus:outline-none">
        <option selected>Default</option>
        <option>Aerospace</option>
        <option>Automotive</option>
        <option>Structural</option>
      </select>
      <!-- Icon -->
      <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
        <svg class="w-4 h-4 text-[#FFB71A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
  @include('components.product-grid')
</div>
</section>
