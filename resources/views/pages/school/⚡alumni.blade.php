<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

new #[Title('Lacak Para Alumni - Qosim Al Hadi Semarang')] class extends Component
{
    #[Url]
    public string $search = '';

    #[Url]
    public string $year = '';

    #[Url]
    public string $program = '';

    public function with(): array
    {
        $alumni = collect([
            [
                'name' => 'Ahmad Rizky Pratama',
                'program' => 'MA',
                'year' => 2023,
                'status' => 'Universitas Indonesia',
                'major' => 'Teknik Komputer',
                'quote' => 'Qosim Al Hadi mengajarkan saya untuk selalu berpikir kritis dan tidak mudah menyerah.',
            ],
            [
                'name' => 'Dewi Lestari',
                'program' => 'MA',
                'year' => 2023,
                'status' => 'Universitas Gadjah Mada',
                'major' => 'Kedokteran',
                'quote' => 'Bekal ilmu dan karakter dari sekolah menjadi fondasi kuat di perkuliahan.',
            ],
            [
                'name' => 'Bambang Setyawan',
                'program' => 'MTs',
                'year' => 2022,
                'status' => 'Institut Teknologi Bandung',
                'major' => 'Arsitektur',
                'quote' => 'Saya bangga pernah belajar di lingkungan yang penuh semangat dan kebersamaan.',
            ],
            [
                'name' => 'Sari Indah Permata',
                'program' => 'MA',
                'year' => 2022,
                'status' => 'Universitas Airlangga',
                'major' => 'Psikologi',
                'quote' => 'Guru-guru di sini benar-benar peduli dan membantu mengembangkan potensi saya.',
            ],
            [
                'name' => 'Ridwan Hakim',
                'program' => 'MTs',
                'year' => 2021,
                'status' => 'Universitas Diponegoro',
                'major' => 'Hukum',
                'quote' => 'Disiplin dan keberagaman ilmu yang saya dapatkan sangat bermanfaat hingga kini.',
            ],
            [
                'name' => 'Nur Aini Fitriani',
                'program' => 'MA',
                'year' => 2021,
                'status' => 'Universitas Indonesia',
                'major' => 'Ilmu Komunikasi',
                'quote' => 'Sekolah ini membuka wawasan saya tentang banyak peluang di masa depan.',
            ],
            [
                'name' => 'Hendra Wijaya',
                'program' => 'MTs',
                'year' => 2020,
                'status' => 'Universitas Brawijaya',
                'major' => 'Manajemen',
                'quote' => 'Pengalaman organisasi di sekolah membuat saya lebih percaya diri berjejaring.',
            ],
            [
                'name' => 'Lestari Indah',
                'program' => 'MA',
                'year' => 2020,
                'status' => 'Universitas Padjadjaran',
                'major' => 'Akuntansi',
                'quote' => 'Pembelajaran yang menyenangkan membuat saya selalu termotivasi.',
            ],
            [
                'name' => 'Andi Pratama',
                'program' => 'MI',
                'year' => 2024,
                'status' => 'SMA Negeri 1 Semarang',
                'major' => 'Ilmu Pengetahuan Alam',
                'quote' => 'Dari MI saya belajar dasar yang kuat untuk melanjutkan ke jenjang berikutnya.',
            ],
            [
                'name' => 'Fitriani Rahma',
                'program' => 'MI',
                'year' => 2024,
                'status' => 'SMA Negeri 2 Semarang',
                'major' => 'Ilmu Pengetahuan Sosial',
                'quote' => 'Saya menyukai suasana belajar yang penuh kasih sayang dan motivasi.',
            ],
            [
                'name' => 'Eko Nugroho',
                'program' => 'MTs',
                'year' => 2019,
                'status' => 'Universitas Negeri Semarang',
                'major' => 'Pendidikan Teknik Elektro',
                'quote' => 'Sekolah memberikan bekal spiritual dan intelektual yang seimbang.',
            ],
            [
                'name' => 'Rina Amelia',
                'program' => 'MA',
                'year' => 2019,
                'status' => 'Universitas Islam Indonesia',
                'major' => 'Farmasi',
                'quote' => 'Saya berterima kasih atas bimbingan guru dan dukungan teman-teman sekolah.',
            ],
            [
                'name' => 'Fauzan Akmal',
                'program' => 'Ponpes',
                'year' => 2023,
                'status' => 'UIN Walisongo Semarang',
                'major' => 'Pendidikan Islam',
                'quote' => 'Pondok pesantren menguatkan spiritual dan akademik saya secara seimbang.',
            ],
            [
                'name' => 'Khadijah Ramadhani',
                'program' => 'Ponpes',
                'year' => 2022,
                'status' => 'UIN Sunan Kalijaga Yogyakarta',
                'major' => 'Tafsir Hadis',
                'quote' => 'Belajar di asrama pondok membuat saya mandiri dan disiplin.',
            ],
            [
                'name' => 'Miftahul Huda',
                'program' => 'Ponpes',
                'year' => 2021,
                'status' => 'STAINU Kudus',
                'major' => 'Studi Islam',
                'quote' => 'Bimbingan ustadz dan kiai membentuk karakter keislaman saya.',
            ],
        ]);

        $filtered = $alumni
            ->when($this->search, function ($query) {
                $search = strtolower($this->search);

                return $query->filter(fn ($a) =>
                    str_contains(strtolower($a['name']), $search)
                    || str_contains(strtolower($a['status']), $search)
                    || str_contains(strtolower($a['major']), $search)
                );
            })
            ->when($this->year, fn ($query) => $query->where('year', (int) $this->year))
            ->when($this->program, fn ($query) => $query->where('program', $this->program));

        return [
            'alumni' => $filtered->values()->all(),
            'years' => $alumni->pluck('year')->unique()->sortDesc()->values()->all(),
        ];
    }

    public function resetFilters(): void
    {
        $this->search = '';
        $this->year = '';
        $this->program = '';
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <div class="flex-1 py-12 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-6 flex justify-center text-sm text-slate-500">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('home') }}" class="transition hover:text-primary-600">Beranda</a></li>
                        <li aria-hidden="true" class="text-slate-300">/</li>
                        <li class="font-medium text-slate-700" aria-current="page">Lacak Para Alumni</li>
                    </ol>
                </nav>

                <div class="mb-10 text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Lacak Para Alumni</h1>
                    <p class="mt-3 text-slate-600">Terakhir diperbarui: 29 September 2026</p>
                </div>

                <div class="mb-10 flex flex-col gap-4 sm:flex-row sm:items-center">
                    <div class="relative max-w-md flex-1">
                        <input
                            wire:model.live.debounce.300ms="search"
                            id="search"
                            name="search"
                            type="text"
                            placeholder="Cari alumni, institusi, atau jurusan..."
                            class="w-full rounded-full border border-slate-200 bg-white px-5 py-3 pl-12 text-sm text-slate-700 shadow-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-500/20 focus:outline-none"
                        >
                        <svg class="absolute top-1/2 left-4 h-5 w-5 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>

                    <div class="relative w-full sm:w-48">
                        <select
                            wire:model.live="year"
                            id="year"
                            name="year"
                            class="w-full appearance-none rounded-full border border-slate-200 bg-white py-3 pr-10 pl-5 text-sm text-slate-700 shadow-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-500/20 focus:outline-none"
                        >
                            <option value="">Semua Tahun</option>
                            @foreach ($years as $y)
                                <option value="{{ $y }}">{{ $y }}</option>
                            @endforeach
                        </select>
                        <svg class="pointer-events-none absolute top-1/2 right-4 h-4 w-4 -translate-y-1/2 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </div>

                    <div class="relative w-full sm:w-48">
                        <select
                            wire:model.live="program"
                            id="program"
                            name="program"
                            class="w-full appearance-none rounded-full border border-slate-200 bg-white py-3 pr-10 pl-5 text-sm text-slate-700 shadow-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-500/20 focus:outline-none"
                        >
                            <option value="">Semua Jenjang</option>
                            <option value="MI">MI</option>
                            <option value="MTs">MTs</option>
                            <option value="MA">MA</option>
                            <option value="Ponpes">Ponpes</option>
                        </select>
                        <svg class="pointer-events-none absolute top-1/2 right-4 h-4 w-4 -translate-y-1/2 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>

                @if (count($alumni) > 0)
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($alumni as $item)
                            <article class="flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-100 transition hover:shadow-lg">
                                <div class="h-2 bg-gradient-to-r from-primary-500 to-primary-600"></div>
                                <div class="flex flex-1 flex-col p-6">
                                    <div class="mb-4 flex items-center gap-4">
                                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-400">
                                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        </div>
                                        <div>
                                            <h2 class="text-lg font-bold text-slate-900">{{ $item['name'] }}</h2>
                                            <p class="text-xs text-slate-500">Angkatan {{ $item['year'] }}</p>
                                        </div>
                                    </div>

                                    <span class="mb-3 w-fit rounded-full bg-primary-100 px-3 py-1 text-xs font-semibold text-primary-700">{{ $item['program'] }}</span>

                                    <div class="space-y-1 text-sm">
                                        <p class="font-medium text-slate-900">{{ $item['status'] }}</p>
                                        <p class="text-slate-500">{{ $item['major'] }}</p>
                                    </div>

                                    <p class="mt-4 flex-1 text-sm italic text-slate-600">"{{ $item['quote'] }}"</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div class="rounded-2xl bg-white p-12 text-center shadow-sm">
                        <p class="text-slate-600">Tidak ada alumni yang cocok dengan pencarian Anda.</p>
                        <button wire:click="resetFilters" class="mt-4 rounded-full bg-primary-600 px-6 py-2 text-sm font-semibold text-white transition hover:bg-primary-700">
                            Reset filter
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </main>
</div>
