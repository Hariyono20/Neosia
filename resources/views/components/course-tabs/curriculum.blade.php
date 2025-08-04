<div class="space-y-6">
    <h2 class="text-xl sm:text-2xl font-semibold text-white opacity-80">Curriculum</h2>

    @foreach (['Week 1' => [
        ['type' => 'Reading', 'title' => 'Ut enim ad minim veniam', 'duration' => '14 minutes', 'quiz' => true],
        ['type' => 'Video', 'title' => 'Greetings and Introduction', 'duration' => '14 minutes', 'quiz' => false],
        ['type' => 'Audio', 'title' => 'Interactive Lesson', 'duration' => '14 minutes', 'quiz' => true],
        ['type' => 'Reading', 'title' => 'Ut enim ad minim veniam', 'duration' => '14 minutes', 'quiz' => false],
    ], 'Week 2' => [
        ['type' => 'Reading', 'title' => 'Advanced BI Concepts', 'duration' => '14 minutes', 'quiz' => true],
        ['type' => 'Video', 'title' => 'Data Visualization Techniques', 'duration' => '14 minutes', 'quiz' => false],
        ['type' => 'Audio', 'title' => 'Live Case Study', 'duration' => '14 minutes', 'quiz' => true],
    ]] as $week => $contents)
        <div x-data="{ open: true }" class="border border-white/30 rounded-xl overflow-hidden">
            <!-- Header Accordion -->
            <button @click="open = !open"
                class="w-full text-left px-4 py-3 bg-white/10 hover:bg-white/20 text-sm sm:text-base font-semibold text-white flex justify-between items-center">
                <span>{{ $week }}</span>
                <i class="bi" :class="open ? 'bi-chevron-up' : 'bi-chevron-down'"></i>
            </button>

            <!-- Content -->
            <div x-show="open" x-transition class="divide-y divide-white/20 px-4 py-3 space-y-3 text-sm text-white">
                @foreach ($contents as $item)
                    <div class="pt-3 first:pt-0">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
                            <!-- Kiri: Icon & Title -->
                            <div class="flex items-start sm:items-center gap-2 flex-wrap sm:flex-nowrap">
                                @php
                                    $icons = ['Reading' => 'bi-book', 'Video' => 'bi-camera-video', 'Audio' => 'bi-headphones'];
                                @endphp
                                <i class="bi {{ $icons[$item['type']] }} text-white text-base sm:text-lg"></i>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-1">
                                    <span class="font-semibold text-white">{{ $item['type'] }}:</span>
                                    <span class="text-white/90">{{ $item['title'] }}</span>
                                </div>
                            </div>

                            <!-- Kanan: Duration & Quiz -->
                            <div class="flex items-center gap-3 flex-wrap">
                                <div class="flex items-center gap-1 text-white/70 text-xs sm:text-sm">
                                    <i class="bi bi-clock"></i>
                                    <span>{{ $item['duration'] }}</span>
                                </div>

                                @if ($item['quiz'])
                                    <button
                                        class="bg-[#FFB71A] text-black font-semibold text-xs sm:text-sm px-3 py-1 rounded-md hover:bg-yellow-400 transition">
                                        Questions
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
