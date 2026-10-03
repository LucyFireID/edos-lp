<?php

use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Qosim Al Hadi Semarang | Bhakti Kepada Negeri')] class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $message = '';

    public bool $sent = false;

    public function submit(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'min:8', 'max:20'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ]);

        \Illuminate\Support\Facades\Mail::raw(
            "Nama: {$validated['name']}\nEmail: {$validated['email']}\nTelepon: {$validated['phone']}\n\n{$validated['message']}",
            function ($mail) use ($validated) {
                $mail->to(config('mail.from.address'))
                    ->subject('Pesan Baru dari Website Sekolah');
            }
        );

        $this->reset(['name', 'email', 'phone', 'message']);
        $this->sent = true;
    }

    public function with(): array
    {
        return [
            'stats' => [
                ['label' => 'Siswa Aktif', 'value' => '480', 'suffix' => '+'],
                ['label' => 'Guru & Staf', 'value' => '30', 'suffix' => '+'],
                ['label' => 'Tahun Berdiri', 'value' => '2003', 'suffix' => ''],
                ['label' => 'Alumni', 'value' => '1.664', 'suffix' => '+'],
            ],
            'programs' => [
                [
                    'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                    'title' => 'Ilmu Pengetahuan Alam',
                    'desc' => 'Pembelajaran berbasis eksperimen dengan laboratorium modern untuk Fisika, Kimia, dan Biologi.',
                    'color' => 'from-primary-500 to-primary-600',
                ],
                [
                    'icon' => 'M9 7h6m-6 4h6m-6 4h3M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z',
                    'title' => 'Ilmu Pengetahuan Sosial',
                    'desc' => 'Mengembangkan nalar kritis melalui kajian sosial, ekonomi, sejarah, dan geografi.',
                    'color' => 'from-emerald-500 to-teal-600',
                ],
                [
                    'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'title' => 'Teknologi Informasi',
                    'desc' => 'Kurikulum pemrograman, desain digital, dan literasi teknologi yang siap industri.',
                    'color' => 'from-violet-500 to-purple-600',
                ],
                [
                    'icon' => 'M3 3v18h18M7 14l3-3 3 3 5-6',
                    'title' => 'Bahasa & Budaya',
                    'desc' => 'Program bilingual serta pertukaran pelajar untuk wawasan global yang luas.',
                    'color' => 'from-amber-500 to-orange-600',
                ],
            ],
            'facilities' => [
                ['name' => 'Laboratorium Sains', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                ['name' => 'Perpustakaan Digital', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['name' => 'Lapangan Olahraga', 'icon' => 'M12 22a10 10 0 100-20 10 10 0 000 20zM2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z'],
                ['name' => 'Studio Musik', 'icon' => 'M9 19V6l12-3v13M9 19a3 3 0 11-6 0 3 3 0 016 0zm12-3a3 3 0 11-6 0 3 3 0 016 0z'],
                ['name' => 'Kantin Sehat', 'icon' => 'M3 3h18v4H3zM5 7v13a1 1 0 001 1h12a1 1 0 001-1V7M9 12h6'],
                ['name' => 'Ruang Multimedia', 'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z'],
            ],
            'testimonials' => [
                ['name' => 'Ibu Sari Dewi', 'role' => 'Orang Tua Siswa', 'quote' => 'Perkembangan akademik dan karakter anak saya meningkat pesat. Komunikasi guru dengan orang tua sangat baik.'],
                ['name' => 'Rangga Pratama', 'role' => 'Alumni 2021', 'quote' => 'Bekal riset dan disiplin yang saya dapatkan membuat saya percaya diri kuliah di luar negeri.'],
                ['name' => 'Bapak Hendra Wijaya', 'role' => 'Orang Tua Siswa', 'quote' => 'Fasilitas lengkap dan program ekstrakurikuler yang beragam membuat anak semangat bersekolah setiap hari.'],
            ],
            'news' => collect([
                [
                    'date' => '12 September 2026',
                    'timestamp' => '2026-09-12',
                    'category' => 'Prestasi',
                    'title' => 'Tim Olimpiade Sains Raih Medali Emas Nasional',
                    'excerpt' => 'Tiga siswa berhasil membawa pulang medali emas pada ajang OSN tingkat nasional tahun ini.',
                ],
                [
                    'date' => '05 September 2026',
                    'timestamp' => '2026-09-05',
                    'category' => 'Kegiatan',
                    'title' => 'Festival Seni Budaya Nusantara 2026',
                    'excerpt' => 'Ribuan penonton hadir memeriahkan panggung seni tahunan yang menampilkan pertunjukan budaya.',
                ],
                [
                    'date' => '28 Agustus 2026',
                    'timestamp' => '2026-08-28',
                    'category' => 'Pengumuman',
                    'title' => 'Pendaftaran Penerimaan Siswa Baru Dibuka',
                    'excerpt' => 'Gelombang pertama pendaftaran tahun ajaran 2027/2028 resmi dibuka secara daring.',
                ],
                [
                    'date' => '20 Juli 2026',
                    'timestamp' => '2026-07-20',
                    'category' => 'Informasi',
                    'title' => 'Jadwal Ujian Semester Genap Tahun Ajaran 2025/2026',
                    'excerpt' => 'Informasi lengkap mengenai jadwal ujian semester genap dapat diunduh melalui portal siswa.',
                ],
            ])->sortByDesc('timestamp')->take(3)->map(fn ($item) => [...$item, 'slug' => Str::slug($item['title']), 'author' => 'Tim Redaksi Qosim Al Hadi'])->values()->all(),
        ];
    }
};
?>

<div class="scroll-smooth">
{{-- Hero --}}
    <section id="home" class="relative flex min-h-svh items-center overflow-hidden bg-slate-900">
        <video
            class="absolute inset-0 h-full w-full object-cover"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            aria-hidden="true"
        >
            <source src="{{ asset('videos/hero-video.mp4') }}" type="video/mp4">
        </video>

        <div class="absolute inset-0 bg-slate-950/70 lg:hidden"></div>
        <div class="absolute inset-0 hidden bg-gradient-to-r from-slate-950/90 via-slate-950/60 to-slate-950/10 lg:block"></div>

        <div class="relative mx-auto w-full max-w-7xl px-6 pt-36 pb-28">
            <div class="max-w-3xl">
                <h1 class="mt-6 text-balance text-4xl font-extrabold leading-[1.1] tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Membentuk Generasi
                    <span class="bg-gradient-to-r from-primary-400 to-primary-300 bg-clip-text text-transparent">Cerdas &amp; Berkarakter</span>
                </h1>
                <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-200">
                    Yayasan Qosim Al Hadi menghadirkan pendidikan berkualitas dengan kurikulum modern, tenaga pengajar berpengalaman, dan lingkungan belajar yang inspiratif.
                </p>
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#home" @click.prevent="scrollToSection('home')" class="rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-8 py-4 text-sm font-semibold text-white shadow-xl shadow-primary-500/30 transition hover:scale-105">
                        SPMB 2027
                    </a>
                    <a href="#program" @click.prevent="scrollToSection('program')" class="rounded-full border border-white/20 bg-white/5 px-8 py-4 text-sm font-semibold text-white backdrop-blur transition hover:bg-white/10">
                        Jelajahi Program
                    </a>
                </div>

                <div class="mt-14 grid grid-cols-2 gap-6 sm:grid-cols-4">
                    @foreach ($stats as $stat)
                        <div>
                            <p class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $stat['value'] }}{{ $stat['suffix'] }}</p>
                            <p class="mt-1 text-xs font-medium uppercase tracking-wider text-slate-400">{{ $stat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Built to Nurture --}}
    <section id="program" class="relative bg-white py-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('{{ asset('images/batik.png') }}')"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    Membentuk Generasi Unggul untuk Masa Depan
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 lg:text-lg">
                    Menyiapkan generasi yang berilmu, berakhlak, berdaya juang tinggi, dan memiliki wawasan luas untuk menghadapi masa depan dengan penuh keyakinan.
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-12">
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-6">
                    <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur transition-colors duration-500 group-hover:bg-primary-100 group-hover:text-primary-700">Madrasah Ibtidaiyah (MI)</span>
                        <h3 class="mt-3 text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Membangun Fondasi Ilmu dan Karakter</h3>
                        <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Menanamkan dasar ilmu pengetahuan, nilai keislaman, dan karakter positif melalui pembelajaran yang menyenangkan dan sesuai dengan perkembangan anak.</p>
                        <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                    </div>
                </div>
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-6">
                    <img src="{{ asset('images/mts.png') }}" alt="Madrasah Tsanawiyah" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur transition-colors duration-500 group-hover:bg-primary-100 group-hover:text-primary-700">Madrasah Tsanawiyah (MTs)</span>
                        <h3 class="mt-3 text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Mengembangkan Potensi dan Kemandirian</h3>
                        <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Mendorong peserta didik untuk mengembangkan potensi akademik, karakter, dan keterampilan melalui pembelajaran yang aktif, disiplin, dan berorientasi pada pengembangan diri.</p>
                        <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                    </div>
                </div>
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-7">
                    <img src="{{ asset('images/ma.png') }}" alt="Madrasah Aliyah" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur transition-colors duration-500 group-hover:bg-primary-100 group-hover:text-primary-700">Madrasah Aliyah (MA)</span>
                        <h3 class="mt-3 text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Mempersiapkan Generasi untuk Masa Depan</h3>
                        <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Membekali peserta didik dengan ilmu pengetahuan, keterampilan, dan karakter untuk melanjutkan pendidikan tinggi, berkarier, serta berkontribusi di tengah masyarakat.</p>
                        <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                    </div>
                </div>
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-5">
                    <img src="{{ asset('images/ponpes.png') }}" alt="Pondok Pesantren" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur transition-colors duration-500 group-hover:bg-primary-100 group-hover:text-primary-700">Pondok Pesantren</span>
                        <h3 class="mt-3 text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Membentuk Generasi Berilmu dan Berakhlak</h3>
                        <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Membangun pribadi yang berpegang teguh pada nilai-nilai keislaman, berakhlak mulia, mandiri, disiplin, dan siap menghadapi tantangan kehidupan.</p>
                        <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Quranic Generation --}}
    @php
        $features = [
            ['title' => 'Tahfidz Qur\'an', 'desc' => 'Menghafal Al-Qur\'an dengan metode yang menyenangkan dan terstruktur.'],
            ['title' => 'Bahasa Arab', 'desc' => 'Membekali kemampuan berbahasa Arab untuk memahami ajaran Islam.'],
            ['title' => 'Pendidikan Karakter', 'desc' => 'Menanamkan akhlak mulia, integritas, dan kepribadian positif.'],
            ['title' => 'STEM & Inovasi', 'desc' => 'Mengembangkan kemampuan sains, teknologi, dan pemecahan masalah.'],
            ['title' => 'Kepemimpinan', 'desc' => 'Membangun jiwa kepemimpinan, tanggung jawab, dan kerja sama.'],
            ['title' => 'Seni & Kreativitas', 'desc' => 'Menyalurkan bakat melalui seni, musik, dan kreativitas.'],
            ['title' => 'Olahraga & Kesehatan', 'desc' => 'Membiasakan gaya hidup sehat, aktif, dan sportif.'],
            ['title' => 'Pengabdian Masyarakat', 'desc' => 'Melatih empati dan kontribusi nyata untuk lingkungan.'],
        ];
    @endphp
    <section id="fasilitas" class="bg-slate-50 py-24 md:pb-48">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    Menumbuhkan Generasi Qur'ani yang Unggul
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 lg:text-lg">
                    Mengintegrasikan pendidikan umum dan keislaman untuk membentuk generasi yang berilmu, berakhlak mulia, mandiri, dan siap memberikan manfaat bagi masyarakat.
                </p>
            </div>

            <div class="mt-16 flex snap-x snap-mandatory gap-4 overflow-x-auto sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:overflow-visible">
                @foreach ($features as $feature)
                    <div class="aspect-[10/11] w-[80vw] shrink-0 snap-start rounded-2xl bg-cover bg-center shadow-sm ring-1 ring-slate-100 sm:w-auto {{ $loop->iteration % 2 === 0 ? 'md:translate-y-[30%]' : '' }}"
                        style="background-image: url('{{ asset('images/card' . $loop->iteration . '.png') }}')"
                    ></div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- University Spread --}}
    <section id="universitas" class="relative bg-white py-24">
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('{{ asset('images/batik2.png') }}')"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-6">
            <div class="grid items-start gap-12 lg:grid-cols-2">
                <div>
                    <h2 class="text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        Sebaran Universitas
                    </h2>
                </div>
                <div>
                    <p class="text-base leading-relaxed text-slate-600 lg:text-lg">
                        Mempersiapkan lulusan untuk melanjutkan pendidikan ke perguruan tinggi pilihan mereka. Temukan bagaimana kami membantu setiap siswa meraih potensi dan cita-citanya.
                    </p>
                </div>
            </div>
        </div>

        <div class="relative z-10 mt-16 w-full overflow-hidden">
            <div class="animate-marquee flex w-max">
                @php
                    $logos = ['logo-ui.png', 'logo-ugm.png', 'logo-itb.png', 'logo-unair.png', 'logo-ipb.png'];
                    $logos = array_merge($logos, $logos, $logos, $logos);
                @endphp
                @foreach ($logos as $logo)
                    <div class="flex w-80 flex-shrink-0 items-center justify-center px-8">
                        <img src="{{ asset('images/' . $logo) }}" alt="Logo" class="h-32 w-auto object-contain">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="relative z-10 mx-auto mt-16 max-w-7xl px-6">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100">
                    <img src="{{ asset('images/card1.png') }}" alt="Perguruan Tinggi Negeri" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[60%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Perkenalkan Para Tenaga Pendidik Kami</h3>
                        <a href="{{ route('teachers') }}" @click.stop class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</a>
                    </div>
                </div>
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100">
                    <img src="{{ asset('images/card2.png') }}" alt="Perguruan Tinggi Islam" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[60%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Lacak Para Alumni</h3>
                        <a href="{{ route('alumni') }}" @click.stop class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</a>
                    </div>
                </div>
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100">
                    <img src="{{ asset('images/card3.png') }}" alt="Kedinasan & Swasta" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[60%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Sebaran Universitas Alumni dan Pendidik</h3>
                        <a href="{{ route('universities') }}" @click.stop class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- News --}}
    <section id="berita" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-wrap items-end justify-between gap-6">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Berita Terbaru</span>
                    <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">Kabar dari Sekolah</h2>
                </div>
                <a href="{{ route('blog') }}" class="text-sm font-semibold text-primary-600 hover:text-primary-700">Lihat semua berita &rarr;</a>
            </div>

            <div class="mt-14 grid gap-8 lg:grid-cols-3">
                @foreach ($news as $item)
                    <article class="group overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-slate-100 transition">
                        <div class="h-48 bg-gradient-to-br from-primary-500 to-primary-700"></div>
                        <div class="p-7">
                            <div class="flex items-center gap-3 text-xs">
                                <span class="rounded-full bg-primary-100 px-3 py-1 font-semibold text-primary-700">{{ $item['category'] }}</span>
                                <span class="text-slate-500">{{ $item['date'] }}</span>
                            </div>
                                <a href="{{ route('blog.post', $item['slug']) }}" class="mt-4 block">
                                    <h3 class="text-lg font-semibold text-slate-900 transition hover:text-primary-600">{{ $item['title'] }}</h3>
                                </a>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $item['excerpt'] }}</p>
                            <a href="{{ route('blog.post', $item['slug']) }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-primary-600">
                                Baca selengkapnya
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>


</div>
