<!-- resources/views/components/artikel.blade.php -->
<section id="artikel" class="bg-black text-white py-16" x-data="artikelComponent()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Judul dan Deskripsi -->
        <div class="text-center mb-12 px-2">
            <h2 class="text-3xl sm:text-4xl font-bold text-[#FFB71A] mb-4 leading-tight">
                Stay Informed with Neosia’s Updates
            </h2>
            <p class="text-base sm:text-lg max-w-2xl mx-auto text-gray-200">
                Explore our latest news and see how we’re staying at the forefront of the industry, launching new programs, hosting events, and contributing to the future of tech and engineering.
            </p>
        </div>

        <!-- Layout Artikel -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Card Besar -->
            <div class="lg:col-span-2" x-show="highlighted" x-transition>
                <div class="bg-[#FFB71A] text-black rounded-xl shadow-lg p-5 flex flex-col h-full">
                    <!-- Gambar -->
                    <div class="relative mb-4 rounded-lg overflow-hidden aspect-video">
                        <img :src="highlighted.image" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 bg-[#12474D] text-[#FFB71A] text-xs font-bold px-2 py-1 rounded">New</span>
                    </div>

                    <!-- Konten -->
                    <h3 class="text-2xl font-bold mb-2" x-text="highlighted.title"></h3>
                    <div class="flex items-center justify-between text-sm text-gray-800 mb-3">
                        <div class="flex items-center gap-2">
                            <img :src="highlighted.userImage" class="w-9 h-9 rounded-full border border-white">
                            <div>
                                <p class="font-semibold" x-text="highlighted.author"></p>
                                <p class="text-xs" x-text="highlighted.role"></p>
                            </div>
                        </div>
                        <p class="text-xs" x-text="highlighted.date"></p>
                    </div>
                    <p class="text-sm mb-4 text-justify" x-text="highlighted.description"></p>
                    <div class="mt-auto">
                        <a href="#" class="inline-flex items-center gap-2 font-semibold text-black hover:text-white hover:underline transition">
                            Read More <i class="fas fa-chevron-right text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tiga Card Kecil -->
            <div class="lg:col-span-2 flex flex-col gap-4">
                <template x-for="(card, index) in cards" :key="card.id">
                    <div @click="swapWithHighlighted(index)"
                        class="cursor-pointer bg-[#FFB71A] text-black rounded-xl shadow-md p-4 sm:p-5 hover:scale-[1.02] transition transform duration-200 flex flex-col sm:flex-row gap-4">
                        <!-- Gambar -->
                        <div class="flex-shrink-0 aspect-square w-full sm:w-28 rounded-md overflow-hidden">
                            <img :src="card.image" class="w-full h-full object-cover">
                        </div>

                        <!-- Konten -->
                        <div class="flex flex-col flex-grow">
                            <h3 class="text-xl font-bold mb-1" x-text="card.title"></h3>
                            <div class="flex items-center justify-between text-sm text-gray-800 mb-1 flex-wrap gap-2">
                                <div class="flex items-center gap-2">
                                    <img :src="card.userImage" class="w-8 h-8 rounded-full border border-white">
                                    <div>
                                        <p class="font-semibold" x-text="card.author"></p>
                                        <p class="text-xs" x-text="card.role"></p>
                                    </div>
                                </div>
                                <p class="text-xs" x-text="card.date"></p>
                            </div>
                            <p class="text-sm text-justify mb-2" x-text="card.description"></p>
                            <div class="mt-auto">
                                <a href="#" class="inline-flex items-center gap-1 font-semibold text-black hover:text-white hover:underline text-sm">
                                    Read More <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Tombol Bawah -->
        <div class="text-center mt-12">
            <a href="#"
                class="inline-flex items-center gap-2 bg-[#FFB71A] text-black border border-[#FFB71A] px-6 py-3 rounded-lg hover:bg-white hover:text-black transition">
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
                description: 'As technology evolves, so does the world of CAD. In this article, we explore the most exciting trends in CAD for 2025, from AI-driven designs to enhanced 3D modeling capabilities.'
            },
            cards: [
                {
                    id: 1,
                    image: 'https://i.pravatar.cc/600?img=11',
                    title: 'Neosia Expands: New Courses Available for Certification',
                    userImage: 'https://i.pravatar.cc/60?img=2',
                    author: 'Indira Wulandari',
                    role: 'Curriculum Developer',
                    date: 'Oct 26, 2124',
                    description: 'Neosia is expanding its educational offerings with several new courses designed to equip students with the latest skills in mechanical design, simulation, and more. Learn about these exciting updates here!'
                },
                {
                    id: 2,
                    image: 'https://i.pravatar.cc/600?img=12',
                    title: 'AI and Automation in Manufacturing: How Neosia Is Leading the Charge',
                    userImage: 'https://i.pravatar.cc/60?img=3',
                    author: 'Michael Tan',
                    role: 'Automation Specialist',
                    date: 'Oct 26, 2124',
                    description: 'Discover how Neosia is integrating AI and automation into its training programs, preparing the next generation of engineers and designers to meet the demands of tomorrow\'s manufacturing industry.'
                },
                {
                    id: 3,
                    image: 'https://i.pravatar.cc/600?img=13',
                    title: 'Upcoming Webinar: Mastering SolidWorks for Engineering Professionals',
                    userImage: 'https://i.pravatar.cc/60?img=4',
                    author: 'Sarah Lim',
                    role: 'Senior SolidWorks Instructor',
                    date: 'Oct 26, 2124',
                    description: 'Join our upcoming webinar on mastering SolidWorks for engineering professionals, where experts will share tips, tricks, and techniques to enhance your CAD and simulation skills.'
                }
            ],
            swapWithHighlighted(index) {
                const temp = this.highlighted;
                this.highlighted = this.cards[index];
                this.cards[index] = temp;
            }
        }
    }
</script>
