<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Madrasah Ibtidaiyah (MI) - Qosim Al Hadi Semarang')] class extends Component
{
    public function with(): array
    {
        return [
            'stats' => [
                ['label' => 'Siswa', 'value' => '180'],
                ['label' => 'Guru & Staf', 'value' => '24'],
                ['label' => 'Rombel', 'value' => '12'],
                ['label' => 'Tahun Berdiri', 'value' => '2003'],
            ],
            'news' => [
                ['date' => '12 September 2026', 'category' => 'Prestasi', 'title' => 'Siswa MI Raih Juara Lomba Tahfidz Tingkat Kota', 'excerpt' => 'Empat siswa berhasil meraih juara dalam lomba tahfidz Al-Qur\'an tingkat kota.'],
                ['date' => '05 September 2026', 'category' => 'Kegiatan', 'title' => 'Kelas 6 Mengikuti Study Tour ke Museum', 'excerpt' => 'Kegiatan study tour memberikan pengalaman belajar langsung tentang sejarah dan budaya.'],
                ['date' => '28 Agustus 2026', 'category' => 'Pengumuman', 'title' => 'Pendaftaran Siswa Baru MI Dibuka', 'excerpt' => 'Gelombang pertama pendaftaran tahun ajaran 2027/2028 resmi dibuka.'],
            ],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 text-slate-800">
        <section class="relative flex min-h-svh items-center overflow-hidden bg-slate-900">
            <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover">
            <div class="absolute inset-0 bg-slate-950/70"></div>
            <div class="relative mx-auto w-full max-w-7xl px-6 pt-36 pb-28">
                <div class="max-w-3xl">
                    <h1 class="mt-6 text-balance text-4xl font-extrabold leading-[1.1] tracking-tight text-white sm:text-5xl lg:text-6xl">Madrasah Ibtidaiyah</h1>
                    <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-200">Membentuk Generasi Qur'ani sejak Usia Dini melalui pendidikan dasar Islam yang mengintegrasikan ilmu umum dan keislaman.</p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="#spmb" class="rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-8 py-4 text-sm font-semibold text-white shadow-xl shadow-primary-500/30 transition hover:scale-105">Daftar Siswa Baru</a>
                        <a href="#program" class="rounded-full border border-white/20 bg-white/5 px-8 py-4 text-sm font-semibold text-white backdrop-blur transition hover:bg-white/10">Jelajahi Program</a>
                    </div>
                    <div class="mt-14 grid grid-cols-2 gap-6 sm:grid-cols-4">
                        @foreach ($stats as $stat)
                            <div>
                                <p class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $stat['value'] }}</p>
                                <p class="mt-1 text-xs font-medium uppercase tracking-wider text-slate-400">{{ $stat['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="program" class="relative bg-white py-24">
            <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('{{ asset('images/batik.png') }}')"></div>
            <div class="relative z-10 mx-auto max-w-7xl px-6">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">Program Madrasah Ibtidaiyah</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 lg:text-lg">Jenjang pembelajaran yang dirancang untuk membangun fondasi kuat siswa sejak usia dini.</p>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-12">
                    <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-6">
                        <img src="{{ asset('images/card1.png') }}" alt="Kelas Awal" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                        <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                            <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur">Kelas 1 - 2</span>
                            <h3 class="mt-3 text-2xl font-bold text-white">Fondasi Awal</h3>
                            <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Menanamkan dasar literasi, numerasi, dan pembiasaan ibadah melalui bermain dan cerita.</p>
                            <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                        </div>
                    </div>
                    <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-6">
                        <img src="{{ asset('images/card2.png') }}" alt="Kelas Menengah" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                        <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                            <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur">Kelas 3 - 4</span>
                            <h3 class="mt-3 text-2xl font-bold text-white">Pengembangan Dasar</h3>
                            <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Mengembangkan kemampuan membaca, menulis, berhitung, dan pemahaman keislaman.</p>
                            <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                        </div>
                    </div>
                    <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-7">
                        <img src="{{ asset('images/card3.png') }}" alt="Kelas Atas" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                        <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                            <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur">Kelas 5 - 6</span>
                            <h3 class="mt-3 text-2xl font-bold text-white">Persiapan Berikutnya</h3>
                            <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Mematangkan kompetensi akademik dan spiritual untuk melanjutkan ke jenjang MTs.</p>
                            <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                        </div>
                    </div>
                    <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100 md:col-span-5">
                        <img src="{{ asset('images/card4.png') }}" alt="Tahfidz Qur'an" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute top-[30%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                        <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                            <span class="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur">Program Unggulan</span>
                            <h3 class="mt-3 text-2xl font-bold text-white">Tahfidz Qur'an</h3>
                            <p class="max-w-md overflow-hidden text-sm leading-relaxed text-slate-100 transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-40 opacity-100' : 'mt-0 max-h-0 opacity-0'">Program hafalan surat dan doa harian untuk memperkuat spiritual siswa.</p>
                            <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="kurikulum" class="bg-slate-50 py-24 md:pb-48">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">Kurikulum & Kegiatan</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 lg:text-lg">Mengintegrasikan pendidikan umum dan keislaman untuk membentuk generasi yang berilmu dan berakhlak.</p>
                </div>
                <div class="mt-16 flex snap-x snap-mandatory gap-4 overflow-x-auto sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:overflow-visible">
                    @php
                        $features = [
                            'Tahsin Al-Qur\'an', 'Aqidah & Akhlak', 'Matematika', 'Bahasa Indonesia',
                            'Bahasa Inggris', 'Sains Dasar', 'Seni & Musik', 'Olahraga'
                        ];
                    @endphp
                    @foreach ($features as $index => $feature)
                        <div class="aspect-[10/11] w-[80vw] shrink-0 snap-start rounded-2xl bg-cover bg-center shadow-sm ring-1 ring-slate-100 sm:w-auto" style="background-image: url('{{ asset('images/card' . ($index + 1) . '.png') }}')">
                            <div class="flex h-full w-full items-end bg-gradient-to-t from-black/80 to-transparent p-6">
                                <h3 class="text-lg font-bold text-white">{{ $feature }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="universitas" class="relative bg-white py-24">
            <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('{{ asset('images/batik2.png') }}')"></div>
            <div class="relative z-10 mx-auto max-w-7xl px-6">
                <div class="grid items-start gap-12 lg:grid-cols-2">
                    <div>
                        <h2 class="text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">Lanjutkan Perjalanan</h2>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed text-slate-600 lg:text-lg">Setelah lulus dari MI, siswa dapat melanjutkan ke jenjang MTs Qosim Al Hadi atau mengikuti jejak alumni yang telah berhasil di berbagai bidang.</p>
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
                        <img src="{{ asset('images/card1.png') }}" alt="Lanjut ke MTs" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute top-[60%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                        <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                            <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Lanjut ke MTs</h3>
                            <span class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</span>
                        </div>
                    </div>
                    <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100">
                        <img src="{{ asset('images/card2.png') }}" alt="Lacak Alumni" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute top-[60%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                        <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                            <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Lacak Para Alumni</h3>
                            <a href="{{ route('alumni') }}" @click.stop class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <div x-data="{ open: false, isTouch: 'ontouchstart' in window }" @mouseenter="if (!isTouch) open = true" @mouseleave="if (!isTouch) open = false" @click="if (isTouch) open = !open" class="group relative col-span-1 h-100 overflow-hidden rounded-2xl bg-slate-100 shadow-sm ring-1 ring-slate-100">
                        <img src="{{ asset('images/card3.png') }}" alt="Tenaga Pendidik" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute top-[60%] bottom-0 left-0 z-0 w-full bg-primary-500/95 transition-transform duration-500 ease-out" :class="open ? 'translate-x-0' : '-translate-x-full'"></div>
                        <div class="relative z-10 flex h-full flex-col items-start justify-end p-6">
                            <h3 class="text-2xl font-bold text-white transition-colors duration-500 group-hover:text-white">Tenaga Pendidik</h3>
                            <a href="{{ route('teachers') }}" @click.stop class="mt-0 overflow-hidden text-sm font-semibold text-white transition-all duration-500 ease-out" :class="open ? 'mt-2 max-h-10 opacity-100' : 'mt-0 max-h-0 opacity-0'">Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="berita" class="bg-slate-50 py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="flex flex-wrap items-end justify-between gap-6">
                    <div>
                        <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Berita MI</span>
                        <h2 class="mt-4 text-balance text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">Kabar dari MI</h2>
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
                                <h3 class="mt-4 block text-lg font-semibold text-slate-900 transition group-hover:text-primary-600">{{ $item['title'] }}</h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $item['excerpt'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="spmb" class="bg-slate-900 py-20">
            <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white sm:text-4xl">Pendaftaran Siswa Baru MI</h2>
                <p class="mt-4 text-slate-300">Tahun ajaran 2026/2027 telah dibuka. Daftarkan putra-putri Anda sekarang.</p>
                <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-white px-10 py-4 font-semibold text-slate-900 shadow-lg transition hover:bg-slate-100">Daftar Sekarang</a>
            </div>
        </section>
    </main>
</div>
