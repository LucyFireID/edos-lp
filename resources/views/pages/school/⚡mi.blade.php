<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Madrasah Ibtidaiyah - Qosim Al Hadi Semarang')] class extends Component
{
    public function with(): array
    {
        return [
            'missions' => [
                'Menyelenggarakan pendidikan dasar Islam berkualitas dengan mengintegrasikan ilmu umum dan keislaman secara seimbang.',
                'Membiasakan siswa membaca, memahami, dan mengamalkan Al-Qur\'an melalui program tahsin, tahfidz, dan doa harian.',
                'Menumbuhkan akhlak mulia, kebiasaan ibadah, dan karakter positif sejak usia dini.',
                'Mengembangkan kemampuan literasi, numerasi, serta keterampilan hidup siswa melalui pembelajaran aktif dan bermakna.',
                'Membekali siswa dengan karakter mandiri, kreatif, percaya diri, dan peduli terhadap sesama.',
                'Membangun kolaborasi aktif antara sekolah, keluarga, dan masyarakat dalam mendukung tumbuh kembang anak.',
            ],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-white text-slate-800">
        <section class="relative flex min-h-svh items-center bg-slate-900">
            <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover opacity-25">
            <div class="absolute inset-0 bg-slate-950/70 lg:hidden"></div>
            <div class="absolute inset-0 hidden bg-gradient-to-r from-slate-950/90 via-slate-950/60 to-slate-950/10 lg:block"></div>
            <div class="relative mx-auto w-full max-w-7xl px-6 py-20 lg:py-28">
                <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-300">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('home') }}" class="transition hover:text-white">Beranda</a></li>
                        <li aria-hidden="true" class="text-slate-500">/</li>
                        <li class="font-medium text-white">Madrasah Ibtidaiyah</li>
                    </ol>
                </nav>
                <div class="max-w-3xl">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Madrasah Ibtidaiyah</h1>
                    <p class="mt-4 text-xl font-medium text-white">Membentuk Generasi Qur'ani sejak Usia Dini</p>
                    <p class="mt-6 max-w-2xl leading-relaxed text-slate-200">MI Qosim Al Hadi menyelenggarakan pendidikan dasar Islam berkualitas yang mengintegrasikan kurikulum nasional dan pendidikan keislaman. Kami membimbing setiap siswa untuk tumbuh menjadi pribadi yang cerdas, berakhlak mulia, dan dekat dengan Al-Qur'an dalam suasana belajar yang menyenangkan serta aman.</p>
                    <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-7 py-3.5 text-base font-semibold text-white transition hover:opacity-90">SPMB 2027</a>
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                <div class="overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-slate-100">
                    <div class="grid lg:grid-cols-5">
                        <div class="flex items-center justify-center bg-slate-100 p-10 lg:col-span-2 lg:p-12">
                            <div class="text-center">
                                <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-white text-slate-300 shadow-sm">
                                    <svg class="h-14 w-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                </div>
                                <p class="mt-6 text-xl font-bold text-slate-900">Ahmad Fauzi, S.Pd.</p>
                                <p class="text-sm text-slate-500">Kepala Madrasah Ibtidaiyah</p>
                            </div>
                        </div>
                        <div class="p-10 lg:col-span-3 lg:p-12">
                            <h2 class="text-3xl font-bold tracking-tight text-slate-900">Sambutan Kepala Madrasah</h2>
                            <p class="mt-6 leading-relaxed text-slate-600">Assalamu'alaikum warahmatullahi wabarakatuh,</p>
                            <p class="mt-4 leading-relaxed text-slate-600">Puji syukur kami panjatkan kepada Allah Subhanahu wa Ta'ala atas segala karunia-Nya. Selamat datang di Madrasah Ibtidaiyah Qosim Al Hadi, tempat di mana setiap anak dibimbing untuk mengenal Al-Qur'an, memahami ilmu pengetahuan, dan menumbuhkan akhlak mulia sejak usia dini.</p>
                            <p class="mt-4 leading-relaxed text-slate-600">Kami percaya bahwa pendidikan dasar adalah fondasi terpenting dalam membentuk karakter dan potensi seorang anak. Oleh karena itu, kami berkomitmen untuk menyelenggarakan pembelajaran yang tidak hanya berkualitas secara akademik, tetapi juga menguatkan spiritual, sosial, dan emosional setiap siswa.</p>
                            <p class="mt-4 leading-relaxed text-slate-600">Dengan dukungan guru yang berdedikasi, kurikulum yang terintegrasi, serta kolaborasi aktif dengan orang tua, kami yakin dapat melahirkan generasi Qur'ani yang siap menghadapi tantangan masa depan.</p>
                            <p class="mt-6 font-bold text-slate-900">Wassalamu'alaikum warahmatullahi wabarakatuh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-50 py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Sekilas Madrasah Ibtidaiyah</h2>
                        <p class="mt-6 leading-relaxed text-slate-600">Madrasah Ibtidaiyah Qosim Al Hadi merupakan jenjang pendidikan dasar yang menyelenggarakan program belajar mengajar berbasis Islam. Kami menggabungkan kurikulum nasional dengan pendidikan Al-Qur'an, aqidah, dan akhlak sehingga siswa tidak hanya unggul dalam akademik, tetapi juga kuat dalam spiritual.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Setiap harinya, siswa diajak untuk aktif belajar melalui metode yang menyenangkan, bermakna, dan sesuai dengan tahap perkembangan anak. Didukung oleh lingkungan yang aman, guru yang berdedikasi, serta fasilitas pembelajaran yang memadai, kami berupaya membentuk karakter mandiri, kreatif, dan peduli sesama sejak dini.</p>
                        <div class="mt-8 grid grid-cols-3 gap-4">
                            <div class="rounded-2xl border border-slate-100 bg-white p-4 text-center shadow-sm">
                                <p class="text-2xl font-extrabold text-primary-600">2003</p>
                                <p class="text-xs text-slate-500">Berdiri</p>
                            </div>
                            <div class="rounded-2xl border border-slate-100 bg-white p-4 text-center shadow-sm">
                                <p class="text-2xl font-extrabold text-primary-600">A</p>
                                <p class="text-xs text-slate-500">Akreditasi</p>
                            </div>
                            <div class="rounded-2xl border border-slate-100 bg-white p-4 text-center shadow-sm">
                                <p class="text-2xl font-extrabold text-primary-600">180+</p>
                                <p class="text-xs text-slate-500">Siswa</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('images/mi.png') }}" alt="Sekilas Madrasah Ibtidaiyah" class="rounded-3xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div class="rounded-3xl border-t-4 border-primary-500 bg-white p-10 shadow-sm lg:p-12">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h2 class="mt-6 text-3xl font-bold tracking-tight text-slate-900">Visi</h2>
                        <p class="mt-4 leading-relaxed text-slate-600">Menjadikan Madrasah Ibtidaiyah Qosim Al Hadi sebagai lembaga pendidikan dasar Islam unggul yang melahirkan generasi Qur'ani yang cerdas, berakhlak mulia, mandiri, dan berdaya saing tinggi.</p>
                    </div>
                    <div class="rounded-3xl border-t-4 border-primary-500 bg-white p-10 shadow-sm lg:p-12">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h2 class="mt-6 text-3xl font-bold tracking-tight text-slate-900">Misi</h2>
                        <ul class="mt-4 list-disc space-y-2 pl-5 leading-relaxed text-slate-600">
                            @foreach ($missions as $mission)
                                <li>{{ $mission }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="spmb" class="bg-slate-900 py-20">
            <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white sm:text-4xl">Pendaftaran Siswa Baru Madrasah Ibtidaiyah</h2>
                <p class="mt-4 text-slate-300">Tahun ajaran 2026/2027 telah dibuka. Daftarkan putra-putri Anda untuk memulai perjalanan membentuk karakter Qur'ani sejak dini.</p>
                <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-primary-600 px-10 py-4 font-semibold text-white shadow-lg shadow-primary-600/30 transition hover:bg-primary-500">Daftar Sekarang</a>
                <p class="mt-4 text-sm text-slate-400">Kuota terbatas — segera lakukan pendaftaran.</p>
            </div>
        </section>
    </main>
</div>
