<?php

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
                ['label' => 'Siswa Aktif', 'value' => '1.240', 'suffix' => '+'],
                ['label' => 'Guru & Staf', 'value' => '86', 'suffix' => ''],
                ['label' => 'Tahun Berdiri', 'value' => '1978', 'suffix' => ''],
                ['label' => 'Alumni', 'value' => '12.500', 'suffix' => '+'],
            ],
            'programs' => [
                [
                    'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                    'title' => 'Ilmu Pengetahuan Alam',
                    'desc' => 'Pembelajaran berbasis eksperimen dengan laboratorium modern untuk Fisika, Kimia, dan Biologi.',
                    'color' => 'from-sky-500 to-blue-600',
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
            'news' => [
                ['date' => '12 Sep 2026', 'category' => 'Prestasi', 'title' => 'Tim Olimpiade Sains Raih Medali Emas Nasional', 'excerpt' => 'Tiga siswa berhasil membawa pulang medali emas pada ajang OSN tingkat nasional tahun ini.'],
                ['date' => '05 Sep 2026', 'category' => 'Kegiatan', 'title' => 'Festival Seni Budaya Nusantara 2026', 'excerpt' => 'Ribuan penonton hadir memeriahkan panggung seni tahunan yang menampilkan pertunjukan budaya.'],
                ['date' => '28 Agu 2026', 'category' => 'Pengumuman', 'title' => 'Pendaftaran Penerimaan Siswa Baru Dibuka', 'excerpt' => 'Gelombang pertama pendaftaran tahun ajaran 2027/2028 resmi dibuka secara daring.'],
            ],
        ];
    }
};
?>

