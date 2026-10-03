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

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Sekilas MI</h2>
                        <div class="mt-4 h-1 w-16 rounded-full bg-primary-500"></div>
                        <p class="mt-6 leading-relaxed text-slate-600">Madrasah Ibtidaiyah Qosim Al Hadi menyelenggarakan pendidikan dasar yang mengintegrasikan kurikulum nasional dan pendidikan Islam. Kami berfokus pada pembentukan karakter, kebiasaan ibadah, serta keterampilan dasar siswa melalui metode pembelajaran yang aktif dan menyenangkan.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Dengan dukungan guru yang berdedikasi dan lingkungan yang aman, setiap siswa dibimbing untuk menjadi pribadi yang mandiri, kreatif, dan peduli sesama.</p>
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
                        <img src="{{ asset('images/mi.png') }}" alt="Sekilas MI" class="rounded-3xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-50 py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Visi & Misi</h2>
                    <div class="mx-auto mt-4 h-1 w-16 rounded-full bg-primary-500"></div>
                </div>
                <div class="mt-12 grid gap-8 lg:grid-cols-2">
                    <div class="rounded-3xl border-t-4 border-primary-500 bg-white p-10 shadow-sm lg:p-12">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="mt-6 text-2xl font-bold text-slate-900">Visi</h3>
                        <p class="mt-4 leading-relaxed text-slate-600">Menjadikan Madrasah Ibtidaiyah Qosim Al Hadi sebagai lembaga pendidikan dasar Islam yang menghasilkan generasi cerdas, berakhlak mulia, dan berdaya saing tinggi.</p>
                    </div>
                    <div class="rounded-3xl border-t-4 border-primary-500 bg-white p-10 shadow-sm lg:p-12">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="mt-6 text-2xl font-bold text-slate-900">Misi</h3>
                        <ul class="mt-4 list-disc space-y-2 pl-5 leading-relaxed text-slate-600">
                            @foreach ($missions as $mission)
                                <li>{{ $mission }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Sambutan Kepala Madrasah</h2>
                    <div class="mx-auto mt-4 h-1 w-16 rounded-full bg-primary-500"></div>
                </div>
                <div class="mt-12 rounded-3xl border border-slate-100 bg-white p-10 shadow-sm lg:p-12">
                    <div class="flex flex-col items-center gap-6 text-center md:flex-row md:text-left">
                        <div class="flex h-24 w-24 shrink-0 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                            <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <div>
                            <p class="text-xl font-bold text-slate-900">Ahmad Fauzi, S.Pd.</p>
                            <p class="text-sm text-primary-600">Kepala Madrasah Ibtidaiyah</p>
                        </div>
                    </div>
                    <div class="mt-8 border-l-4 border-primary-500 pl-6">
                        <p class="leading-relaxed text-slate-600">Assalamu'alaikum warahmatullahi wabarakatuh,</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Selamat datang di Madrasah Ibtidaiyah Qosim Al Hadi. Sejak berdiri, kami berkomitmen untuk memberikan pendidikan dasar yang tidak hanya mengutamakan akademik, tetapi juga membentuk karakter Islami pada setiap siswa.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Kami percaya bahwa masa kanak-kanak adalah fondasi penting bagi perkembangan masa depan anak. Oleh karena itu, MI Qosim Al Hadi hadir sebagai rumah belajar kedua yang penuh kasih sayang, disiplin, dan inspiratif.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Terima kasih atas kepercayaan Anda. Mari bersama-sama membangun generasi yang cerdas, berakhlak, dan Qur'ani.</p>
                        <p class="mt-6 font-bold text-slate-900">Wassalamu'alaikum warahmatullahi wabarakatuh.</p>
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
