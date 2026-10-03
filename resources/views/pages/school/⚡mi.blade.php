<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Madrasah Ibtidaiyah (MI) - Qosim Al Hadi Semarang')] class extends Component
{
    public function with(): array
    {
        return [
            'learnings' => [
                ['title' => 'Tahsin Al-Qur\'an', 'desc' => 'Pembelajaran membaca Al-Qur\'an dengan tajwid dan tartil sejak kelas awal.'],
                ['title' => 'Hafalan Surat & Doa', 'desc' => 'Menghafal surat pendek, doa harian, dan hadis untuk kehidupan sehari-hari.'],
                ['title' => 'Aqidah & Akhlak', 'desc' => 'Membiasakan adab islami, kejujuran, dan rasa syukur dalam setiap aktivitas.'],
                ['title' => 'Matematika Bermain', 'desc' => 'Mengenal angka, pola, dan logika dasar melalui permainan edukatif.'],
                ['title' => 'Literasi Bilingual', 'desc' => 'Membaca cerita dan berlatih percakapan sederhana dalam Bahasa Indonesia dan Inggris.'],
                ['title' => 'Sains & Kreativitas', 'desc' => 'Eksplorasi alam, seni, musik, dan olahraga untuk perkembangan motorik serta kreativitas.'],
            ],
            'schedule' => [
                ['time' => '07.00 - 07.30', 'activity' => 'Sholat Dhuha & Pembukaan'],
                ['time' => '07.30 - 09.30', 'activity' => 'Pembelajaran Inti: Qur\'an & Umum'],
                ['time' => '09.30 - 10.00', 'activity' => 'Istirahat & Makan Ringan'],
                ['time' => '10.00 - 11.30', 'activity' => 'Pembelajaran Inti: Matematika & Sains'],
                ['time' => '11.30 - 12.30', 'activity' => 'Sholat Dzhuhur & Makan Siang'],
                ['time' => '12.30 - 14.00', 'activity' => 'Kegiatan Pilihan: Seni, Olahraga, Bahasa'],
            ],
            'activities' => [
                ['title' => 'Sholat Berjamaah', 'desc' => 'Membiasakan sholat dhuha dan dzhuhur berjamaah di masjid sekolah.'],
                ['title' => 'Kelas Tahfidz', 'desc' => 'Program hafalan Al-Qur\'an dengan target sesuai kemampuan siswa.'],
                ['title' => 'Praktek Sains', 'desc' => 'Eksperimen sederhana untuk mengenal alam sekitar dan fenomena fisika dasar.'],
                ['title' => 'Pentas Seni', 'desc' => 'Panggung bagi siswa untuk menampilkan bakat musik, tari, dan baca puisi.'],
            ],
            'teachers' => [
                ['name' => 'Ust. Ahmad Fauzi', 'subject' => 'Aqidah & Akhlak'],
                ['name' => 'Ust. Ridwan Hakim', 'subject' => 'Tahsin Al-Qur\'an'],
                ['name' => 'Dewi Sartika', 'subject' => 'Matematika'],
                ['name' => 'Sari Dewi', 'subject' => 'Bahasa Inggris'],
            ],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <section class="relative overflow-hidden bg-slate-900 py-20 lg:py-28">
            <img src="{{ asset('images/mi.png') }}" alt="Madrasah Ibtidaiyah" class="absolute inset-0 h-full w-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-900/90 to-primary-900/70"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-4 text-sm text-slate-300">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('home') }}" class="transition hover:text-white">Beranda</a></li>
                        <li aria-hidden="true" class="text-slate-500">/</li>
                        <li class="font-medium text-white">Madrasah Ibtidaiyah</li>
                    </ol>
                </nav>
                <div class="max-w-3xl">
                    <span class="inline-block rounded-full bg-primary-500/20 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-300">Jenjang Dasar</span>
                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Madrasah Ibtidaiyah</h1>
                    <p class="mt-6 text-lg leading-relaxed text-slate-200">Rumah belajar pertama anak untuk mengenal Al-Qur'an, ilmu pengetahuan, dan akhlak mulia dalam suasana yang menyenangkan.</p>
                    <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-primary-600 px-8 py-3.5 font-semibold text-white shadow-lg shadow-primary-600/30 transition hover:bg-primary-500">Daftar MI 2027</a>
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div class="order-2 lg:order-1">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Belajar Sambil Bermain</h2>
                        <p class="mt-4 leading-relaxed text-slate-600">MI Qosim Al Hadi mengutamakan pendekatan pembelajaran yang sesuai dengan tahap perkembangan anak. Setiap materi dirancang agar siswa tidak hanya mengerti, tetapi juga merasa senang dan termotivasi untuk terus belajar.</p>
                        <p class="mt-4 leading-relaxed text-slate-600">Kami percaya bahwa ketika anak dibiasakan mencintai ilmu sejak kecil, ia akan tumbuh menjadi pribadi yang selalu ingin tahu, percaya diri, dan bertanggung jawab.</p>
                    </div>
                    <div class="order-1 lg:order-2">
                        <img src="{{ asset('images/mi.png') }}" alt="Aktivitas MI" class="rounded-3xl shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Apa yang Dipelajari?</h2>
                    <p class="mt-4 text-slate-600">Kurikulum MI dirancang untuk memadukan pendidikan umum dan keislaman secara seimbang.</p>
                </div>
                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($learnings as $item)
                        <div class="rounded-2xl bg-slate-50 p-6 ring-1 ring-slate-100 transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-slate-900">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Jadwal Harian</h2>
                        <p class="mt-4 text-slate-600">Hari belajar di MI Qosim Al Hadi diawali dengan ibadah dan diisi dengan aktivitas pembelajaran yang bervariasi.</p>
                        <div class="mt-8 space-y-4">
                            @foreach ($schedule as $item)
                                <div class="flex gap-4 rounded-2xl bg-white p-4 shadow-sm ring-1 ring-slate-100">
                                    <div class="shrink-0 rounded-xl bg-primary-100 px-4 py-2 text-center">
                                        <p class="text-xs font-semibold text-primary-700">{{ $item['time'] }}</p>
                                    </div>
                                    <p class="self-center text-sm font-medium text-slate-700">{{ $item['activity'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="rounded-3xl bg-primary-600 p-8 text-white lg:p-10">
                        <h3 class="text-2xl font-bold">Kegiatan Unggulan</h3>
                        <p class="mt-2 text-primary-100">Program pilihan yang mengasah spiritual, intelektual, dan kreativitas siswa.</p>
                        <div class="mt-8 space-y-4">
                            @foreach ($activities as $activity)
                                <div class="rounded-2xl bg-white/10 p-4 backdrop-blur">
                                    <h4 class="font-bold">{{ $activity['title'] }}</h4>
                                    <p class="mt-1 text-sm text-primary-100">{{ $activity['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Tim Pengajar MI</h2>
                    <p class="mt-4 text-slate-600">Guru yang berdedikasi untuk membimbing anak-anak belajar dan berkembang.</p>
                </div>
                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($teachers as $teacher)
                        <div class="rounded-2xl bg-slate-50 p-6 text-center ring-1 ring-slate-100">
                            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-slate-200 text-slate-400">
                                <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-bold text-slate-900">{{ $teacher['name'] }}</h3>
                            <p class="text-sm text-slate-500">{{ $teacher['subject'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-slate-900 py-16">
            <div class="absolute -top-20 -right-20 h-64 w-64 rounded-full bg-primary-600/30 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-64 w-64 rounded-full bg-primary-500/20 blur-3xl"></div>
            <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white sm:text-4xl">Mulai Perjalanan Belajar Anak Anda</h2>
                <p class="mt-4 text-slate-300">Daftar di MI Qosim Al Hadi dan wujudkan masa depan cerah sejak dini.</p>
                <a href="{{ route('home') }}" class="mt-8 inline-flex items-center rounded-full bg-primary-600 px-8 py-4 font-semibold text-white shadow-lg transition hover:bg-primary-500">Daftar Sekarang</a>
            </div>
        </section>
    </main>
</div>
