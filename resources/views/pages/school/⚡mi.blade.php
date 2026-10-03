<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Madrasah Ibtidaiyah (MI) - Qosim Al Hadi Semarang')] class extends Component
{
    public function with(): array
    {
        return [
            'missions' => [
                'Menyelenggarakan pendidikan dasar Islam berkualitas yang mengintegrasikan ilmu umum dan keislaman.',
                'Menumbuhkan akhlak mulia, kebiasaan ibadah, dan kecintaan terhadap Al-Qur\'an sejak dini.',
                'Mengembangkan kemampuan literasi, numerasi, dan keterampilan hidup siswa secara menyenangkan.',
                'Membekali siswa dengan karakter mandiri, kreatif, dan peduli sesama.',
            ],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-white pt-28 text-slate-800">
        <section class="relative bg-slate-900 py-20 lg:py-28">
            <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-900/90 to-primary-900/60"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-300">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('home') }}" class="transition hover:text-white">Beranda</a></li>
                        <li aria-hidden="true" class="text-slate-500">/</li>
                        <li class="font-medium text-white">Madrasah Ibtidaiyah</li>
                    </ol>
                </nav>
                <div class="max-w-3xl">
                    <span class="inline-block rounded-full bg-primary-500/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-300">Jenjang Dasar</span>
                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Madrasah Ibtidaiyah</h1>
                    <p class="mt-4 text-xl font-medium text-primary-300">Membentuk Generasi Qur'ani sejak Usia Dini</p>
                    <p class="mt-6 max-w-2xl leading-relaxed text-slate-200">MI Qosim Al Hadi menyelenggarakan pendidikan dasar Islam yang mengintegrasikan ilmu umum dan keislaman dalam suasana belajar yang menyenangkan, aman, dan penuh kasih sayang.</p>
                    <a href="#spmb" class="mt-8 inline-flex items-center rounded-full bg-primary-600 px-8 py-3.5 font-semibold text-white shadow-lg shadow-primary-600/30 transition hover:bg-primary-500">Daftar Siswa Baru</a>
                </div>
            </div>
        </section>

        <section class="bg-primary-50 py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Sekilas MI</h2>
                        <p class="mt-6 leading-relaxed text-slate-600">Madrasah Ibtidaiyah Qosim Al Hadi menyelenggarakan pendidikan dasar yang mengintegrasikan kurikulum nasional dan pendidikan Islam. Kami berfokus pada pembentukan karakter, kebiasaan ibadah, serta keterampilan dasar siswa melalui metode pembelajaran yang aktif dan menyenangkan.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Dengan dukungan guru yang berdedikasi dan lingkungan yang aman, setiap siswa dibimbing untuk menjadi pribadi yang mandiri, kreatif, dan peduli sesama.</p>
                        <div class="mt-8 grid grid-cols-3 gap-4">
                            <div class="rounded-2xl bg-white p-4 text-center shadow-sm ring-1 ring-slate-100">
                                <p class="text-2xl font-extrabold text-primary-600">2003</p>
                                <p class="text-xs text-slate-500">Berdiri</p>
                            </div>
                            <div class="rounded-2xl bg-white p-4 text-center shadow-sm ring-1 ring-slate-100">
                                <p class="text-2xl font-extrabold text-primary-600">A</p>
                                <p class="text-xs text-slate-500">Akreditasi</p>
                            </div>
                            <div class="rounded-2xl bg-white p-4 text-center shadow-sm ring-1 ring-slate-100">
                                <p class="text-2xl font-extrabold text-primary-600">180+</p>
                                <p class="text-xs text-slate-500">Siswa</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('images/mi.png') }}" alt="Sekilas MI" class="rounded-3xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary-50 py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div class="rounded-3xl bg-primary-600 p-10 text-white lg:p-12">
                        <h2 class="text-3xl font-bold tracking-tight">Visi</h2>
                        <p class="mt-6 text-lg leading-relaxed">Menjadikan Madrasah Ibtidaiyah Qosim Al Hadi sebagai lembaga pendidikan dasar Islam yang menghasilkan generasi cerdas, berakhlak mulia, dan berdaya saing tinggi.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-900 p-10 text-white lg:p-12">
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

        <section class="bg-primary-50 py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="overflow-hidden rounded-3xl bg-white ring-1 ring-slate-100">
                    <div class="grid lg:grid-cols-5">
                        <div class="flex items-center justify-center bg-primary-600 p-10 lg:col-span-2 lg:p-12">
                            <div class="text-center">
                                <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-white/10 text-white">
                                    <svg class="h-14 w-14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                </div>
                                <p class="mt-6 text-xl font-bold text-white">Ahmad Fauzi, S.Pd.</p>
                                <p class="text-sm text-primary-100">Kepala Madrasah Ibtidaiyah</p>
                            </div>
                        </div>
                        <div class="p-10 lg:col-span-3 lg:p-12">
                            <h2 class="text-3xl font-bold tracking-tight text-slate-900">Sambutan Kepala Madrasah</h2>
                            <p class="mt-6 leading-relaxed text-slate-600">Assalamu'alaikum warahmatullahi wabarakatuh,</p>
                            <p class="mt-4 leading-relaxed text-slate-600">Selamat datang di Madrasah Ibtidaiyah Qosim Al Hadi. Sejak berdiri, kami berkomitmen untuk memberikan pendidikan dasar yang tidak hanya mengutamakan akademik, tetapi juga membentuk karakter Islami pada setiap siswa.</p>
                            <p class="mt-4 leading-relaxed text-slate-600">Kami percaya bahwa masa kanak-kanak adalah fondasi penting bagi perkembangan masa depan anak. Oleh karena itu, MI Qosim Al Hadi hadir sebagai rumah belajar kedua yang penuh kasih sayang, disiplin, dan inspiratif.</p>
                            <p class="mt-4 leading-relaxed text-slate-600">Terima kasih atas kepercayaan Anda. Mari bersama-sama membangun generasi yang cerdas, berakhlak, dan Qur'ani.</p>
                            <p class="mt-6 font-bold text-slate-900">Wassalamu'alaikum warahmatullahi wabarakatuh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="spmb" class="relative overflow-hidden bg-slate-900 py-20">
            <div class="absolute -top-20 -right-20 h-72 w-72 rounded-full bg-primary-600/20 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-72 w-72 rounded-full bg-primary-500/10 blur-3xl"></div>
            <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white sm:text-4xl">Pendaftaran Siswa Baru MI</h2>
                <p class="mt-4 text-slate-300">Tahun ajaran 2026/2027 telah dibuka. Wujudkan masa depan cerah anak Anda sejak dini.</p>
                <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-primary-600 px-10 py-4 font-semibold text-white shadow-lg shadow-primary-600/30 transition hover:bg-primary-500">Daftar Sekarang</a>
                <p class="mt-4 text-sm text-slate-400">Kuota terbatas — segera lakukan pendaftaran.</p>
            </div>
        </section>
    </main>
</div>
