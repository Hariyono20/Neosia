<section class="bg-[#FFB71A] min-h-screen px-4 sm:px-6 lg:px-20 py-12 text-white" x-data="{ tab: 'description' }">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- KIRI: Konten Utama -->
        <div class="lg:col-span-2 bg-[#12474D] p-6 sm:p-8 rounded-2xl space-y-6">
            <!-- Judul -->
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-[#FFB71A] leading-snug">
                The Business Intelligence Analyst Course 2022
            </h1>

            <div class="flex justify-center">
                <div class="flex flex-col sm:flex-row gap-4 items-center bg-black p-4 rounded-xl max-w-3xl w-full">
                    <!-- Foto -->
                    <div class="w-20 h-20 flex justify-center items-center">
                        <img src="{{ asset('Images/Course_detail/pp.png') }}" alt="Teacher"
                            class="w-full h-full object-cover rounded-lg">
                    </div>

                    <!-- Info -->
                    <div class="w-full">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-xs sm:text-sm text-center">
                            @foreach ([['icon' => 'fa-solid fa-chalkboard-user', 'label' => 'Teacher', 'value' => 'John Doe'], ['icon' => 'fa-regular fa-calendar', 'label' => 'Last Update', 'value' => '4 Agustus 2025'], ['icon' => 'fa-solid fa-align-left', 'label' => 'Categories', 'value' => 'Business, Data']] as $index => $item)
                                <div
                                    class="flex flex-col items-center gap-1 px-1 sm:px-2
                        {{ $index < 2 ? 'sm:border-r sm:border-gray-600' : '' }}">
                                    <div class="flex items-center gap-1 justify-center">
                                        <i class="{{ $item['icon'] }} text-white text-sm sm:text-base"></i>
                                        <span class="text-gray-300 text-[10px] sm:text-xs font-medium">
                                            {{ $item['label'] }}
                                        </span>
                                    </div>
                                    <p class="text-white text-sm font-semibold">
                                        {{ $item['value'] }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <!-- Gambar Preview -->
            <img src="{{ asset('Images/Course_detail/c1.png') }}" alt="Course Preview"
                class="w-full max-h-[568px] object-cover rounded-xl shadow-md">

            <!-- Tab Navigasi -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 pt-4">
                @foreach (['description' => 'Description', 'curriculum' => 'Curriculum', 'review' => 'Review', 'members' => 'Members'] as $key => $label)
                    <button @click="tab = '{{ $key }}'"
                        :class="tab === '{{ $key }}' ? 'bg-[#FFB71A] text-black' : 'bg-black text-white'"
                        class="w-full rounded-lg py-3 text-sm sm:text-base font-semibold hover:bg-[#FFB71A] hover:text-black transition duration-200">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            <!-- Konten Tab -->
            <div class="pt-6">
                <div x-show="tab === 'description'" x-cloak>
                    @include('components.course-tabs.description')
                </div>
                <div x-show="tab === 'curriculum'" x-cloak>
                    @include('components.course-tabs.curriculum')
                </div>
                <div x-show="tab === 'review'" x-cloak>
                    @include('components.course-tabs.review')
                </div>
                <div x-show="tab === 'members'" x-cloak>
                    @include('components.course-tabs.members')
                </div>
            </div>
        </div>

        <!-- KANAN: Info Singkat -->
        <div class="bg-[#12474D] p-6 sm:p-8 rounded-2xl text-sm space-y-6 h-fit self-start">
            <!-- Gambar -->
            <img src="{{ asset('Images/Course_detail/c1.png') }}" alt="Course Image"
                class="rounded-xl w-full max-h-44 object-cover">

            <!-- Grid Info -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-4">
                @foreach ([['icon' => 'fa-solid fa-dollar-sign', 'label' => 'Price', 'value' => 'Rp150.000'], ['icon' => 'fa-solid fa-chalkboard-user', 'label' => 'Instructor', 'value' => 'Tom Musk'], ['icon' => 'fa-regular fa-calendar', 'label' => 'Duration', 'value' => '4 Weeks'], ['icon' => 'fa-solid fa-users', 'label' => 'Enrolled', 'value' => '1,250 Students'], ['icon' => 'fa-solid fa-language', 'label' => 'Language', 'value' => 'English'], ['icon' => 'fa-regular fa-bookmark', 'label' => 'Save', 'value' => 'Yes']] as $index => $feature)
                    <div class="px-2 {{ ($index + 1) % 3 !== 0 ? 'border-r border-white/30' : '' }}">
                        <div class="flex flex-col items-start gap-1">
                            <div class="flex items-center gap-2">
                                <i class="{{ $feature['icon'] }} text-white text-base opacity-80"></i>
                                <p class="text-white text-xs font-light tracking-wide">
                                    {{ $feature['label'] }}
                                </p>
                            </div>
                            <p class="text-[#FFB71A] text-sm font-semibold pl-[1.375rem] leading-tight">
                                {{ $feature['value'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- CTA Button -->
            <div class="pt-4">
                <button
                    class="w-full bg-[#FFB71A] text-black py-3 rounded-xl font-bold text-lg hover:bg-yellow-400 transition">
                    ▶ Play
                </button>
            </div>
        </div>
    </div>
</section>
