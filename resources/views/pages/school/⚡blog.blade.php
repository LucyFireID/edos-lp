<?php

use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

new #[Title('Berita & Informasi - Qosim Al Hadi Semarang')] class extends Component
{
    #[Url]
    public int $page = 1;

    public function goToPage(int $page): void
    {
        $this->page = $page;
        $this->dispatch('paginated');
    }

    public function with(): array
    {
        $posts = collect([
            [
                'category' => 'Pengumuman',
                'date' => '28 Agustus 2026',
                'timestamp' => '2026-08-28',
                'title' => 'Pendaftaran Penerimaan Siswa Baru Dibuka',
                'excerpt' => 'Gelombang pertama pendaftaran tahun ajaran 2027/2028 resmi dibuka secara daring. Segera daftarkan putra-putri Anda.',
                'color' => 'bg-blue-100 text-blue-700',
            ],
            [
                'category' => 'Prestasi',
                'date' => '12 September 2026',
                'timestamp' => '2026-09-12',
                'title' => 'Tim Olimpiade Sains Raih Medali Emas Nasional',
                'excerpt' => 'Tiga siswa berhasil membawa pulang medali emas pada ajang OSN tingkat nasional tahun ini.',
                'color' => 'bg-amber-100 text-amber-700',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '05 September 2026',
                'timestamp' => '2026-09-05',
                'title' => 'Festival Seni Budaya Nusantara 2026',
                'excerpt' => 'Ribuan penonton hadir memeriahkan panggung seni tahunan yang menampilkan pertunjukan budaya.',
                'color' => 'bg-rose-100 text-rose-700',
            ],
            [
                'category' => 'Informasi',
                'date' => '20 Juli 2026',
                'timestamp' => '2026-07-20',
                'title' => 'Jadwal Ujian Semester Genap Tahun Ajaran 2025/2026',
                'excerpt' => 'Informasi lengkap mengenai jadwal ujian semester genap dapat diunduh melalui portal siswa.',
                'color' => 'bg-emerald-100 text-emerald-700',
            ],
            [
                'category' => 'Prestasi',
                'date' => '15 Juni 2026',
                'timestamp' => '2026-06-15',
                'title' => 'Juara Umum Olimpiade Matematika Tingkat Kota',
                'excerpt' => 'Siswa-siswi Qosim Al Hadi kembali menorehkan prestasi gemilang di bidang matematika.',
                'color' => 'bg-amber-100 text-amber-700',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '10 Mei 2026',
                'timestamp' => '2026-05-10',
                'title' => 'Study Tour ke Kawasan Industri dan Perguruan Tinggi',
                'excerpt' => 'Kegiatan study tour memberikan pengalaman belajar langsung di dunia industri dan kampus.',
                'color' => 'bg-rose-100 text-rose-700',
            ],
            [
                'category' => 'Informasi',
                'date' => '15 April 2026',
                'timestamp' => '2026-04-15',
                'title' => 'Jadwal Pembagian Raport Semester Genap',
                'excerpt' => 'Informasi pembagian raport semester genap tahun ajaran 2025/2026 dapat diakses melalui portal siswa.',
                'color' => 'bg-emerald-100 text-emerald-700',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '08 Maret 2026',
                'timestamp' => '2026-03-08',
                'title' => 'Workshop Kepramukaian dan Kepemimpinan Siswa',
                'excerpt' => 'Kegiatan workshop membekali siswa dengan keterampilan kepramukaian dan kepemimpinan.',
                'color' => 'bg-rose-100 text-rose-700',
            ],
        ])->sortByDesc('timestamp')->values();

        $posts = $posts->map(fn ($post) => [...$post, 'slug' => Str::slug($post['title'])])->values();

        $perPage = 6;
        $total = $posts->count();
        $lastPage = max(1, (int) ceil($total / $perPage));
        $current = max(1, min($this->page, $lastPage));
        $offset = ($current - 1) * $perPage;

        return [
            'posts' => $posts->slice($offset, $perPage)->all(),
            'heroPosts' => $posts->take(3)->values()->all(),
            'currentPage' => $current,
            'lastPage' => $lastPage,
            'total' => $total,
        ];
    }
};

?>

