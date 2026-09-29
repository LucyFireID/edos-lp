<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Kebijakan Privasi - Qosim Al Hadi Semarang')] class extends Component
{
    //
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
            </ul>
        </div>
    </header>

    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <div class="flex-1 py-12 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-6 flex justify-center text-sm text-slate-500">
                    <ol class="flex items-center gap-2">
                        <li>
                            <a href="{{ route('home') }}" class="transition hover:text-primary-600">Beranda</a>
                        </li>
                        <li aria-hidden="true" class="text-slate-300">/</li>
                        <li class="font-medium text-slate-700" aria-current="page">Kebijakan Privasi</li>
                    </ol>
                </nav>

                <div class="mb-10 text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Kebijakan Privasi
                    </h1>
                    <p class="mt-3 text-slate-600">Terakhir diperbarui: 29 September 2026</p>
                </div>

                <div class="space-y-8 text-slate-700">
                    <section>
                        <h2 class="text-xl font-bold text-slate-900">1. Pendahuluan</h2>
                        <p class="mt-2 leading-relaxed">
                            Qosim Al Hadi Semarang menghargai privasi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi yang Anda berikan saat menggunakan situs web kami.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">2. Informasi yang Kami Kumpulkan</h2>
                        <p class="mt-2 leading-relaxed">
                            Kami dapat mengumpulkan informasi berupa nama, alamat email, nomor telepon, dan pesan yang Anda kirimkan melalui formulir kontak. Kami tidak mengumpulkan informasi sensitif seperti nomor kartu kredit atau data kesehatan melalui situs ini.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">3. Penggunaan Informasi</h2>
                        <p class="mt-2 leading-relaxed">
                            Informasi yang Anda berikan digunakan untuk merespons pertanyaan, memproses pendaftaran, memberikan informasi sekolah, dan meningkatkan layanan kami. Kami tidak menjual, menyewakan, atau membagikan data pribadi Anda kepada pihak ketiga untuk tujuan komersial.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">4. Perlindungan Data</h2>
                        <p class="mt-2 leading-relaxed">
                            Kami menerapkan langkah-langkah keamanan yang wajar untuk melindungi data Anda dari akses, penggunaan, atau pengungkapan yang tidak sah. Meskipun demikian, tidak ada sistem online yang sepenuhnya aman.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">5. Cookies</h2>
                        <p class="mt-2 leading-relaxed">
                            Situs ini dapat menggunakan cookies untuk meningkatkan pengalaman pengguna, seperti menyimpan preferensi bahasa atau analitik kunjungan. Anda dapat menonaktifkan cookies melalui pengaturan browser, namun beberapa fitur mungkin tidak berfungsi optimal.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">6. Hak Anda</h2>
                        <p class="mt-2 leading-relaxed">
                            Anda berhak meminta akses, perbaikan, atau penghapusan data pribadi Anda yang kami miliki. Silakan hubungi kami melalui informasi kontak yang tersedia di situs ini.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">7. Perubahan Kebijakan</h2>
                        <p class="mt-2 leading-relaxed">
                            Kebijakan Privasi ini dapat diperbarui sewaktu-waktu. Perubahan akan diumumkan di halaman ini dan berlaku sejak dipublikasikan.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">8. Kontak</h2>
                        <p class="mt-2 leading-relaxed">
                            Jika Anda memiliki pertanyaan tentang Kebijakan Privasi ini, silakan hubungi kami melalui email info@qosimalhadi.sch.id atau telepon (021) 555-0123.
                        </p>
                    </section>
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
                            @foreach (['home' => 'Beranda', 'nurture' => 'Program', 'qurani' => 'Fasilitas', 'universities' => 'Universitas', 'news' => 'Berita'] as $id => $label)
                                <li><a href="{{ route('home') }}#{{ $id }}" class="transition hover:text-primary-400">{{ $label }}</a></li>
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
