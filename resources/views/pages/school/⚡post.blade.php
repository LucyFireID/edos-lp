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
                'date' => '28 Agu 2026',
                'timestamp' => '2026-08-28',
                'title' => 'Pendaftaran Penerimaan Siswa Baru Dibuka',
                'excerpt' => 'Gelombang pertama pendaftaran tahun ajaran 2027/2028 resmi dibuka secara daring. Segera daftarkan putra-putri Anda.',
                'color' => 'bg-blue-100 text-blue-700',
                'content' => '<p>Pendaftaran Penerimaan Siswa Baru Qosim Al Hadi Semarang untuk tahun ajaran 2027/2028 telah resmi dibuka. Kami membuka kesempatan bagi para siswa berprestasi untuk bergabung dan menempuh pendidikan berkualitas bersama kami.</p><p>Proses pendaftaran dapat dilakukan secara daring melalui portal resmi sekolah. Orang tua dapat mengisi formulir, mengunggah dokumen yang diperlukan, dan mengikuti jadwal seleksi yang telah ditentukan.</p><p>Jangan lewatkan kesempatan emas ini. Kuota terbatas, segera daftarkan putra-putri Anda dan jadilah bagian dari keluarga besar Qosim Al Hadi Semarang.</p>',
            ],
            [
                'category' => 'Prestasi',
                'date' => '12 Sep 2026',
                'timestamp' => '2026-09-12',
                'title' => 'Tim Olimpiade Sains Raih Medali Emas Nasional',
                'excerpt' => 'Tiga siswa berhasil membawa pulang medali emas pada ajang OSN tingkat nasional tahun ini.',
                'color' => 'bg-amber-100 text-amber-700',
                'content' => '<p>Prestasi gemilang kembali diraih oleh siswa-siswi Qosim Al Hadi Semarang dalam ajang Olimpiade Sains Nasional. Tiga siswa berhasil meraih medali emas setelah melewati berbagai tahapan seleksi yang ketat.</p><p>Kemenangan ini menjadi bukti nyata komitmen sekolah dalam mengembangkan potensi akademik siswa. Dengan bimbingan guru dan dukungan orang tua, para siswa mampu bersaing di tingkat nasional.</p><p>Kami mengucapkan selamat kepada para peraih medali dan berharap prestasi ini dapat menginspirasi siswa lain untuk terus berkarya.</p>',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '05 Sep 2026',
                'timestamp' => '2026-09-05',
                'title' => 'Festival Seni Budaya Nusantara 2026',
                'excerpt' => 'Ribuan penonton hadir memeriahkan panggung seni tahunan yang menampilkan pertunjukan budaya.',
                'color' => 'bg-rose-100 text-rose-700',
                'content' => '<p>Festival Seni Budaya Nusantara 2026 sukses diselenggarakan dengan meriah. Ribuan penonton hadir menyaksikan berbagai pertunjukan seni dan budaya dari siswa Qosim Al Hadi Semarang.</p><p>Acara ini menampilkan tarian tradisional, musik daerah, teater, dan pameran karya seni rupa. Selain menjadi ajang ekspresi kreativitas, festival juga memperkuat rasa cinta terhadap kekayaan budaya bangsa.</p><p>Terima kasih kepada seluruh pihak yang telah berpartisipasi. Sampai jumpa di festival berikutnya!</p>',
            ],
            [
                'category' => 'Informasi',
                'date' => '20 Jul 2026',
                'timestamp' => '2026-07-20',
                'title' => 'Jadwal Ujian Semester Genap Tahun Ajaran 2025/2026',
                'excerpt' => 'Informasi lengkap mengenai jadwal ujian semester genap dapat diunduh melalui portal siswa.',
                'color' => 'bg-emerald-100 text-emerald-700',
                'content' => '<p>Kepala sekolah mengumumkan jadwal ujian semester genap tahun ajaran 2025/2026. Seluruh siswa diharapkan mempersiapkan diri dan mematuhi protokol yang berlaku selama pelaksanaan ujian.</p><p>Jadwal lengkap dapat diunduh melalui portal siswa. Bila terdapat kendala teknis, siswa dapat menghubungi bagian akademik.</p><p>Semoga ujian berjalan lancar dan semua siswa memperoleh hasil terbaik.</p>',
            ],
            [
                'category' => 'Prestasi',
                'date' => '15 Jun 2026',
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
                'date' => '15 Apr 2026',
                'timestamp' => '2026-04-15',
                'title' => 'Jadwal Pembagian Raport Semester Genap',
                'excerpt' => 'Informasi pembagian raport semester genap tahun ajaran 2025/2026 dapat diakses melalui portal siswa.',
                'color' => 'bg-emerald-100 text-emerald-700',
                'content' => '<p>Pembagian raport semester genap tahun ajaran 2025/2026 akan dilaksanakan sesuai jadwal yang telah ditentukan. Orang tua diharapkan hadir tepat waktu.</p><p>Detail jadwal dapat diakses melalui portal siswa. Bila ada pertanyaan, silakan menghubungi wali kelas masing-masing.</p><p>Terima kasih atas perhatian dan kerja samanya.</p>',
            ],
            [
                'category' => 'Kegiatan',
                'date' => '08 Mar 2026',
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
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                @if ($post)
                    <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-500">
                        <ol class="flex items-center gap-2">
                            <li><a href="{{ route('home') }}" class="transition hover:text-primary-600">Beranda</a></li>
                            <li aria-hidden="true" class="text-slate-300">/</li>
                            <li><a href="{{ route('blog') }}" class="transition hover:text-primary-600">Berita</a></li>
                            <li aria-hidden="true" class="text-slate-300">/</li>
                            <li class="font-medium text-slate-700" aria-current="page">{{ Str::limit($post['title'], 40) }}</li>
                        </ol>
                    </nav>

                    <div class="mb-8">
                        <span class="rounded-full px-2.5 py-1 text-xs font-semibold uppercase tracking-wide {{ $post['color'] }}">{{ $post['category'] }}</span>
                        <h1 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                            {{ $post['title'] }}
                        </h1>
                        <p class="mt-3 text-slate-500">{{ $post['date'] }}</p>
                    </div>

                    <div class="relative mb-10 h-72 w-full overflow-hidden rounded-3xl bg-slate-200 sm:h-96">
                        <div class="flex h-full w-full items-center justify-center text-slate-400">
                            <svg class="h-20 w-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l2.586-2.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                    </div>

                    <article class="prose prose-lg prose-slate max-w-none">
                        {!! $post['content'] !!}
                    </article>
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
