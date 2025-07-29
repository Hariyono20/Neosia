<nav class="absolute top-0 left-0 w-full z-50 text-white bg-transparent">
  <div class="px-6 md:px-10 lg:px-20 py-4 flex items-center justify-between">
    <!-- Logo -->
    <div class="flex items-center space-x-4">
      <img src="{{ asset('Images/Logo.png') }}" alt="Logo Neosia" class="h-10 w-auto">
    </div>

    <!-- Hamburger Toggle (Mobile) -->
    <div class="md:hidden">
      <button id="menuToggle" class="text-white focus:outline-none">
        <i class="bi bi-list text-2xl"></i>
      </button>
    </div>

    <!-- Menu Desktop -->
    <div class="hidden md:flex items-center space-x-6 flex-grow justify-end">
      <!-- Category Dropdown -->
      <div class="relative group">
        <button class="flex items-center space-x-2 p-2 rounded hover:bg-gray-800">
          <i class="bi bi-grid-3x3-gap"></i>
          <span class="text-white text-sm">Category</span>
          <i class="bi bi-chevron-down text-white text-sm"></i>
        </button>
        <div class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-md w-40 z-50">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori 1</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori 2</a>
        </div>
      </div>

      <!-- Search -->
      <div class="relative w-60">
        <input type="text" placeholder="Search For Course"
          class="pl-10 pr-4 py-2 w-full rounded-full bg-white border border-gray-300 text-black placeholder-gray-500 focus:outline-none focus:ring focus:border-yellow-400">
        <i class="bi bi-search absolute left-3 top-2.5 text-black"></i>
      </div>
    </div>
  </div>

  <!-- Menu Baris Kedua (Desktop) -->
  <div class="hidden md:flex items-center justify-between px-6 md:px-10 lg:px-20 py-4 border-t border-white/20">
    <ul class="flex flex-wrap space-x-6 text-sm font-medium">
      <li><a href="#" class="hover:text-yellow-400">Home</a></li>
      <li><a href="#" class="hover:text-yellow-400">About</a></li>

      <!-- Dropdown Menu Example -->
      <li class="relative group">
        <a href="#" class="flex items-center hover:text-yellow-400">
          Courses <i class="bi bi-chevron-down text-xs ml-1"></i>
        </a>
        <div class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-md w-40 z-50">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Course A</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Course B</a>
        </div>
      </li>

      <!-- Ulangi sesuai kebutuhan... -->
      <li><a href="#" class="hover:text-yellow-400">Check Certificates</a></li>
      <li><a href="#" class="hover:text-yellow-400">Contact</a></li>
    </ul>

    <!-- Action Buttons -->
    <div class="flex items-center space-x-2 mt-4 md:mt-0">
      <span class="text-sm font-semibold text-white">Try For Free</span>
      <span class="text-white text-lg">→</span>

      <button class="p-2 rounded-full bg-[#4f46e5] hover:bg-[#4338ca] transition">
        <i class="bi bi-cart text-white text-xl"></i>
      </button>
      <button class="p-2 rounded-full bg-[#0956c5] hover:bg-[#0747a6] transition">
        <i class="bi bi-person text-white text-xl"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu (hidden by default) -->
  <div id="mobileMenu" class="md:hidden hidden flex-col px-6 py-4 space-y-3 bg-[#1f2937] text-white">
    <a href="#" class="block hover:text-yellow-400">Home</a>
    <a href="#" class="block hover:text-yellow-400">About</a>
    <a href="#" class="block hover:text-yellow-400">Courses</a>
    <a href="#" class="block hover:text-yellow-400">Produk</a>
    <a href="#" class="block hover:text-yellow-400">Blog</a>
    <a href="#" class="block hover:text-yellow-400">Check Certificates</a>
    <a href="#" class="block hover:text-yellow-400">Contact</a>

    <div class="flex space-x-4 pt-4 border-t border-white/20">
      <button class="p-2 rounded-full bg-[#4f46e5] hover:bg-[#4338ca] transition">
        <i class="bi bi-cart text-white text-xl"></i>
      </button>
      <button class="p-2 rounded-full bg-[#0956c5] hover:bg-[#0747a6] transition">
        <i class="bi bi-person text-white text-xl"></i>
      </button>
    </div>
  </div>
</nav>

<script>
  const toggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  toggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
