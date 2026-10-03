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
            'features' => [
                ['title' => 'Pendidikan Islam Terintegrasi', 'desc' => 'Al-Qur\'an, aqidah, dan akhlak menjadi bagian tak terpisah dari aktivitas harian siswa.', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['title' => 'Metode Pembelajaran Aktif', 'desc' => 'Belajar melalui bermain, eksplorasi, dan proyek kecil untuk membangun rasa ingin tahu.', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a4 4 0 117.072 0l-.548.547A3.495 3.495 0 0112 19.5a3.495 3.495 0 01-3.622-3.168l-.548-.547z'],
                ['title' => 'Guru yang Peduli', 'desc' => 'Guru MI berkompeten dan dekat dengan siswa, membantu mengembangkan potensi serta karakter.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2a3 3 0 00-5.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2a3 3 0 015.356-1.857M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                ['title' => 'Lingkungan Aman & Nyaman', 'desc' => 'Kelas modern, perpustakaan ceria, dan area bermain edukatif mendukung pembelajaran yang menyenangkan.', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10m-2 2l2-2'],
            ],
            'curriculum' => [
                ['title' => 'Pendidikan Agama Islam', 'desc' => 'Aqidah, akhlak, fiqih, dan tahsin Al-Qur\'an untuk membentuk fondasi keislaman yang kuat.'],
                ['title' => 'Literasi & Numerasi', 'desc' => 'Matematika, bahasa Indonesia, dan sains dasar melalui pendekatan eksploratif dan bermain.'],
                ['title' => 'Bahasa Inggris & Arab', 'desc' => 'Pembelajaran bahasa sejak dini untuk membiasakan komunikasi multibahasa.'],
                ['title' => 'Seni, Olahraga & Keterampilan', 'desc' => 'Mengembangkan kreativitas, kesehatan fisik, dan keterampilan hidup secara seimbang.'],
            ],
            'gallery' => ['card4.png', 'card5.png', 'card6.png', 'card7.png'],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <section class="relative overflow-hidden bg-slate-900 py-24 lg:py-32">
            <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950/90 via-slate-900/80 to-primary-900/60"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-4 text-sm text-slate-300">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('home') }}" class="transition hover:text-white">Beranda</a></li>
                        <li aria-hidden="true" class="text-slate-500">/</li>
                        <li class="font-medium text-white">Madrasah Ibtidaiyah</li>
                    </ol>
                </nav>
                <div class="max-w-2xl">
                    <span class="inline-block rounded-full bg-primary-500/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-300 backdrop-blur">Jenjang Pendidikan</span>
                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Madrasah Ibtidaiyah</h1>
                    <p class="mt-6 text-lg leading-relaxed text-slate-200">Membangun fondasi ilmu, iman, dan karakter sejak usia dini melalui pembelajaran yang menyenangkan dan bermakna.</p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#kurikulum" class="rounded-full bg-primary-600 px-8 py-3.5 font-semibold text-white shadow-lg shadow-primary-600/30 transition hover:bg-primary-500">Lihat Kurikulum</a>
                        <a href="{{ route('home') }}" class="rounded-full border border-white/30 bg-white/5 px-8 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="relative -mt-16 mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-px overflow-hidden rounded-3xl bg-slate-100 shadow-xl sm:grid-cols-4">
                @foreach ($stats as $stat)
                    <div class="bg-white p-6 text-center">
                        <p class="text-3xl font-extrabold text-primary-600">{{ $stat['value'] }}</p>
                        <p class="mt-1 text-sm text-slate-600">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <section class="py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 h-24 w-24 rounded-full bg-primary-100"></div>
                        <img src="{{ asset('images/mi.png') }}" alt="Kegiatan MI" class="relative z-10 rounded-3xl shadow-lg">
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Membentuk Generasi Qur'ani sejak Dini</h2>
                        <p class="mt-4 leading-relaxed text-slate-600">Madrasah Ibtidaiyah Qosim Al Hadi menggabungkan kurikulum nasional dan pendidikan Islam dalam suasana belajar yang penuh kasih sayang. Setiap anak dibimbing untuk mengenali potensinya, membiasakan ibadah, dan membangun karakter positif.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Kami percaya bahwa masa kanak-kanak adalah momen penting untuk menanamkan kecintaan terhadap ilmu, Al-Qur'an, dan nilai-nilai luhur yang akan menemani perjalanan hidup mereka.</p>
                        <a href="#fasilitas" class="mt-6 inline-flex items-center gap-2 font-semibold text-primary-600 hover:text-primary-700">
                            Jelajahi Fasilitas
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Kenapa Memilih MI Qosim Al Hadi?</h2>
                    <p class="mt-4 text-slate-600">Kami hadir untuk memberikan pengalaman belajar terbaik bagi anak Anda.</p>
                </div>
                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($features as $feature)
                        <div class="rounded-2xl bg-slate-50 p-6 ring-1 ring-slate-100 transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-100 text-primary-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $feature['icon'] }}"/></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-slate-900">{{ $feature['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="kurikulum" class="py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Kurikulum</h2>
                    <p class="mt-4 text-slate-600">Integrasi ilmu umum dan keislaman untuk masa depan yang cerah.</p>
                </div>
                <div class="mt-12 grid gap-6 md:grid-cols-2">
                    @foreach ($curriculum as $item)
                        <div class="flex gap-5 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-100">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-600 text-white">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $item['title'] }}</h3>
                                <p class="mt-1 text-sm leading-relaxed text-slate-600">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="fasilitas" class="bg-white py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Aktivitas & Fasilitas</h2>
                    <p class="mt-4 text-slate-600">Lingkungan yang nyaman dan aman untuk menunjang proses belajar anak.</p>
                </div>
                <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($gallery as $image)
                        <div class="aspect-[4/3] overflow-hidden rounded-2xl">
                            <img src="{{ asset('images/' . $image) }}" alt="Aktivitas MI" class="h-full w-full object-cover transition hover:scale-105">
                        </div>
                    @endforeach
                </div>
                <div class="mt-8 grid grid-cols-2 gap-4 text-center sm:grid-cols-4">
                    <div class="rounded-2xl bg-slate-50 py-6 ring-1 ring-slate-100">
                        <p class="text-sm font-semibold text-slate-700">Ruang Kelas Modern</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 py-6 ring-1 ring-slate-100">
                        <p class="text-sm font-semibold text-slate-700">Perpustakaan Ceria</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 py-6 ring-1 ring-slate-100">
                        <p class="text-sm font-semibold text-slate-700">Area Bermain</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 py-6 ring-1 ring-slate-100">
                        <p class="text-sm font-semibold text-slate-700">Laboratorium Dasar</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-primary-600 py-20">
            <div class="absolute -top-24 -right-24 h-64 w-64 rounded-full bg-primary-500 opacity-50"></div>
            <div class="absolute -bottom-24 -left-24 h-64 w-64 rounded-full bg-primary-700 opacity-50"></div>
            <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white sm:text-4xl">Daftarkan Putra-Putri Anda di MI Qosim Al Hadi</h2>
                <p class="mt-4 text-primary-100">Pendaftaran tahun ajaran 2027/2028 telah dibuka. Wujudkan masa depan cerah bersama kami.</p>
                <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-white px-8 py-4 font-semibold text-primary-600 shadow-lg transition hover:bg-slate-100">
                    SPMB 2027
                </a>
            </div>
        </section>
    </main>
</div>
