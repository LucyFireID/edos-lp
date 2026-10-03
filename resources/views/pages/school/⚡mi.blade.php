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
            'curriculum' => [
                ['title' => 'Pendidikan Agama Islam', 'desc' => 'Aqidah, akhlak, fiqih, dan Al-Qur\'an untuk membangun fondasi keislaman yang kuat.'],
                ['title' => 'Matematika & Sains', 'desc' => 'Pembelajaran dasar matematika dan sains dengan pendekatan eksploratif dan praktik.'],
                ['title' => 'Bahasa Indonesia & Inggris', 'desc' => 'Literasi bahasa untuk berkomunikasi dengan baik secara lisan maupun tulisan.'],
                ['title' => 'Seni & Olahraga', 'desc' => 'Pengembangan kreativitas dan kesehatan fisik melalui seni, musik, dan aktivitas olahraga.'],
            ],
            'facilities' => [
                ['name' => 'Ruang Kelas Modern', 'icon' => 'M4 6a2 2 0 012-2h12a2 2 0 012 2v7a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM12 15l6 4V6a2 2 0 00-2-2H8a2 2 0 00-2 2v13l6-4z'],
                ['name' => 'Perpustakaan Ceria', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['name' => 'Area Bermain Edukatif', 'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['name' => 'Laboratorium Sains Dasar', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
            ],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        {{-- Hero --}}
        <section class="relative overflow-hidden bg-slate-900 py-24 lg:py-32">
            <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 to-slate-950/60"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-4 text-sm text-slate-300">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('home') }}" class="transition hover:text-white">Beranda</a></li>
                        <li aria-hidden="true" class="text-slate-500">/</li>
                        <li class="font-medium text-white" aria-current="page">Madrasah Ibtidaiyah</li>
                    </ol>
                </nav>
                <h1 class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Madrasah Ibtidaiyah (MI)</h1>
                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-slate-200">Membangun fondasi ilmu, iman, dan karakter mulia bagi generasi muda sejak usia dini.</p>
            </div>
        </section>

        {{-- Stats --}}
        <section class="py-12 lg:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                    @foreach ($stats as $stat)
                        <div class="rounded-2xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-100">
                            <p class="text-3xl font-extrabold text-primary-600">{{ $stat['value'] }}</p>
                            <p class="mt-1 text-sm text-slate-600">{{ $stat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- About & Vision --}}
        <section class="py-12 lg:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2">
                    <div class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-100 lg:p-10">
                        <h2 class="text-2xl font-bold text-slate-900">Tentang MI</h2>
                        <p class="mt-4 leading-relaxed text-slate-600">Madrasah Ibtidaiyah Qosim Al Hadi menyelenggarakan pendidikan dasar yang mengintegrasikan kurikulum umum dan keislaman. Kami percaya bahwa masa kecil adalah golden age untuk menanamkan kecintaan terhadap ilmu, Al-Qur'an, dan akhlak mulia.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Melalui metode pembelajaran yang aktif, menyenangkan, dan sesuai tahap perkembangan anak, siswa dibimbing untuk menjadi pribadi yang percaya diri, mandiri, dan peduli sesama.</p>
                    </div>
                    <div class="rounded-3xl bg-primary-600 p-8 text-white shadow-lg lg:p-10">
                        <h2 class="text-2xl font-bold">Visi & Misi</h2>
                        <p class="mt-4 leading-relaxed">Menjadikan generasi muslim yang berilmu, berakhlak, berdaya saing, dan siap melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>
                        <ul class="mt-6 list-disc space-y-2 pl-5 leading-relaxed">
                            <li>Menanamkan aqidah dan akhlak islamiyyah.</li>
                            <li>Mengembangkan literasi dan numerasi dasar yang kuat.</li>
                            <li>Membiasakan hidup sehat, disiplin, dan mandiri.</li>
                            <li>Membantu anak mengenali dan mengembangkan potensi dirinya.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Curriculum --}}
        <section class="bg-white py-12 lg:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900">Kurikulum</h2>
                    <p class="mt-4 text-slate-600">Kurikulum MI kami dirancang untuk memenuhi standar nasional sekaligus memperkuat nilai keislaman.</p>
                </div>
                <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($curriculum as $item)
                        <div class="rounded-2xl bg-slate-50 p-6 ring-1 ring-slate-100 transition hover:shadow-md">
                            <h3 class="text-lg font-bold text-slate-900">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Facilities --}}
        <section class="py-12 lg:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900">Fasilitas & Kegiatan</h2>
                    <p class="mt-4 text-slate-600">Lingkungan belajar yang nyaman dan aman untuk mendukung perkembangan optimal siswa.</p>
                </div>
                <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($facilities as $facility)
                        <div class="rounded-2xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-100 transition hover:shadow-md">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $facility['icon'] }}"/></svg>
                            </div>
                            <h3 class="mt-4 text-sm font-bold text-slate-900">{{ $facility['name'] }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- CTA --}}
        <section class="bg-slate-900 py-16">
            <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white">Daftarkan Putra-Putri Anda di MI Qosim Al Hadi</h2>
                <p class="mt-4 text-slate-300">Pendaftaran tahun ajaran 2027/2028 telah dibuka. Kuota terbatas.</p>
                <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-8 py-4 font-semibold text-white shadow-lg shadow-primary-500/30 transition hover:scale-105">
                    SPMB 2027
                </a>
            </div>
        </section>
    </main>
</div>
