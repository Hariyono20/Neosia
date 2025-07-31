@php
    $products = [
        [
            'image' => 'Produk1.png',
            'name' => 'SolidWorks: Aerospace Basics',
            'description' => 'Master the fundamentals of aerospace simulation, modeling, and structural design using industry-standard workflows.',
            'price' => 150000,
            'week' => 1,
            'rating' => 4.6
        ],
        [
            'image' => 'Produk2.png',
            'name' => 'SolidWorks: Automotive Systems',
            'description' => 'Learn advanced techniques for designing and simulating automotive systems with real-world case applications.',
            'price' => 200000,
            'week' => 2,
            'rating' => 4.8
        ],
        [
            'image' => 'Produk3.png',
            'name' => 'SolidWorks: Structural Simulation',
            'description' => 'Gain hands-on experience in structural analysis and engineering simulation to solve complex real-life problems.',
            'price' => 300000,
            'week' => 3,
            'rating' => 4.9
        ],
    ];
@endphp

<!-- Tambahkan ini di layout Anda (sekali saja) -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => AOS.init({ once: true }));
</script>

<!-- Section Produk -->
<div class="bg-[#FFB71A] text-black py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-12" data-aos="fade-up">
            <div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-2">Find the Right Program for Your Career</h2>
                <p class="text-gray-800 max-w-2xl">
                    Choose from our range of expert-designed SolidWorks certification programs tailored to aerospace, automotive, and structural engineering specializations.
                </p>
            </div>
            <a href="#"
               class="inline-block border border-black text-black px-5 py-2 rounded hover:bg-black hover:text-white transition">
                See More Courses
            </a>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="100">
            @foreach ($products as $product)
                <div class="bg-[#12474D] rounded-3xl shadow-lg p-6 flex flex-col justify-between text-white min-h-[500px] transition-transform hover:scale-[1.02] duration-300">

                    <!-- Gambar -->
                    <img src="{{ asset('Images/' . $product['image']) }}" alt="{{ $product['name'] }}"
                         class="w-full h-64 object-cover rounded-xl mb-4">

                    <!-- Informasi Produk -->
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-[#FFB71A] mb-2">{{ $product['name'] }}</h3>
                        <p class="text-gray-300 mb-4 text-sm leading-relaxed">{{ $product['description'] }}</p>

                        <!-- Info Detail -->
                        <div class="grid grid-cols-3 gap-2 text-center text-sm text-gray-200 border-t border-gray-600 pt-4">
                            <div>
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-solid fa-dollar-sign"></i> <span>Price</span>
                                </div>
                                <div class="text-[#FFB71A] font-semibold mt-1">Rp {{ number_format($product['price'], 0, ',', '.') }}</div>
                            </div>
                            <div>
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-regular fa-calendar"></i> <span>Week</span>
                                </div>
                                <div class="text-[#FFB71A] font-semibold mt-1">{{ $product['week'] }}</div>
                            </div>
                            <div>
                                <div class="flex justify-center items-center gap-1">
                                    <i class="fa-regular fa-star"></i> <span>Rating</span>
                                </div>
                                <div class="text-[#FFB71A] font-semibold mt-1">{{ $product['rating'] }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="mt-6 flex flex-wrap justify-center gap-2">
                        <a href="#"
                           class="border border-[#FFB71A] text-[#FFB71A] px-4 py-2 rounded-md text-sm font-medium hover:bg-white hover:text-black transition duration-200">
                            Read More
                        </a>
                        <a href="#"
                           class="bg-white text-[#FFB71A] border border-[#FFB71A] px-4 py-2 rounded-md text-sm font-medium hover:bg-[#FFB71A] hover:text-white transition duration-200">
                            Download Brochure
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
