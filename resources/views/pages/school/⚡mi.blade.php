<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Madrasah Ibtidaiyah - Qosim Al Hadi Semarang')] class extends Component
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
                    <p class="mt-6 max-w-2xl leading-relaxed text-slate-200">Madrasah Ibtidaiyah Qosim Al Hadi menyelenggarakan pendidikan dasar Islam yang mengintegrasikan ilmu umum dan keislaman dalam suasana belajar yang menyenangkan, aman, dan penuh kasih sayang.</p>
                    <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-7 py-3.5 text-base font-semibold text-white transition hover:opacity-90">SPMB 2027</a>
                </div>
            </div>
        </section>

        <section class="relative bg-white py-16 lg:py-24">
            <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('{{ asset('images/batik.png') }}')"></div>
            <div class="relative z-10 mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
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
                            <p class="mt-4 leading-relaxed text-slate-600">Selamat datang di Madrasah Ibtidaiyah Qosim Al Hadi. Kami berkomitmen membentuk karakter Islami sekaligus menguatkan akademik sejak usia dini. Mari bersama membangun generasi yang cerdas, berakhlak, dan Qur'ani.</p>
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
                        <p class="mt-6 leading-relaxed text-slate-600">Madrasah Ibtidaiyah Qosim Al Hadi menyelenggarakan pendidikan dasar yang mengintegrasikan kurikulum nasional dan pendidikan Islam. Kami berfokus pada pembentukan karakter, kebiasaan ibadah, serta keterampilan dasar siswa melalui metode pembelajaran yang aktif dan menyenangkan.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Dengan dukungan guru yang berdedikasi dan lingkungan yang aman, setiap siswa dibimbing untuk menjadi pribadi yang mandiri, kreatif, dan peduli sesama.</p>

                    </div>
                    <div>
                        <img src="{{ asset('images/mi.png') }}" alt="Sekilas Madrasah Ibtidaiyah" class="rounded-3xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section class="relative bg-white py-16 lg:py-24">
            <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('{{ asset('images/batik2.png') }}')"></div>
            <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div class="rounded-3xl border-t-4 border-primary-500 bg-white p-10 shadow-sm lg:p-12">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h2 class="mt-6 text-3xl font-bold tracking-tight text-slate-900">Visi</h2>
                        <p class="mt-4 leading-relaxed text-slate-600">Menjadikan Madrasah Ibtidaiyah Qosim Al Hadi sebagai lembaga pendidikan dasar Islam yang menghasilkan generasi cerdas, berakhlak mulia, dan berdaya saing tinggi.</p>
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

        <section id="spmb" class="bg-slate-50 py-20">
            <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl">Sistem Penerimaan Murid Baru Madrasah Ibtidaiyah</h2>
                <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-primary-600 px-10 py-4 font-semibold text-white transition hover:bg-primary-500">SPMB 2027</a>
            </div>
        </section>
    </main>
</div>
