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

<div class="bg-[#FFB71A] text-black py-16 px-6">
    <div class="max-w-6xl mx-auto">

        {{-- Header --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Produk Unggulan Kami</h2>
                <p class="text-gray-800">Temukan berbagai produk terbaik yang telah kami bantu kembangkan dengan bangga.</p>
            </div>
            <a href="#" class="mt-4 md:mt-0 inline-block border border-black text-black px-5 py-2 rounded hover:bg-black hover:text-white transition">
                See More Courses
            </a>
        </div>

        {{-- Produk Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @foreach ($products as $product)
                <div class="bg-[#12474D] rounded-[24px] shadow-lg p-6 flex flex-col justify-between text-white min-h-[500px]">

                    {{-- Gambar diperbesar dan seragam --}}
                    <img src="{{ asset('Images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-72 object-cover rounded-xl mb-4">

                    <div class="text-start">
                        {{-- Judul warna kuning --}}
                        <h3 class="text-xl font-bold mb-2 text-[#FFB71A]">{{ $product['name'] }}</h3>

                        <p class="text-gray-300 mb-4">{{ $product['description'] }}</p>

                        {{-- Info Produk --}}
                        <div class="flex justify-around mt-4 text-sm divide-x divide-gray-300">
                            {{-- Price --}}
                            {{-- Price --}}
                            <div class="flex-1 px-2 flex flex-col items-center text-center">
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                    <span class="font-light text-gray-200">Price</span> {{-- Font tipis --}}
                                </div>
                                <span class="mt-1 font-semibold text-[#FFB71A]">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                            </div>

                            {{-- Week --}}
                            <div class="flex-1 px-2 flex flex-col items-center text-center">
                                <div class="flex items-center gap-1">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span class="font-light text-gray-200">Week</span> {{-- Font tipis --}}
                                </div>
                                <span class="mt-1 font-semibold text-[#FFB71A]">{{ $product['week'] }}</span>
                            </div>

                            {{-- Rating --}}
                            <div class="flex-1 px-2 flex flex-col items-center text-center">
                                <div class="flex items-center gap-1">
                                    <i class="fa-regular fa-star"></i>
                                    <span class="font-light text-gray-200">Rating</span> {{-- Font tipis --}}
                                </div>
                                <span class="mt-1 font-semibold text-[#FFB71A]">{{ $product['rating'] }}</span>
                            </div>



                        </div>

                    </div>

                   {{-- Tombol --}}
                    <div class="mt-6 flex justify-center gap-2">
                        {{-- Tombol Read More dengan teks kuning tua --}}
                        <a href="#"
                        class="border border-[#FFB71A] text-[#FFB71A] px-3 py-1.5 rounded-md text-sm font-medium hover:bg-white hover:text-black transition duration-200">
                            Read More
                        </a>

                        {{-- Tombol Download Brochure dengan latar putih dan teks kuning tua --}}
                        <a href="#"
                        class="bg-white text-[#FFB71A] border border-[#FFB71A] px-6 py-1.5 rounded-md text-sm font-medium hover:bg-[#FFB71A] hover:text-white transition duration-200">
                            Download Brochure
                        </a>
                    </div>


                </div>
            @endforeach
        </div>

    </div>
</div>
