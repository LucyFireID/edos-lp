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

        $posts = $posts->map(fn ($post) => [...$post, 'slug' => Str::slug($post['title']), 'author' => 'Tim Redaksi Qosim Al Hadi'])->values();

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

    </main>
</div>
