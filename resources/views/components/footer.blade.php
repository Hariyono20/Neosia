<footer class="bg-[#111] text-white px-4 sm:px-8 md:px-20 pt-16 pb-8">
  <!-- Konten Utama Footer -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-sm md:text-base">
    <!-- Kantor Utama 1 -->
    <div>
      <h3 class="text-[#FFB71A] font-semibold mb-2">MAIN OFFICE (Sudirman)</h3>
      <p class="font-bold">PT. Neosia Pratama Indonusa</p>
      <p class="text-xs font-light leading-relaxed mt-1">
        Sona Topas Tower, Floor 5A<br>
        Jl. Jendral Sudirman No.26, Kuningan, Karet<br>
        South Jakarta, Indonesia - 12920<br>
        Phone/Fax : (021) 22541825<br>
        <span class="block">www.neosia.com | info@neosia.com</span>
      </p>
    </div>

    <!-- Kantor Utama 2 -->
    <div>
      <h3 class="text-[#FFB71A] font-semibold mb-2">BRANCH OFFICE (Jagakarsa)</h3>
      <p class="font-bold">PT. Neosia Pratama Indonusa</p>
      <p class="text-xs font-light leading-relaxed mt-1">
        Jl. Raya Jagakarsa, Lenteng Agung<br>
        Kecamatan Jagakarsa, South Jakarta - 12630<br>
        Ruko Ubin Mansion
      </p>
    </div>

    <!-- Form & Sosial Media -->
    <div>
      <h3 class="text-[#FFB71A] font-semibold mb-2">STAY WITH US</h3>
      <p class="mb-3 text-gray-300">Subscribe to get the latest updates</p>

      <!-- Form Email -->
      <form class="flex flex-col sm:flex-row items-center gap-2 mb-4">
        <input type="email" placeholder="Enter your email"
          class="w-full sm:w-auto flex-1 p-2 rounded-md text-black text-sm focus:outline-none focus:ring-2 focus:ring-[#FFB71A]" />
        <button type="submit"
          class="bg-[#FFB71A] text-black font-semibold text-sm px-4 py-2 rounded-md hover:bg-[#e0a213] transition">
          SIGN UP
        </button>
      </form>

      <!-- Ikon Sosial Media -->
      <div class="flex gap-4 text-[#FFB71A] text-lg">
        <a href="#" aria-label="Instagram" class="hover:text-white transition"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="LinkedIn" class="hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Twitter" class="hover:text-white transition"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="Email" class="hover:text-white transition"><i class="fas fa-envelope"></i></a>
        <a href="#" aria-label="Facebook" class="hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
      </div>
    </div>
  </div>

  <!-- Garis Pemisah -->
  <div class="border-t border-[#FFB71A] my-8"></div>

  <!-- Copyright & Logo -->
  <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-400">
    <p>© 2025 Neosia Training Center. All rights reserved.</p>
    <img src="{{ asset('Images/Logo.png') }}" alt="Neosia Logo" class="h-10 w-auto">
  </div>
</footer>
