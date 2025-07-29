<!-- CEO Section -->
<section class="bg-black py-16 px-4 sm:px-8 lg:px-20">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      
      <!-- Kiri: Judul dan Deskripsi -->
      <div>
        <h2 class="text-3xl sm:text-4xl font-bold mb-4" style="color: #FFB71A;">
          Meet the Experts Behind Neosia
        </h2>
        <p class="text-gray-300 mb-6">
          Our team of certified trainers brings years of real-world experience to help you learn faster and smarter—whether you're just starting out or leveling up.
        </p>
      </div>
      <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          @php
            $ceos = [
              [
                'img' => asset('Images/Ceo/ceo1.png'),
                'name' => 'Budi Santoso',
                'role' => 'Mechanical Design Expert',
                'description' => 'Expert in CAD modeling and mechanical simulations, Budi has led multiple projects involving automotive components and industrial equipment design.',
                'linkedin' => 'https://linkedin.com/in/budi'
              ],
              [
                'img' => asset('Images/Ceo/ceo2.png'),
                'name' => 'Ayu Lestari',
                'role' => 'Advanced Manufacturing Specialist',
                'description' => 'With deep expertise in lean manufacturing and smart factory implementation, Ayu helps companies streamline production using cutting-edge technologies.',
                'linkedin' => 'https://linkedin.com/in/ayu'
              ],
              [
                'img' => asset('Images/Ceo/ceo3.png'),
                'name' => 'Rama Dwi',
                'role' => 'Simulation & Analysis Engineer',
                'description' => 'Rama specializes in structural analysis, CFD, and digital prototyping, offering insights to reduce design errors before physical production.',
                'linkedin' => 'https://linkedin.com/in/rama'
              ],
              [
                'img' => asset('Images/Ceo/ceo4.png'),
                'name' => 'Sinta Rahma',
                'role' => 'Product Development Specialist',
                'description' => 'Sinta blends user-centered design with agile development to build innovative products from concept to market-ready solutions.',
                'linkedin' => 'https://linkedin.com/in/sinta'
              ],
            ];
          @endphp

          @foreach($ceos as $ceo)
            <div class="bg-[#12474D] rounded-2xl shadow-lg p-6 text-white flex flex-col justify-between">
              <img src="{{ $ceo['img'] }}" alt="{{ $ceo['name'] }}" class="w-full h-56 object-cover rounded-xl mb-4">

              <div>
                <div class="font-semibold text-base mb-1" style="color: #FFB71A;">
                  {{ $ceo['role'] }}
                </div>
                <p class="text-gray-200 text-sm mb-4">
                  {{ $ceo['description'] }}
                </p>
              </div>

              <div class="mt-auto pt-2">
                <div class="border border-[#FFB71A] rounded-xl p-3 flex justify-between items-center">
                    <div>
                    <div class="font-bold text-sm" style="color: #FFB71A;">
                        {{ $ceo['name'] }}
                    </div>
                    <div class="text-xs text-gray-300">Technical Trainer</div>
                    </div>
                    <a href="{{ $ceo['linkedin'] }}" target="_blank"
                    class="text-xs border border-[#FFB71A] text-[#FFB71A] hover:bg-[#FFB71A] hover:text-[#12474D] px-4 py-1 rounded-full transition">
                    LinkedIn
                    </a>
                </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>