<div class="scroll-smooth" x-on:paginated.window="window.scrollTo({ top: 0, behavior: 'smooth' })">
    {{-- Navigation --}}
    <header
        x-data="{ open: false, scrolled: true }"
        class="fixed inset-x-0 top-0 z-50 bg-white/90 shadow-lg backdrop-blur-md transition-all duration-300"
    >
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="{{ route('home') }}" class="flex items-center gap-4">
                <span class="flex h-14 w-14 shrink-0 items-center justify-center">
                    <img src="{{ asset('images/logo-qosimalhadi-128.png') }}" alt="Logo Qosim Al Hadi" class="h-full w-full object-contain drop-shadow-lg">
                </span>
                <span class="flex flex-col leading-tight">
                    <span class="text-xl font-bold tracking-tight text-slate-900 sm:text-2xl">Qosim Al Hadi</span>
                    <span class="text-sm tracking-wide text-slate-500">Bhakti Kepada Negeri</span>
                </span>
            </a>

            <ul class="hidden items-center gap-9 lg:flex">
                <li>
                    <a href="{{ route('home') }}" class="text-base font-medium text-slate-700 transition hover:text-primary-500">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="text-base font-medium text-primary-600 transition hover:text-primary-500" aria-current="page">
                        Berita
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}" class="rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-primary-500/30 transition hover:scale-105">
                        SPMB 2027
                    </a>
                </li>
            </ul>

            <button @click="open = !open" class="text-slate-900 lg:hidden" aria-label="Menu">
                <svg x-show="!open" class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="open" x-cloak class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </nav>

        <div x-show="open" x-cloak x-transition.opacity class="lg:hidden">
            <ul class="mx-4 mb-4 space-y-1 rounded-2xl bg-white p-4 shadow-2xl">
                <li>
                    <a href="{{ route('home') }}" @click="open = false" class="block rounded-lg px-4 py-3.5 text-base font-medium text-slate-700 transition hover:bg-primary-50 hover:text-primary-600">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" @click="open = false" class="block rounded-lg bg-primary-50 px-4 py-3.5 text-base font-medium text-primary-700 transition hover:bg-primary-100">
                        Berita
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <div class="flex-1 py-12 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-6 flex justify-center text-sm text-slate-500">
                    <ol class="flex items-center gap-2">
                        <li>
                            <a href="{{ route('home') }}" class="transition hover:text-primary-600">Beranda</a>
                        </li>
                        <li aria-hidden="true" class="text-slate-300">/</li>
                        <li class="font-medium text-slate-700" aria-current="page">Berita &amp; Informasi</li>
                    </ol>
                </nav>

                <div class="mb-12 text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Berita &amp; Informasi
                    </h1>
                    <p class="mx-auto mt-4 max-w-2xl text-lg text-slate-600">
                        Ikuti perkembangan terbaru seputar pengumuman, prestasi, dan kegiatan Qosim Al Hadi Semarang.
                    </p>
                </div>

                @if ($currentPage === 1 && count($heroPosts) > 0)
                    <div class="mb-12" x-data="{ active: 0, total: {{ count($heroPosts) }} }" x-init="setInterval(() => active = (active + 1) % total, 5000)">
                        <div class="relative overflow-hidden rounded-3xl bg-white shadow-lg">
                            <div class="flex transition-transform duration-700 ease-out" :style="`transform: translateX(-${active * 100}%)`">
                                @foreach ($heroPosts as $heroPost)
                                    <div class="w-full flex-shrink-0">
                                        <div class="flex flex-col md:flex-row">
                                            <div class="relative h-64 bg-slate-200 md:h-auto md:w-1/2 md:min-h-[360px]">
                                                <div class="flex h-full w-full items-center justify-center text-slate-400">
                                                    <svg class="h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l2.586-2.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                                </div>
                                            </div>
                                            <div class="flex flex-col justify-center p-8 md:w-1/2 md:p-12">
                                                <div class="mb-3 flex items-center gap-3 text-xs font-semibold uppercase tracking-wide">
                                                    <span class="rounded-full px-2.5 py-1 {{ $heroPost['color'] }}">{{ $heroPost['category'] }}</span>
                                                    <span class="text-slate-400">{{ $heroPost['date'] }}</span>
                                                </div>
                                                <a href="{{ route('blog.post', $heroPost['slug']) }}" class="block">
                                                    <h2 class="text-2xl font-bold text-slate-900 transition hover:text-primary-600 sm:text-3xl">{{ $heroPost['title'] }}</h2>
                                                </a>
                                                <p class="mt-4 line-clamp-3 text-slate-600">{{ $heroPost['excerpt'] }}</p>
                                                <a href="{{ route('blog.post', $heroPost['slug']) }}" class="mt-6 inline-flex items-center text-sm font-semibold text-primary-600 transition hover:text-primary-700">
                                                    Baca selengkapnya
                                                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button @click="active = (active - 1 + total) % total" class="absolute top-1/2 left-4 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full bg-white/90 text-slate-700 shadow-md transition hover:bg-white" aria-label="Sebelumnya">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            </button>
                            <button @click="active = (active + 1) % total" class="absolute top-1/2 right-4 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full bg-white/90 text-slate-700 shadow-md transition hover:bg-white" aria-label="Selanjutnya">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>

                            <div class="absolute bottom-4 left-1/2 z-10 flex -translate-x-1/2 gap-2">
                                <template x-for="i in total">
                                    <button @click="active = i - 1" class="h-2.5 w-2.5 rounded-full transition" :class="i - 1 === active ? 'bg-primary-600' : 'bg-slate-300'" aria-label="Pindah slide"></button>
                                </template>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($posts as $post)
                        <article class="group flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm transition hover:shadow-lg">
                            <div class="relative h-48 bg-slate-200">
                                <div class="flex h-full w-full items-center justify-center text-slate-400">
                                    <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l2.586-2.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-6">
                                <div class="mb-3 flex items-center gap-3 text-xs font-semibold uppercase tracking-wide">
                                    <span class="rounded-full px-2.5 py-1 {{ $post['color'] }}">{{ $post['category'] }}</span>
                                    <span class="text-slate-400">{{ $post['date'] }}</span>
                                </div>
                                <a href="{{ route('blog.post', $post['slug']) }}" class="block">
                                    <h2 class="text-lg font-bold text-slate-900 transition group-hover:text-primary-600">
                                        {{ $post['title'] }}
                                    </h2>
                                </a>
                                <p class="mt-3 flex-1 text-sm leading-relaxed text-slate-600">
                                    {{ $post['excerpt'] }}
                                </p>
                                <a href="{{ route('blog.post', $post['slug']) }}" class="mt-5 inline-flex items-center text-sm font-semibold text-primary-600 transition hover:text-primary-700">
                                    Baca selengkapnya
                                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                @if ($lastPage > 1)
                    <div class="mt-12 flex items-center justify-center gap-2">
                        <button
                            wire:click="goToPage({{ $currentPage - 1 }})"
                            @disabled($currentPage === 1)
                            class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-50"
                        >
                            Sebelumnya
                        </button>

                        @for ($i = 1; $i <= $lastPage; $i++)
                            <button
                                wire:click="goToPage({{ $i }})"
                                class="h-10 w-10 rounded-lg text-sm font-semibold transition {{ $i === $currentPage ? 'bg-primary-600 text-white' : 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50' }}"
                            >
                                {{ $i }}
                            </button>
                        @endfor

                        <button
                            wire:click="goToPage({{ $currentPage + 1 }})"
                            @disabled($currentPage === $lastPage)
                            class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-50"
                        >
                            Selanjutnya
                        </button>
                    </div>
                @endif
            </div>
        </div>

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
                            <li><a href="{{ route('home') }}" class="transition hover:text-primary-400">Beranda</a></li>
                            <li><a href="{{ route('home') }}#program" class="transition hover:text-primary-400">Program</a></li>
                            <li><a href="{{ route('home') }}#fasilitas" class="transition hover:text-primary-400">Fasilitas</a></li>
                            <li><a href="{{ route('home') }}#universitas" class="transition hover:text-primary-400">Universitas</a></li>
                            <li><a href="{{ route('blog') }}" class="transition hover:text-primary-400">Berita</a></li>
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
                        <a href="{{ route('terms') }}" class="transition hover:text-primary-400">Syarat &amp; Ketentuan</a>
                    </div>
                </div>

                <p class="mt-6 text-center text-xs text-slate-500">
                    <a href="#" class="transition hover:text-primary-400">EduSatuOS by TexusCode</a>
                </p>
            </div>
        </footer>
    </main>
</div>
