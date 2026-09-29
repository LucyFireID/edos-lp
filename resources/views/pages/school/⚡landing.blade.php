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
            <a href="#home" @click.prevent="scrollToSection('home')" class="flex items-center gap-4">
                <span class="flex h-14 w-14 shrink-0 items-center justify-center">
                    <img src="{{ asset('images/logo-qosimalhadi-128.png') }}" alt="Logo Qosim Al Hadi" class="h-full w-full object-contain drop-shadow-lg">
                </span>
                <span class="flex flex-col leading-tight">
                    <span class="text-xl font-bold tracking-tight sm:text-2xl" :class="scrolled ? 'text-slate-900' : 'text-white'">Qosim Al Hadi</span>
                    <span class="text-sm tracking-wide" :class="scrolled ? 'text-slate-500' : 'text-primary-100'">Bhakti Kepada Negeri</span>
                </span>
            </a>

            <ul class="hidden items-center gap-9 lg:flex">
                @foreach (['home' => 'Beranda', 'nurture' => 'Program', 'qurani' => 'Fasilitas', 'universities' => 'Universitas', 'news' => 'Berita'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}" @click.prevent="scrollToSection('{{ $id }}')" class="text-base font-medium transition hover:text-primary-500" :class="scrolled ? 'text-slate-700' : 'text-white/90'">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a href="#home" @click.prevent="scrollToSection('home')" class="rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-primary-500/30 transition hover:scale-105">
                        SPMB 2027
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
                @foreach (['home' => 'Beranda', 'nurture' => 'Program', 'qurani' => 'Fasilitas', 'universities' => 'Universitas', 'news' => 'Berita'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}" @click.prevent="scrollToSection('{{ $id }}'); open = false" class="block rounded-lg px-4 py-3.5 text-base font-medium text-slate-700 transition hover:bg-primary-50 hover:text-primary-600">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </header>

    <script>
        window.scrollToSection = function (id) {
            const el = document.getElementById(id);
            if (! el) return;

            const offset = 96;
            const targetY = el.getBoundingClientRect().top + window.scrollY - offset;
            const startY = window.scrollY;
            const distance = targetY - startY;
            const duration = 700;
            let startTime = null;

            function easeOutCubic(t) {
                return 1 - Math.pow(1 - t, 3);
            }

            function step(currentTime) {
                if (startTime === null) startTime = currentTime;
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                window.scrollTo(0, startY + distance * easeOutCubic(progress));

                if (progress < 1) {
                    requestAnimationFrame(step);
                }
            }

            requestAnimationFrame(step);
            history.replaceState(null, '', window.location.pathname);
        };
    </script>

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
                    <a href="#nurture" @click.prevent="scrollToSection('nurture')" class="rounded-full border border-white/20 bg-white/5 px-8 py-4 text-sm font-semibold text-white backdrop-blur transition hover:bg-white/10">
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
    <section id="nurture" class="relative bg-white py-24">
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
    <section id="qurani" class="bg-slate-50 py-24 md:pb-48">
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
    <section id="universities" class="relative bg-white py-24">
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
                    <div class="absolute top-[70%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Perkenalkan Para Tenaga Pendidik Kami</h3>
                    </div>
                </div>
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100">
                    <img src="{{ asset('images/card2.png') }}" alt="Perguruan Tinggi Islam" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[70%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Lacak Para Alumni</h3>
                    </div>
                </div>
                <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100">
                    <img src="{{ asset('images/card3.png') }}" alt="Kedinasan & Swasta" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute top-[70%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                    <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Sebaran Universitas Alumni dan Pendidik</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- News --}}
    <section id="news" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-wrap items-end justify-between gap-6">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Berita Terbaru</span>
                    <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">Kabar dari Sekolah</h2>
                </div>
                <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700">Lihat semua berita &rarr;</a>
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
                                <h3 class="mt-4 text-lg font-semibold text-slate-900 transition">{{ $item['title'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $item['excerpt'] }}</p>
                            <a href="#" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-primary-600">
                                Baca selengkapnya
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
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

                    <div class="mt-10">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Instansi Kerja Sama</h3>
                        <div class="mt-5 flex flex-wrap items-center gap-4">
                            <img src="{{ asset('images/kemenag.png') }}" alt="Kemenag" class="h-12 w-auto rounded bg-white/5 object-contain p-2">
                            <img src="{{ asset('images/dinas-kota-semarang.png') }}" alt="Dinas Kota Semarang" class="h-12 w-auto rounded bg-white/5 object-contain p-2">
                            <img src="{{ asset('images/ban-pdm.png') }}" alt="BAN PDM" class="h-12 w-auto rounded bg-white/5 object-contain p-2">
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Tautan Cepat</h3>
                    <ul class="mt-5 space-y-3 text-sm">
                        @foreach (['home' => 'Beranda', 'nurture' => 'Program', 'qurani' => 'Fasilitas', 'universities' => 'Universitas', 'news' => 'Berita'] as $id => $label)
                            <li><a href="#{{ $id }}" @click.prevent="scrollToSection('{{ $id }}')" class="transition hover:text-primary-400">{{ $label }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Kontak</h3>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li>Jl. Raya Kuripan, RT.2/RW.1, Kelurahan Wonolopo, Kecamatan Mijen, Kota Semarang, Jawa Tengah 50215</li>
                        <li>(021) 555-0123</li>
                        <li>info@qosimalhadi.sch.id</li>
                    </ul>
                    <div class="mt-6 flex gap-3">
                        <a href="#" aria-label="Instagram" class="flex h-10 w-10 items-center justify-center rounded-full bg-white/5 text-slate-300 transition hover:bg-primary-500 hover:text-white">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 002.25 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM12 6.75a5.25 5.25 0 110 10.5 5.25 5.25 0 010-10.5zm0 1.75a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.5 5.5a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/></svg>
                        </a>
                        <a href="#" aria-label="YouTube" class="flex h-10 w-10 items-center justify-center rounded-full bg-white/5 text-slate-300 transition hover:bg-primary-500 hover:text-white">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 text-sm sm:flex-row">
                <p>&copy; {{ date('Y') }} Qosim Al Hadi. Seluruh hak cipta dilindungi.</p>
                <div class="flex gap-6">
                    <a href="{{ route('privacy') }}" class="transition hover:text-primary-400">Kebijakan Privasi</a>
                    <a href="#" class="transition hover:text-primary-400">Syarat &amp; Ketentuan</a>
                </div>
            </div>

            <p class="mt-6 text-center text-xs text-slate-500">
                <a href="#" class="transition hover:text-primary-400">EduSatuOS by TexusCode</a>
            </p>
        </div>
    </footer>
</div>
