<section id="artikel" class="bg-black text-white py-16" x-data="artikelComponent()">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Judul -->
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-bold text-[#FFB71A] mb-4">
        Stay Informed with Neosia’s Updates
      </h2>
      <p class="text-base sm:text-lg max-w-2xl mx-auto text-gray-300">
        Explore our latest news, events, and contributions to the future of tech and engineering.
      </p>
    </div>

    <!-- Grid Artikel -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Card Besar -->
      <div class="lg:col-span-2 bg-[#FFB71A] text-black rounded-xl shadow p-5 flex flex-col min-h-[400px]">
        <div class="relative aspect-[4/3] overflow-hidden rounded-lg mb-4">
          <img :src="highlighted.image" class="w-full h-full object-cover" />
          <span class="absolute top-2 left-2 bg-[#12474D] text-[#FFB71A] text-xs font-bold px-2 py-1 rounded">New</span>
        </div>
        <h3 class="text-xl sm:text-2xl font-bold mb-2" x-text="highlighted.title"></h3>
        <div class="flex justify-between items-start text-sm text-gray-800 mb-2 flex-wrap gap-2">
          <div class="flex items-center gap-2">
            <img :src="highlighted.userImage" class="w-9 h-9 rounded-md border" />
            <div>
              <p class="font-semibold" x-text="highlighted.author"></p>
              <p class="text-xs" x-text="highlighted.role"></p>
            </div>
          </div>
          <p class="text-xs mt-1 sm:mt-0" x-text="highlighted.date"></p>
        </div>
        <p class="text-sm text-justify mb-4" x-text="highlighted.description"></p>
        <a href="#" class="mt-auto text-sm font-semibold hover:underline">Read More <i class="fas fa-chevron-right text-xs"></i></a>
      </div>

      <!-- Tiga Card Kecil -->
      <div class="lg:col-span-2 flex flex-col gap-4">
        <template x-for="(card, index) in cards" :key="card.id">
          <div @click="swapWithHighlighted(index)" class="cursor-pointer bg-[#FFB71A] text-black rounded-xl shadow p-4 flex flex-col sm:flex-row gap-4 hover:scale-[1.02] transition duration-200">
            <div class="w-full sm:w-28 aspect-[4/3] overflow-hidden rounded-lg shrink-0">
              <img :src="card.image" class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col flex-grow">
              <h3 class="text-lg font-bold mb-1" x-text="card.title"></h3>
              <div class="flex justify-between items-start text-xs text-gray-800 mb-1 flex-wrap gap-1">
                <div class="flex items-center gap-2">
                  <img :src="card.userImage" class="w-7 h-7 rounded-md border" />
                  <div>
                    <p class="font-semibold" x-text="card.author"></p>
                    <p class="text-xs" x-text="card.role"></p>
                  </div>
                </div>
                <p class="text-xs" x-text="card.date"></p>
              </div>
              <p class="text-sm text-justify mb-2" x-text="card.description"></p>
              <a href="#" class="mt-auto text-sm font-semibold hover:underline">Read More <i class="fas fa-chevron-right text-xs"></i></a>
            </div>
          </div>
        </template>
      </div>
    </div>

    <!-- Tombol -->
    <div class="text-center mt-10">
      <a href="#" class="bg-[#FFB71A] text-black px-6 py-3 rounded-lg border hover:bg-white transition inline-flex items-center gap-2">
        Read More Articles <i class="fas fa-chevron-right text-sm"></i>
      </a>
    </div>
  </div>
</section>

<script>
function artikelComponent() {
  return {
    highlighted: {
      id: 0,
      image: 'https://i.pravatar.cc/800?img=10',
      title: 'The Future of CAD: Trends to Watch in 2025',
      userImage: 'https://i.pravatar.cc/60?img=1',
      author: 'Rudi Wijaya',
      role: 'Senior CAD Expert',
      date: 'Oct 26, 2124',
      description: 'Explore trends in CAD for 2025, from AI-driven designs to 3D modeling innovations.'
    },
    cards: [
      {
        id: 1,
        image: 'https://i.pravatar.cc/600?img=11',
        title: 'Neosia Expands: New Courses for Certification',
        userImage: 'https://i.pravatar.cc/60?img=2',
        author: 'Indira Wulandari',
        role: 'Curriculum Developer',
        date: 'Oct 26, 2124',
        description: 'Neosia launches new courses in mechanical design, simulation, and more.'
      },
      {
        id: 2,
        image: 'https://i.pravatar.cc/600?img=12',
        title: 'AI & Automation in Manufacturing',
        userImage: 'https://i.pravatar.cc/60?img=3',
        author: 'Michael Tan',
        role: 'Automation Specialist',
        date: 'Oct 26, 2124',
        description: 'How Neosia trains engineers for AI-integrated manufacturing workflows.'
      },
      {
        id: 3,
        image: 'https://i.pravatar.cc/600?img=13',
        title: 'Upcoming Webinar: Mastering SolidWorks',
        userImage: 'https://i.pravatar.cc/60?img=4',
        author: 'Sarah Lim',
        role: 'SolidWorks Instructor',
        date: 'Oct 26, 2124',
        description: 'Join our webinar on advanced SolidWorks techniques and professional workflows.'
      }
    ],
    swapWithHighlighted(index) {
      [this.highlighted, this.cards[index]] = [this.cards[index], this.highlighted];
    }
  };
}
</script>
