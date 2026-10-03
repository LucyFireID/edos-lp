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
            ],
            'missions' => [
                'Menyelenggarakan pendidikan dasar berkualitas berbasis Islam.',
                'Menumbuhkan akhlak mulia dan kebiasaan ibadah sejak dini.',
                'Mengembangkan literasi, numerasi, dan keterampilan hidup siswa.',
                'Membentuk siswa yang mandiri, kreatif, dan peduli sesama.',
                'Melibatkan orang tua dan masyarakat dalam proses pendidikan.',
            ],
            'academic' => [
                ['title' => 'Kurikulum', 'desc' => 'Kurikulum Nasional dan Keislaman (Tahsin, Aqidah, Akhlak).', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['title' => 'Jam Sekolah', 'desc' => 'Senin - Jumat, 07.00 - 14.00 WIB.', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['title' => 'Tahun Ajaran', 'desc' => 'Tahun ajaran baru dimulai Juli 2026.', 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
                ['title' => 'Kalender Akademik', 'desc' => 'Masa orientasi, UTS, UAS, dan libur semester tersusun rapi.', 'icon' => 'M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5'],
            ],
            'requirements' => ['Fotokopi akta kelahiran', 'Fotokopi Kartu Keluarga', 'Fotokopi KTP orang tua', 'Pas foto 3x4 (4 lembar)', 'Ijazah TK/RA (opsional)'],
            'flow' => ['Daftar online atau datang ke sekolah', 'Lengkapi dokumen persyaratan', 'Tes observasi & wawancara singkat', 'Pembayaran biaya pendidikan', 'Konfirmasi dan seragam'],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <section class="relative overflow-hidden bg-slate-900 py-16 lg:py-24">
            <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950/95 via-slate-900/90 to-primary-900/70"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-10 lg:grid-cols-2">
                    <div class="max-w-2xl">
                        <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-300">
                            <ol class="flex items-center gap-2">
                                <li><a href="{{ route('home') }}" class="transition hover:text-white">Beranda</a></li>
                                <li aria-hidden="true" class="text-slate-500">/</li>
                                <li class="font-medium text-white">Madrasah Ibtidaiyah</li>
                            </ol>
                        </nav>
                        <span class="inline-block rounded-full bg-primary-500/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-300">Jenjang Pendidikan</span>
                        <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Madrasah Ibtidaiyah</h1>
                        <p class="mt-2 text-xl font-medium text-primary-300">Membentuk Generasi Qur'ani sejak Dini</p>
                        <p class="mt-6 leading-relaxed text-slate-200">MI Qosim Al Hadi menggabungkan pendidikan umum dan keislaman untuk membangun fondasi ilmu, iman, dan karakter mulia bagi anak-anak usia sekolah dasar.</p>
                        <a href="#ppdb" class="mt-8 inline-flex items-center rounded-full bg-primary-600 px-8 py-3.5 font-semibold text-white shadow-lg shadow-primary-600/30 transition hover:bg-primary-500">Daftar Siswa Baru</a>
                    </div>
                    <div class="hidden lg:block">
                        <img src="{{ asset('images/mi.png') }}" alt="Foto utama MI" class="rounded-3xl shadow-2xl ring-1 ring-white/10">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div class="order-2 lg:order-1">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Sekilas MI</h2>
                        <p class="mt-6 leading-relaxed text-slate-600">Madrasah Ibtidaiyah Qosim Al Hadi adalah jenjang dasar yang menyelenggarakan pendidikan umum dan keislaman secara terpadu. Kami berfokus pada pembentukan karakter, kebiasaan ibadah, serta keterampilan dasar yang dibutuhkan siswa untuk melanjutkan pendidikan ke jenjang berikutnya.</p>
                        <div class="mt-8 grid grid-cols-3 gap-4 text-center">
                            <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-slate-100">
                                <p class="text-2xl font-extrabold text-primary-600">2003</p>
                                <p class="text-xs text-slate-500">Berdiri</p>
                            </div>
                            <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-slate-100">
                                <p class="text-2xl font-extrabold text-primary-600">A</p>
                                <p class="text-xs text-slate-500">Akreditasi</p>
                            </div>
                            <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-slate-100">
                                <p class="text-2xl font-extrabold text-primary-600">180+</p>
                                <p class="text-xs text-slate-500">Siswa</p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <img src="{{ asset('images/mi.png') }}" alt="Sekilas MI" class="rounded-3xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-2">
                    <div class="rounded-3xl bg-primary-600 p-8 text-white lg:p-10">
                        <h2 class="text-3xl font-bold tracking-tight">Visi</h2>
                        <p class="mt-6 text-lg leading-relaxed">Menjadikan Madrasah Ibtidaiyah Qosim Al Hadi sebagai lembaga pendidikan dasar Islam yang menghasilkan generasi cerdas, berakhlak mulia, dan berdaya saing tinggi.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-900 p-8 text-white lg:p-10">
                        <h2 class="text-3xl font-bold tracking-tight">Misi</h2>
                        <ul class="mt-6 list-disc space-y-3 pl-5 leading-relaxed text-slate-200">
                            @foreach ($missions as $mission)
                                <li>{{ $mission }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Informasi Akademik</h2>
                    <p class="mt-4 text-slate-600">Informasi penting mengenai kegiatan belajar di MI Qosim Al Hadi.</p>
                </div>
                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($academic as $item)
                        <div class="rounded-2xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-100 transition hover:shadow-md">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-slate-900">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="ppdb" class="relative overflow-hidden bg-slate-900 py-16 lg:py-24">
            <div class="absolute -top-20 -right-20 h-72 w-72 rounded-full bg-primary-600/20 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-primary-500/10 blur-3xl"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Penerimaan Peserta Didik Baru</h2>
                    <p class="mt-4 text-slate-300">Tahun ajaran 2026/2027 telah dibuka. Ikuti alur pendaftaran di bawah ini.</p>
                </div>
                <div class="mt-12 grid gap-6 lg:grid-cols-3">
                    <div class="rounded-2xl bg-white/5 p-6 backdrop-blur ring-1 ring-white/10">
                        <h3 class="text-lg font-bold text-white">Jadwal Pendaftaran</h3>
                        <ul class="mt-4 space-y-3 text-sm text-slate-300">
                            <li class="flex justify-between"><span>Gelombang 1</span><span class="font-semibold text-white">Jan - Mar 2026</span></li>
                            <li class="flex justify-between"><span>Gelombang 2</span><span class="font-semibold text-white">Apr - Jun 2026</span></li>
                            <li class="flex justify-between"><span>Pengumuman</span><span class="font-semibold text-white">2 minggu setelah tes</span></li>
                        </ul>
                    </div>
                    <div class="rounded-2xl bg-white/5 p-6 backdrop-blur ring-1 ring-white/10">
                        <h3 class="text-lg font-bold text-white">Persyaratan</h3>
                        <ul class="mt-4 list-disc space-y-2 pl-5 text-sm text-slate-300">
                            @foreach ($requirements as $requirement)
                                <li>{{ $requirement }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="rounded-2xl bg-white/5 p-6 backdrop-blur ring-1 ring-white/10">
                        <h3 class="text-lg font-bold text-white">Biaya Pendidikan</h3>
                        <p class="mt-4 text-sm text-slate-300">Biaya pendaftaran dan SPP dapat dikonsultasikan langsung ke bagian administrasi sekolah. Tersedia opsional pembayaran semester atau bulanan.</p>
                    </div>
                </div>
                <div class="mt-10 rounded-2xl bg-white/5 p-6 backdrop-blur ring-1 ring-white/10 lg:p-10">
                    <h3 class="text-lg font-bold text-white">Alur Pendaftaran</h3>
                    <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                        @foreach ($flow as $index => $step)
                            <div class="relative rounded-xl bg-white p-5 text-center shadow-sm">
                                <span class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-primary-100 text-sm font-bold text-primary-700">{{ $index + 1 }}</span>
                                <p class="mt-3 text-sm font-semibold text-slate-800">{{ $step }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-10 text-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center rounded-full bg-primary-600 px-10 py-4 font-semibold text-white shadow-lg shadow-primary-600/30 transition hover:bg-primary-500">Daftar Online</a>
                    <p class="mt-3 text-sm text-slate-400">Klik tombol di atas untuk mengisi formulir pendaftaran.</p>
                </div>
            </div>
        </section>
    </main>
</div>
