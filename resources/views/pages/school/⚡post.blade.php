<?php

use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Berita - Qosim Al Hadi Semarang')] class extends Component
{
    public string $slug = '';

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
                'content' => '<p>Pendaftaran Penerimaan Siswa Baru Qosim Al Hadi Semarang untuk tahun ajaran 2027/2028 telah resmi dibuka. Kami membuka kesempatan bagi para siswa berprestasi untuk bergabung dan menempuh pendidikan berkualitas bersama kami.</p><figure class="my-8"><img src="' . asset('images/logo-qosimalhadi-128.png') . '" alt="Ilustrasi pendaftaran" class="w-full rounded-2xl shadow-md"><figcaption class="mt-2 text-center text-sm text-slate-500">Ilustrasi proses pendaftaran siswa baru secara daring.</figcaption></figure><p>Proses pendaftaran dapat dilakukan secara daring melalui portal resmi sekolah. Orang tua dapat mengisi formulir, mengunggah dokumen yang diperlukan, dan mengikuti jadwal seleksi yang telah ditentukan.</p><p>Jangan lewatkan kesempatan emas ini. Kuota terbatas, segera daftarkan putra-putri Anda dan jadilah bagian dari keluarga besar Qosim Al Hadi Semarang.</p>',
            ],
            [
                'category' => 'Prestasi',
                'date' => '12 September 2026',
                'timestamp' => '2026-09-12',
                'title' => 'Tim Olimpiade Sains Raih Medali Emas Nasional',
                'excerpt' => 'Tiga siswa berhasil membawa pulang medali emas pada ajang OSN tingkat nasional tahun ini.',
                'color' => 'bg-amber-100 text-amber-700',
                'content' => '<p>Prestasi gemilang kembali diraih oleh siswa-siswi Qosim Al Hadi Semarang dalam ajang Olimpiade Sains Nasional. Tiga siswa berhasil meraih medali emas setelah melewati berbagai tahapan seleksi yang ketat.</p><p>Kemenangan ini menjadi bukti nyata komitmen sekolah dalam mengembangkan potensi akademik siswa. Dengan bimbingan guru dan dukungan orang tua, para siswa mampu bersaing di tingkat nasional.</p><p>Kami mengucapkan selamat kepada para peraih medali dan berharap prestasi ini dapat menginspirasi siswa lain untuk terus berkarya.</p>',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '05 September 2026',
                'timestamp' => '2026-09-05',
                'title' => 'Festival Seni Budaya Nusantara 2026',
                'excerpt' => 'Ribuan penonton hadir memeriahkan panggung seni tahunan yang menampilkan pertunjukan budaya.',
                'color' => 'bg-rose-100 text-rose-700',
                'content' => '<p>Festival Seni Budaya Nusantara 2026 sukses diselenggarakan dengan meriah. Ribuan penonton hadir menyaksikan berbagai pertunjukan seni dan budaya dari siswa Qosim Al Hadi Semarang.</p><p>Acara ini menampilkan tarian tradisional, musik daerah, teater, dan pameran karya seni rupa. Selain menjadi ajang ekspresi kreativitas, festival juga memperkuat rasa cinta terhadap kekayaan budaya bangsa.</p><p>Terima kasih kepada seluruh pihak yang telah berpartisipasi. Sampai jumpa di festival berikutnya!</p>',
            ],
            [
                'category' => 'Informasi',
                'date' => '20 Juli 2026',
                'timestamp' => '2026-07-20',
                'title' => 'Jadwal Ujian Semester Genap Tahun Ajaran 2025/2026',
                'excerpt' => 'Informasi lengkap mengenai jadwal ujian semester genap dapat diunduh melalui portal siswa.',
                'color' => 'bg-emerald-100 text-emerald-700',
                'content' => '<p>Kepala sekolah mengumumkan jadwal ujian semester genap tahun ajaran 2025/2026. Seluruh siswa diharapkan mempersiapkan diri dan mematuhi protokol yang berlaku selama pelaksanaan ujian.</p><p>Jadwal lengkap dapat diunduh melalui portal siswa. Bila terdapat kendala teknis, siswa dapat menghubungi bagian akademik.</p><p>Semoga ujian berjalan lancar dan semua siswa memperoleh hasil terbaik.</p>',
            ],
            [
                'category' => 'Prestasi',
                'date' => '15 Juni 2026',
                'timestamp' => '2026-06-15',
                'title' => 'Juara Umum Olimpiade Matematika Tingkat Kota',
                'excerpt' => 'Siswa-siswi Qosim Al Hadi kembali menorehkan prestasi gemilang di bidang matematika.',
                'color' => 'bg-amber-100 text-amber-700',
                'content' => '<p>Qosim Al Hadi Semarang meraih gelar juara umum dalam Olimpiade Matematika Tingkat Kota. Prestasi ini diraih berkat kerja keras siswa dan pendampingan intensif dari tim matematika sekolah.</p><p>Kegiatan ini membuktikan bahwa pendekatan pembelajaran yang sistematis dan menyenangkan mampu menghasilkan prestasi akademik yang luar biasa.</p><p>Selamat kepada seluruh tim dan teruslah berinovasi.</p>',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '10 Mei 2026',
                'timestamp' => '2026-05-10',
                'title' => 'Study Tour ke Kawasan Industri dan Perguruan Tinggi',
                'excerpt' => 'Kegiatan study tour memberikan pengalaman belajar langsung di dunia industri dan kampus.',
                'color' => 'bg-rose-100 text-rose-700',
                'content' => '<p>Siswa kelas akhir mengikuti study tour ke berbagai kawasan industri dan perguruan tinggi. Kegiatan ini bertujuan memberikan wawasan mengenai dunia kerja dan pendidikan tinggi.</p><p>Siswa mendapat kesempatan untuk berinteraksi langsung dengan praktisi industri serta menanyakan hal-hal terkait jurusan dan karier masa depan.</p><p>Semoga pengalaman ini dapat menjadi bekal siswa dalam merencanakan masa depan yang gemilang.</p>',
            ],
            [
                'category' => 'Informasi',
                'date' => '15 April 2026',
                'timestamp' => '2026-04-15',
                'title' => 'Jadwal Pembagian Raport Semester Genap',
                'excerpt' => 'Informasi pembagian raport semester genap tahun ajaran 2025/2026 dapat diakses melalui portal siswa.',
                'color' => 'bg-emerald-100 text-emerald-700',
                'content' => '<p>Pembagian raport semester genap tahun ajaran 2025/2026 akan dilaksanakan sesuai jadwal yang telah ditentukan. Orang tua diharapkan hadir tepat waktu.</p><p>Detail jadwal dapat diakses melalui portal siswa. Bila ada pertanyaan, silakan menghubungi wali kelas masing-masing.</p><p>Terima kasih atas perhatian dan kerja samanya.</p>',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '08 Maret 2026',
                'timestamp' => '2026-03-08',
                'title' => 'Workshop Kepramukaian dan Kepemimpinan Siswa',
                'excerpt' => 'Kegiatan workshop membekali siswa dengan keterampilan kepramukaian dan kepemimpinan.',
                'color' => 'bg-rose-100 text-rose-700',
                'content' => '<p>Workshop kepramukaian dan kepemimpinan siswa telah sukses dilaksanakan. Kegiatan ini bertujuan membentuk karakter tangguh, mandiri, dan memiliki jiwa kepemimpinan.</p><p>Melalui berbagai simulasi dan permainan edukatif, siswa belajar bekerja sama, memecahkan masalah, dan memimpin tim.</p><p>Terima kasih kepada pembicara dan fasilitator yang telah berbagi ilmu. Semoga manfaatnya terus terasa.</p>',
            ],
        ])->sortByDesc('timestamp')->values();

        $posts = $posts->map(fn ($post) => [...$post, 'slug' => Str::slug($post['title'])])->values();
        $post = $posts->firstWhere('slug', $this->slug);

        return [
            'post' => $post,
            'latestPosts' => $posts->where('slug', '!=', $this->slug)->take(3)->values()->all(),
        ];
    }
};