<div class="scroll-smooth">
    {{-- Navigation --}}
    <header
        x-data="{ open: false, scrolled: false }"
        @scroll.window="scrolled = window.scrollY > 20"
        class="fixed inset-x-0 top-0 z-50 transition-all duration-300"
        :class="scrolled ? 'bg-white/90 shadow-lg backdrop-blur-md' : 'bg-transparent'"
    >
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="#home" class="flex items-center gap-4">
                <span class="flex h-14 w-14 shrink-0 items-center justify-center">
                    <img src="{{ asset('images/logo-qosimalhadi-128.png') }}" alt="Logo Qosim Al Hadi" class="h-full w-full object-contain drop-shadow-lg">
                </span>
                <span class="flex flex-col leading-tight">
                    <span class="text-xl font-bold tracking-tight sm:text-2xl" :class="scrolled ? 'text-slate-900' : 'text-white'">Qosim Al Hadi</span>
                    <span class="text-sm tracking-wide" :class="scrolled ? 'text-slate-500' : 'text-sky-100'">Bhakti Kepada Negeri</span>
                </span>
            </a>

            <ul class="hidden items-center gap-9 lg:flex">
                @foreach (['home' => 'Beranda', 'about' => 'Tentang', 'programs' => 'Program', 'facilities' => 'Fasilitas', 'news' => 'Berita', 'contact' => 'Kontak'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}" class="text-base font-medium transition hover:text-sky-500" :class="scrolled ? 'text-slate-700' : 'text-white/90'">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a href="#contact" class="rounded-full bg-gradient-to-r from-sky-500 to-blue-600 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-sky-500/30 transition hover:scale-105">
                        Daftar Sekarang
                    </a>
                </li>
            </ul>

            <button @click="open = !open" class="lg:hidden" :class="scrolled ? 'text-slate-900' : 'text-white'" aria-label="Menu">
                <svg x-show="!open" class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="open" x-cloak class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </nav>

        <div x-show="open" x-cloak x-transition.opacity class="lg:hidden">
            <ul class="mx-4 mb-4 space-y-1 rounded-2xl bg-white p-4 shadow-2xl">
                @foreach (['home' => 'Beranda', 'about' => 'Tentang', 'programs' => 'Program', 'facilities' => 'Fasilitas', 'news' => 'Berita', 'contact' => 'Kontak'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}" @click="open = false" class="block rounded-lg px-4 py-3.5 text-base font-medium text-slate-700 transition hover:bg-sky-50 hover:text-sky-600">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </header>

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
                <span class="inline-flex items-center gap-2 rounded-full border border-sky-400/30 bg-sky-400/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-sky-300">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-sky-400"></span>
                    Penerimaan Siswa Baru 2027/2028
                </span>
                <h1 class="mt-6 text-balance text-4xl font-extrabold leading-[1.1] tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Membentuk Generasi
                    <span class="bg-gradient-to-r from-sky-400 to-blue-300 bg-clip-text text-transparent">Cerdas &amp; Berkarakter</span>
                </h1>
                <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-200">
                    Sekolah Qosim Al Hadi menghadirkan pendidikan berkualitas dengan kurikulum modern, tenaga pengajar berpengalaman, dan lingkungan belajar yang inspiratif.
                </p>
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#contact" class="rounded-full bg-gradient-to-r from-sky-500 to-blue-600 px-8 py-4 text-sm font-semibold text-white shadow-xl shadow-sky-500/30 transition hover:scale-105">
                        Daftar Sekarang
                    </a>
                    <a href="#programs" class="rounded-full border border-white/20 bg-white/5 px-8 py-4 text-sm font-semibold text-white backdrop-blur transition hover:bg-white/10">
                        Lihat Program
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

    {{-- About --}}
    <section id="about" class="bg-white py-24">
        <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-2 lg:items-center">
            <div class="relative">
                <div class="aspect-4/3 overflow-hidden rounded-3xl bg-gradient-to-br from-sky-500 to-blue-700 p-1">
                    <div class="flex h-full w-full items-center justify-center rounded-[1.35rem] bg-slate-900">
                        <div class="text-center">
                            <p class="text-6xl font-extrabold tracking-tighter text-white">46</p>
                            <p class="mt-2 text-sm uppercase tracking-widest text-sky-300">Tahun Pengabdian</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-8 -right-8 hidden rounded-2xl bg-white p-6 shadow-2xl sm:block">
                    <p class="text-3xl font-bold text-slate-900">A</p>
                    <p class="text-xs font-medium uppercase tracking-wider text-slate-500">Akreditasi Unggul</p>
                </div>
            </div>

            <div>
                <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Tentang Kami</span>
                <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">
                    Sekolah yang Menumbuhkan Potensi Setiap Anak
                </h2>
                <p class="mt-6 leading-relaxed text-slate-600">
                    Berdiri sejak 1978, Sekolah Qosim Al Hadi berkomitmen menyelenggarakan pendidikan holistik yang menyeimbangkan kecerdasan intelektual, emosional, dan spiritual. Kami percaya setiap siswa memiliki keunikan yang layak dikembangkan.
                </p>
                <div class="mt-8 space-y-4">
                    @foreach ([
                        'Kurikulum Merdeka yang adaptif dan berbasis proyek',
                        'Rasio guru dan siswa ideal 1:15 untuk pendampingan optimal',
                        'Program pembinaan karakter dan kepemimpinan siswa',
                        'Kemitraan dengan universitas dan industri terkemuka',
                    ] as $point)
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <p class="text-slate-700">{{ $point }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Programs --}}
    <section id="programs" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Program Studi</span>
                <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">Pilihan Program Unggulan</h2>
                <p class="mt-4 text-slate-600">Dirancang untuk membekali siswa dengan kompetensi abad ke-21 dan kesiapan menghadapi dunia global.</p>
            </div>

            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($programs as $program)
                    <div class="group rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-100 transition hover:-translate-y-2 hover:shadow-2xl">
                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br {{ $program['color'] }} text-white shadow-lg">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $program['icon'] }}"/>
                            </svg>
                        </span>
                            <h3 class="mt-6 text-lg font-semibold text-slate-900">{{ $program['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $program['desc'] }}</p>
                        <a href="#contact" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-sky-600 transition group-hover:gap-3">
                            Selengkapnya
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Facilities --}}
    <section id="facilities" class="bg-white py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Sarana &amp; Prasarana</span>
                <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">Fasilitas Penunjang Belajar</h2>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($facilities as $facility)
                    <div class="flex items-center gap-5 rounded-2xl border border-slate-100 bg-slate-50 p-6 transition hover:border-sky-200 hover:bg-sky-50">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white text-sky-600 shadow-sm">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $facility['icon'] }}"/>
                            </svg>
                        </span>
                        <p class="font-semibold text-slate-800">{{ $facility['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 py-24">
        <div class="absolute -right-24 top-0 h-80 w-80 rounded-full bg-sky-500/10 blur-3xl"></div>
        <div class="relative mx-auto max-w-4xl px-6" x-data="{ active: 0, total: {{ count($testimonials) }} }">
            <div class="text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-sky-400">Testimoni</span>
                <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-white sm:text-4xl">Apa Kata Mereka</h2>
            </div>

            <div class="mt-14">
                @foreach ($testimonials as $index => $testimonial)
                    <blockquote x-show="active === {{ $index }}" x-transition.opacity.duration.500ms class="text-center">
                        <p class="text-xl leading-relaxed text-slate-200 sm:text-2xl">&ldquo;{{ $testimonial['quote'] }}&rdquo;</p>
                        <footer class="mt-8">
                            <p class="font-semibold text-white">{{ $testimonial['name'] }}</p>
                            <p class="text-sm text-sky-300">{{ $testimonial['role'] }}</p>
                        </footer>
                    </blockquote>
                @endforeach
            </div>

            <div class="mt-12 flex items-center justify-center gap-3">
                @foreach ($testimonials as $index => $testimonial)
                    <button
                        @click="active = {{ $index }}"
                        class="h-2.5 rounded-full transition-all"
                        :class="active === {{ $index }} ? 'w-8 bg-sky-400' : 'w-2.5 bg-white/30 hover:bg-white/50'"
                        aria-label="Testimoni {{ $index + 1 }}"
                    ></button>
                @endforeach
            </div>
        </div>
    </section>

    {{-- News --}}
    <section id="news" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-wrap items-end justify-between gap-6">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Berita Terbaru</span>
                    <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">Kabar dari Sekolah</h2>
                </div>
                <a href="#" class="text-sm font-semibold text-sky-600 hover:text-sky-700">Lihat semua berita &rarr;</a>
            </div>

            <div class="mt-14 grid gap-8 lg:grid-cols-3">
                @foreach ($news as $item)
                    <article class="group overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-slate-100 transition hover:-translate-y-2 hover:shadow-2xl">
                        <div class="h-48 bg-gradient-to-br from-sky-500 to-blue-700"></div>
                        <div class="p-7">
                            <div class="flex items-center gap-3 text-xs">
                                <span class="rounded-full bg-sky-100 px-3 py-1 font-semibold text-sky-700">{{ $item['category'] }}</span>
                                <span class="text-slate-500">{{ $item['date'] }}</span>
                            </div>
                                <h3 class="mt-4 text-lg font-semibold text-slate-900 transition group-hover:text-sky-600">{{ $item['title'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $item['excerpt'] }}</p>
                            <a href="#" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-sky-600">
                                Baca selengkapnya
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="bg-white py-24">
        <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-2">
            <div>
                <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Hubungi Kami</span>
                <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">Siap Bergabung Bersama Kami?</h2>
                <p class="mt-6 leading-relaxed text-slate-600">
                    Kirimkan pertanyaan Anda mengenai penerimaan siswa baru, program, maupun kunjungan sekolah. Tim kami akan merespons dalam 1x24 jam.
                </p>

                <div class="mt-10 space-y-6">
                    @foreach ([
                        ['title' => 'Alamat', 'value' => 'Jl. Pendidikan No. 123, Jakarta Selatan 12190', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z'],
                        ['title' => 'Telepon', 'value' => '(021) 555-0123', 'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z'],
                        ['title' => 'Email', 'value' => 'info@qosimalhadi.sch.id', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                        ['title' => 'Jam Operasional', 'value' => 'Senin - Jumat, 07.00 - 16.00 WIB', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ] as $contact)
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-sky-100 text-sky-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $contact['icon'] }}"/>
                                </svg>
                            </span>
                            <div>
                                <p class="text-sm font-semibold uppercase tracking-wide text-slate-500">{{ $contact['title'] }}</p>
                                <p class="mt-1 font-medium text-slate-800">{{ $contact['value'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-3xl bg-slate-50 p-8 ring-1 ring-slate-100 sm:p-10">
                @if ($sent)
                    <div class="flex items-start gap-4 rounded-2xl bg-emerald-50 p-6 text-emerald-800 ring-1 ring-emerald-200">
                        <svg class="h-6 w-6 shrink-0 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <div>
                            <p class="font-semibold">Pesan berhasil dikirim!</p>
                            <p class="mt-1 text-sm">Terima kasih, kami akan segera menghubungi Anda.</p>
                            <button wire:click="$set('sent', false)" class="mt-3 text-sm font-semibold text-emerald-700 underline">
                                Kirim pesan lain
                            </button>
                        </div>
                    </div>
                @else
                    <form wire:submit="submit" class="space-y-5">
                        <div>
                            <label for="name" class="mb-1.5 block text-sm font-medium text-slate-700">Nama Lengkap</label>
                            <input
                                id="name"
                                type="text"
                                wire:model="name"
                                placeholder="Masukkan nama lengkap"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20"
                            >
                            @error('name') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">Email</label>
                                <input
                                    id="email"
                                    type="email"
                                    wire:model="email"
                                    placeholder="nama@email.com"
                                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20"
                                >
                                @error('email') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="phone" class="mb-1.5 block text-sm font-medium text-slate-700">Nomor Telepon</label>
                                <input
                                    id="phone"
                                    type="text"
                                    wire:model="phone"
                                    placeholder="0812xxxxxxx"
                                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20"
                                >
                                @error('phone') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="mb-1.5 block text-sm font-medium text-slate-700">Pesan</label>
                            <textarea
                                id="message"
                                rows="5"
                                wire:model="message"
                                placeholder="Tuliskan pertanyaan atau pesan Anda..."
                                class="w-full resize-none rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20"
                            ></textarea>
                            @error('message') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <button
                            type="submit"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-sky-500/30 transition hover:scale-[1.02] disabled:opacity-60"
                            wire:loading.attr="disabled"
                        >
                            <svg wire:loading wire:target="submit" class="h-4 w-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                            <span wire:loading.remove wire:target="submit">Kirim Pesan</span>
                            <span wire:loading wire:target="submit">Mengirim...</span>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-slate-900 pt-16 pb-8 text-slate-400">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid gap-12 lg:grid-cols-4">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3">
                        <span class="flex h-14 w-14 shrink-0 items-center justify-center">
                            <img src="{{ asset('images/logo-qosimalhadi-128.png') }}" alt="Logo Qosim Al Hadi" class="h-full w-full object-contain">
                        </span>
                        <span class="text-xl font-bold tracking-tight text-white">Qosim Al Hadi</span>
                    </div>
                    <p class="mt-5 max-w-md leading-relaxed">
                        Menyelenggarakan pendidikan berkualitas untuk membentuk generasi cerdas, berkarakter, dan siap menghadapi tantangan global.
                    </p>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Tautan Cepat</h3>
                    <ul class="mt-5 space-y-3 text-sm">
                        @foreach (['about' => 'Tentang Kami', 'programs' => 'Program', 'facilities' => 'Fasilitas', 'news' => 'Berita'] as $id => $label)
                            <li><a href="#{{ $id }}" class="transition hover:text-sky-400">{{ $label }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Kontak</h3>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li>Jl. Pendidikan No. 123, Jakarta</li>
                        <li>(021) 555-0123</li>
                        <li>info@qosimalhadi.sch.id</li>
                    </ul>
                    <div class="mt-6 flex gap-3">
                        @foreach (['M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z', 'M23 12a11 11 0 11-13-10.9v7.5h-2.2V12h2.2V9.6c0-2.2 1.3-3.4 3.3-3.4.9 0 1.9.2 1.9.2v2.1h-1.1c-1.1 0-1.4.7-1.4 1.4V12h2.4l-.4 3.3h-2V23A11 11 0 0023 12z', 'M12 2.2c-5.4 0-9.8 4.4-9.8 9.8 0 4.3 2.8 8 6.7 9.3.5.1.7-.2.7-.5v-1.7c-2.7.6-3.3-1.3-3.3-1.3-.4-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.3 1.1 2.9.8.1-.7.3-1.1.6-1.4-2.2-.2-4.5-1.1-4.5-4.9 0-1.1.4-2 1-2.7-.1-.2-.4-1.3.1-2.7 0 0 .8-.3 2.7 1a9.3 9.3 0 015 0c1.9-1.3 2.7-1 2.7-1 .5 1.4.2 2.5.1 2.7.6.7 1 1.6 1 2.7 0 3.8-2.3 4.7-4.5 4.9.3.3.7 1 .7 1.9v2.8c0 .3.2.6.7.5 3.9-1.3 6.7-5 6.7-9.3 0-5.4-4.4-9.8-9.8-9.8z'] as $icon)
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-white/5 text-slate-300 transition hover:bg-sky-500 hover:text-white">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $icon }}"/></svg>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 text-sm sm:flex-row">
                <p>&copy; {{ date('Y') }} Qosim Al Hadi. Seluruh hak cipta dilindungi.</p>
                <div class="flex gap-6">
                    <a href="#" class="transition hover:text-sky-400">Kebijakan Privasi</a>
                    <a href="#" class="transition hover:text-sky-400">Syarat &amp; Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
</div>
