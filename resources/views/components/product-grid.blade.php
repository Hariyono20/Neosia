<!-- resources/views/components/course-grid.blade.php -->

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
            'name' => 'SolidWorks: Automotive Design',
            'description' => 'Design and simulate automotive systems with professional tools and methods.',
            'price' => 200000,
            'week' => 2,
            'rating' => 4.8
        ],
        [
            'image' => 'Produk3.png',
            'name' => 'SolidWorks: Structural Engineering',
            'description' => 'Get certified in structural simulation and stress analysis with real-world projects.',
            'price' => 180000,
            'week' => 1,
            'rating' => 4.7
        ],
    ];
@endphp

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="100">
    @foreach ($products as $product)
        <div class="bg-[#12474D] rounded-3xl shadow-lg p-6 flex flex-col justify-between text-white min-h-[500px] transition-transform hover:scale-[1.02] duration-300">
            <img src="{{ asset('Images/' . $product['image']) }}" alt="{{ $product['name'] }}"
                 class="w-full h-64 object-cover rounded-xl mb-4">

            <div class="flex-1">
                <h3 class="text-xl font-bold text-[#FFB71A] mb-2">{{ $product['name'] }}</h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">{{ $product['description'] }}</p>

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
