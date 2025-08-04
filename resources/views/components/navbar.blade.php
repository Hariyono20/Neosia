<nav id="mainNavbar" class="fixed top-0 left-0 w-full z-50 transition-colors duration-300 bg-transparent text-white">
    <div class="flex items-center justify-between px-6 lg:px-20 py-4">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <img src="{{ asset('Images/Logo.png') }}" alt="Logo Neosia" class="h-10 w-auto">
        </a>

        <!-- Search (Desktop Only) -->
        <div class="hidden md:flex items-center gap-6">
            <div class="relative w-56">
                <input type="text" placeholder="Search For Course"
                    class="w-full pl-10 pr-4 py-2 rounded-full bg-white border border-gray-300 text-black text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <i class="bi bi-search absolute left-3 top-2.5 text-black"></i>
            </div>
        </div>

        <!-- Mobile Toggle Button -->
        <button id="menuToggle" aria-label="Toggle menu" class="md:hidden text-2xl">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex justify-between items-center px-6 lg:px-20 py-3 border-t border-white/20">
        <ul class="flex flex-wrap gap-6 text-sm font-medium">
            <li><a href="#feature" class="hover:text-[#FFB71A]">About</a></li>

            @foreach ([
                'Courses' => [
                    'Daftar Course' => url('/daftar-course'),
                    'Detail Course' => url('/detail-course'),
                ],
                'Layanan' => [
                    'Service' => url('/service#hero'),
                ],
                'Product' => [
                    'Produk A' => '#',
                    'Produk B' => '#',
                ],
                'Blog' => [
                    'Artikel Terbaru' => '#',
                    'Tips & Trik' => '#',
                ],
            ] as $menu => $submenus)
                <li class="relative group">
                    <button class="flex items-center hover:text-yellow-400 focus:outline-none">
                        {{ $menu }} <i class="bi bi-chevron-down text-xs ml-1"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-44 bg-[#12474D] text-white rounded shadow z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        @foreach ($submenus as $label => $link)
                            <a href="{{ $link }}" class="block px-4 py-2 hover:bg-[#0f363b] transition">{{ $label }}</a>
                        @endforeach
                    </div>
                </li>
            @endforeach

            <li><a href="#" class="hover:text-yellow-400">Check Certificate</a></li>
            <li><a href="#contact" class="hover:text-[#FFB71A]">Contact</a></li>
        </ul>

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
    <div id="mobileMenu" class="md:hidden hidden px-6 py-4 bg-[#1f2937] space-y-4 transition-all duration-300">
        <ul class="space-y-3 text-sm">
            <li><a href="#feature" class="hover:text-[#FFB71A]">About</a></li>

            @foreach ([
                'Courses' => [
                    'Daftar Course' => url('/daftar-course'),
                    'Detail Course' => url('/detail-course'),
                ],
                'Layanan' => [
                    'Service' => url('/service#hero'),
                ],
                'Product' => [
                    'Produk A' => '#',
                    'Produk B' => '#',
                ],
                'Blog' => [
                    'Artikel Terbaru' => '#',
                    'Tips & Trik' => '#',
                ],
            ] as $menu => $submenus)
                <li>
                    <span class="font-medium block text-white">{{ $menu }}</span>
                    <ul class="ml-4 space-y-1 text-sm text-yellow-300">
                        @foreach ($submenus as $label => $link)
                            <li><a href="{{ $link }}" class="block hover:text-yellow-200">{{ $label }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach

            <li><a href="#" class="block hover:text-yellow-400">Check Certificate</a></li>
            <li><a href="#contact" class="hover:text-[#FFB71A]">Contact</a></li>
        </ul>

        <div class="flex space-x-4 pt-4 border-t border-white/20">
            <button class="p-2 bg-indigo-600 hover:bg-indigo-700 rounded-full">
                <i class="bi bi-cart text-white"></i>
            </button>
            <button class="p-2 bg-blue-700 hover:bg-blue-800 rounded-full">
                <i class="bi bi-person text-white"></i>
            </button>
        </div>
    </div>

    <!-- Scroll Behavior -->
    <style>
        .navbar-scrolled {
            background-color: #12474D !important;
        }
    </style>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const navbar = document.getElementById('mainNavbar');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        window.addEventListener('scroll', () => {
            navbar.classList.toggle('navbar-scrolled', window.scrollY > 50);
        });
    </script>
</nav>
