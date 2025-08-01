
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

        {{-- Grid Produk --}}
        @include('components.product-grid')


    </div>
</div>