?>

<div class="scroll-smooth">
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
                    <a href="{{ route('blog') }}" class="text-base font-medium text-slate-700 transition hover:text-primary-500">
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
                    <a href="{{ route('blog') }}" @click="open = false" class="block rounded-lg px-4 py-3.5 text-base font-medium text-slate-700 transition hover:bg-primary-50 hover:text-primary-600">
                        Berita
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <div class="flex-1 py-12 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-[220px_1fr_220px]">
                    {{-- Iklan kiri --}}
                    <aside class="hidden lg:block">
                        <div class="sticky top-28 flex h-[600px] w-full flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-white p-4 text-slate-400 shadow-sm">
                            <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l2.586-2.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span class="mt-2 text-sm font-medium">Space Iklan</span>
                            <span class="text-xs">160 x 600</span>
                        </div>
                    </aside>

                    <div class="min-w-0">
                        @if ($post)
                            <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-500">
                                <ol class="flex flex-wrap items-center gap-2">
                                    <li><a href="{{ route('home') }}" class="transition hover:text-primary-600">Beranda</a></li>
                                    <li aria-hidden="true" class="text-slate-300">/</li>
                                    <li><a href="{{ route('blog') }}" class="transition hover:text-primary-600">Berita</a></li>
                                    <li aria-hidden="true" class="text-slate-300">/</li>
                                    <li class="min-w-0 font-medium text-slate-700" aria-current="page">
                                        <span class="block truncate max-w-[140px] sm:max-w-xs">{{ Str::limit($post['title'], 50) }}</span>
                                    </li>
                                </ol>
                            </nav>

                            <div class="mb-8">
                                <span class="rounded-full px-2.5 py-1 text-xs font-semibold uppercase tracking-wide {{ $post['color'] }}">{{ $post['category'] }}</span>
                                <h1 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                                    {{ $post['title'] }}
                                </h1>
                                <p class="mt-3 text-slate-500">{{ $post['date'] }}</p>

                                @php
                                    $shareUrl = urlencode(url()->current());
                                    $shareTitle = urlencode($post['title']);
                                @endphp
                                <div class="mt-4 flex flex-wrap items-center gap-2">
                                    <span class="text-sm text-slate-500">Bagikan:</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="flex h-9 w-9 items-center justify-center rounded-full bg-[#1877F2] text-white transition hover:opacity-90">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.354c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="flex h-9 w-9 items-center justify-center rounded-full bg-[#1DA1F2] text-white transition hover:opacity-90">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-3.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.229-.616v.06a4.923 4.923 0 003.946 4.835 4.996 4.996 0 01-2.223.085 4.93 4.93 0 004.604 3.417 9.996 9.996 0 01-6.205 2.14c-.403 0-.797-.024-1.184-.07a14.118 14.118 0 007.628 2.245c9.15 0 14.15-7.584 14.15-14.15 0-.229-.005-.458-.014-.683A10.005 10.005 0 0024 4.305z"/></svg>
                                    </a>
                                    <a href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="flex h-9 w-9 items-center justify-center rounded-full bg-[#25D366] text-white transition hover:opacity-90">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.693-1.036-1.143-1.756-1.143-.163 0-.324.02-.48.058-.297.074-.583.22-.82.43l-.036.03c-.72.615-1.44 1.23-2.16 1.845l-.018.016c-.24.21-.48.42-.72.63-.24.21-.48.42-.72.63l-.018.016c-.72.615-1.44 1.23-2.16 1.845l-.036.03c-.24.21-.48.42-.72.63-.24.21-.48.42-.72.63l-.018.016c-.72.615-1.44 1.23-2.16 1.845l-.036.03c-.24.21-.48.42-.72.63-.24.21-.48.42-.72.63-.297.258-.57.54-.792.855-.222.315-.39.66-.498 1.026a2.98 2.98 0 00-.072.498c0 .324.054.642.162.948.108.306.27.588.486.84l.012.012c.27.312.612.54.984.672.222.078.456.12.696.12.45 0 .888-.12 1.278-.348l.03-.018c.72-.42 1.44-.84 2.16-1.26l.036-.024c.72-.42 1.44-.84 2.16-1.26l.018-.012c.72-.42 1.44-.84 2.16-1.26l.036-.024c.72-.42 1.44-.84 2.16-1.26l.018-.012c.72-.42 1.44-.84 2.16-1.26l.03-.018a4.45 4.45 0 001.584-1.584c.21-.36.36-.75.438-1.152.06-.318.06-.642.006-.96-.054-.324-.174-.636-.36-.924zM12 2C6.486 2 2 6.486 2 12c0 2.658.84 5.13 2.268 7.146L2 22l2.88-.882A9.963 9.963 0 0012 22c5.514 0 10-4.486 10-10S17.514 2 12 2z"/></svg>
                                    </a>
                                    <a href="https://t.me/share/url?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" rel="noopener noreferrer" aria-label="Telegram" class="flex h-9 w-9 items-center justify-center rounded-full bg-[#0088CC] text-white transition hover:opacity-90">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9.417 15.181l-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.932L23.197 2.21c.313-1.234-.456-1.716-1.283-1.71L1.843 9.48c-1.226.05-1.22 1.12-.168 1.41l5.513 1.701 12.794-4.045c.604-.193 1.148.135.935.491l-9.478 8.624z"/></svg>
                                    </a>
                                    <button x-data="{ copied: false }" @click="navigator.clipboard.writeText(window.location.href).then(() => { copied = true; setTimeout(() => copied = false, 2000) })" class="flex h-9 items-center gap-1.5 rounded-full bg-slate-200 px-3 text-xs font-semibold text-slate-700 transition hover:bg-slate-300" type="button">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 6h8a2 2 0 012 2v8a2 2 0 01-2 2h-8a2 2 0 01-2-2v-8a2 2 0 012-2z"/></svg>
                                        <span x-text="copied ? 'Tersalin' : 'Salin Link'">Salin Link</span>
                                    </button>
                                </div>
                            </div>

                            <div class="relative mb-10 h-72 w-full overflow-hidden rounded-3xl bg-slate-200 sm:h-96">
                                <div class="flex h-full w-full items-center justify-center text-slate-400">
                                    <svg class="h-20 w-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l2.586-2.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            </div>

                            <article class="rounded-2xl bg-white p-6 sm:p-10 shadow-sm">
                                <div class="prose prose-lg prose-slate max-w-none prose-p:leading-[1.9] prose-p:text-slate-700 prose-p:mb-6 prose-p:text-justify prose-img:rounded-2xl prose-img:shadow-md prose-figure:my-8 prose-figcaption:text-center prose-figcaption:text-sm prose-figcaption:text-slate-500">
                                    {!! $post['content'] !!}
                                </div>
                            </article>

                            <div class="mt-8 flex h-28 w-full flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-white p-4 text-slate-400 shadow-sm">
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l2.586-2.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span class="mt-1 text-sm font-medium">Space Iklan</span>
                                <span class="text-xs">728 x 90</span>
                            </div>
                        @else
                            <div class="rounded-2xl bg-white p-12 text-center shadow-sm">
                                <h1 class="text-2xl font-bold text-slate-900">Berita tidak ditemukan</h1>
                                <p class="mt-3 text-slate-600">Berita yang Anda cari tidak tersedia.</p>
                                <a href="{{ route('blog') }}" class="mt-6 inline-flex items-center rounded-full bg-primary-600 px-6 py-3 font-semibold text-white transition hover:bg-primary-700">
                                    Kembali ke Berita
                                </a>
                            </div>
                        @endif
                    </div>

                    {{-- Iklan kanan --}}
                    <aside class="hidden lg:block">
                        <div class="sticky top-28 flex h-[600px] w-full flex-col items-center justify-center rounded-2xl border-2 border-dashed border-slate-300 bg-white p-4 text-slate-400 shadow-sm">
                            <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l2.586-2.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span class="mt-2 text-sm font-medium">Space Iklan</span>
                            <span class="text-xs">160 x 600</span>
                        </div>
                    </aside>
                </div>
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
