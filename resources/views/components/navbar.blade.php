<nav class="fixed top-0 left-0 w-full z-50 bg-transparent text-white">
  <div class="flex items-center justify-between px-6 lg:px-20 py-4">
    <!-- Logo -->
    <a href="#" class="flex items-center space-x-3">
      <img src="{{ asset('Images/Logo.png') }}" alt="Logo Neosia" class="h-10 w-auto">
    </a>

    <!-- Desktop Search -->
    <div class="hidden md:flex items-center gap-6">
      <div class="relative w-56">
        <input type="text" placeholder="Search For Course"
          class="w-full pl-10 pr-4 py-2 rounded-full bg-white border border-gray-300 text-black text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        <i class="bi bi-search absolute left-3 top-2.5 text-black"></i>
      </div>
    </div>

    <!-- Hamburger (Mobile) -->
    <button id="menuToggle" aria-label="Toggle menu" class="md:hidden text-2xl">
      <i class="bi bi-list"></i>
    </button>
  </div>

  <!-- Desktop Navigation -->
  <div class="hidden md:flex justify-between items-center px-6 lg:px-20 py-3 border-t border-white/20">
    <ul class="flex gap-6 text-sm font-medium">
      <!-- Static Item -->
      <li><a href="#" class="hover:text-yellow-400">About</a></li>

      <!-- Dropdown Menus -->
      @foreach ([
        'Courses' => ['Course A' => '#', 'Course B' => '#'],
        'Layanan' => [
          'Service' => url('/service#hero'),],
        'Product' => ['Produk A' => '#', 'Produk B' => '#'],
        'Blog' => ['Artikel Terbaru' => '#', 'Tips & Trik' => '#'],
      ] as $menu => $submenus)
        <li class="relative group">
          <a href="#" class="flex items-center hover:text-yellow-400">
            {{ $menu }} <i class="bi bi-chevron-down text-xs ml-1"></i>
          </a>
          <div class="absolute left-0 mt-2 w-44 bg-white text-black rounded shadow z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
            @foreach ($submenus as $label => $link)
              <a href="{{ $link }}" class="block px-4 py-2 hover:bg-gray-100">{{ $label }}</a>
            @endforeach
          </div>
        </li>
      @endforeach

      <!-- Moved Items -->
      <li><a href="#" class="hover:text-yellow-400">Check Certificate</a></li>
      <li><a href="{{ url('/contact') }}" class="hover:text-yellow-400">Contact</a></li>
    </ul>

    <!-- Actions -->
    <div class="flex items-center gap-3">
      <span class="text-sm font-semibold">Try For Free</span>
      <span class="text-white text-lg">→</span>
      <button class="p-2 bg-indigo-600 hover:bg-indigo-700 rounded-full">
        <i class="bi bi-cart text-white"></i>
      </button>
      <button class="p-2 bg-blue-700 hover:bg-blue-800 rounded-full">
        <i class="bi bi-person text-white"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden px-6 py-4 bg-[#1f2937] space-y-4">
    <ul class="space-y-3 text-sm">
      <!-- Static Item -->
      <li><a href="#" class="block hover:text-yellow-400">About</a></li>

      <!-- Dropdown Menus Mobile -->
      @foreach ([
        'Courses' => ['Course A' => '#', 'Course B' => '#'],
        'Layanan' => [
          'Konsultasi' => url('/service#konsultasi'),
          'Pelatihan' => url('/service#pelatihan'),
        ],
        'Product' => ['Produk A' => '#', 'Produk B' => '#'],
        'Blog' => ['Artikel Terbaru' => '#', 'Tips & Trik' => '#'],
      ] as $menu => $submenus)
        <li>
          <span class="font-medium block">{{ $menu }}</span>
          <ul class="ml-4 space-y-1 text-sm text-yellow-300">
            @foreach ($submenus as $label => $link)
              <li><a href="{{ $link }}" class="block hover:text-yellow-200">{{ $label }}</a></li>
            @endforeach
          </ul>
        </li>
      @endforeach

      <!-- Moved Items -->
      <li><a href="#" class="block hover:text-yellow-400">Check Certificate</a></li>
      <li><a href="{{ url('/contact') }}" class="hover:text-yellow-400">Contact</a></li>
    </ul>

    <!-- Mobile Action Buttons -->
    <div class="flex space-x-4 pt-4 border-t border-white/20">
      <button class="p-2 bg-indigo-600 hover:bg-indigo-700 rounded-full">
        <i class="bi bi-cart text-white"></i>
      </button>
      <button class="p-2 bg-blue-700 hover:bg-blue-800 rounded-full">
        <i class="bi bi-person text-white"></i>
      </button>
    </div>
  </div>
</nav>

<!-- Toggle Script -->
<script>
  document.getElementById('menuToggle').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
</script>
