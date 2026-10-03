<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Sebaran Universitas Alumni dan Pendidik - Qosim Al Hadi Semarang')] class extends Component
{
    public function with(): array
    {
        $universities = collect([
            ['name' => 'Universitas Indonesia', 'city' => 'Depok', 'count' => 45, 'logo' => 'logo-ui.png'],
            ['name' => 'Universitas Gadjah Mada', 'city' => 'Yogyakarta', 'count' => 38, 'logo' => 'logo-ugm.png'],
            ['name' => 'Institut Teknologi Bandung', 'city' => 'Bandung', 'count' => 22, 'logo' => 'logo-itb.png'],
            ['name' => 'Universitas Airlangga', 'city' => 'Surabaya', 'count' => 19, 'logo' => 'logo-unair.png'],
            ['name' => 'Institut Pertanian Bogor', 'city' => 'Bogor', 'count' => 15, 'logo' => 'logo-ipb.png'],
            ['name' => 'Universitas Diponegoro', 'city' => 'Semarang', 'count' => 12, 'logo' => null],
            ['name' => 'UIN Walisongo Semarang', 'city' => 'Semarang', 'count' => 10, 'logo' => null],
            ['name' => 'Universitas Negeri Semarang', 'city' => 'Semarang', 'count' => 9, 'logo' => null],
            ['name' => 'UIN Sunan Kalijaga Yogyakarta', 'city' => 'Yogyakarta', 'count' => 7, 'logo' => null],
            ['name' => 'STAINU Kudus', 'city' => 'Kudus', 'count' => 5, 'logo' => null],
            ['name' => 'UIN Sunan Ampel Surabaya', 'city' => 'Surabaya', 'count' => 4, 'logo' => null],
            ['name' => 'Universitas Padjadjaran', 'city' => 'Bandung', 'count' => 4, 'logo' => null],
        ])->sortByDesc('count')->values();

        $totalAlumni = $universities->sum('count');
        $totalUniversities = $universities->count();
        $topCities = $universities->groupBy('city')->map(fn ($items) => $items->sum('count'))->sortDesc()->take(4);

        return [
            'universities' => $universities->all(),
            'totalAlumni' => $totalAlumni,
            'totalUniversities' => $totalUniversities,
            'topCities' => $topCities->all(),
        ];
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
                        <li class="font-medium text-slate-700" aria-current="page">Sebaran Universitas</li>
                    </ol>
                </nav>

                <div class="mb-10 text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Sebaran Universitas Alumni dan Pendidik</h1>
                    <p class="mt-3 text-slate-600">Terakhir diperbarui: 29 September 2026</p>
                </div>

                <div class="mb-10 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-100">
                        <p class="text-3xl font-extrabold text-primary-600">{{ $totalAlumni }}</p>
                        <p class="mt-1 text-sm text-slate-600">Alumni & Pendidik Terlacak</p>
                    </div>
                    <div class="rounded-2xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-100">
                        <p class="text-3xl font-extrabold text-primary-600">{{ $totalUniversities }}</p>
                        <p class="mt-1 text-sm text-slate-600">Institusi Tujuan</p>
                    </div>
                    <div class="rounded-2xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-100">
                        <p class="text-3xl font-extrabold text-primary-600">{{ count($topCities) }}</p>
                        <p class="mt-1 text-sm text-slate-600">Kota Teratas</p>
                    </div>
                </div>

                <div class="grid gap-8 lg:grid-cols-3">
                    <div class="lg:col-span-2">
                        <h2 class="mb-6 text-xl font-bold text-slate-900">Daftar Institusi</h2>
                        <div class="grid gap-4 sm:grid-cols-2">
                            @foreach ($universities as $university)
                                <div class="flex items-center gap-4 rounded-2xl bg-white p-4 shadow-sm ring-1 ring-slate-100 transition hover:shadow-md">
                                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-xl bg-white p-2 ring-1 ring-slate-100">
                                        @if ($university['logo'])
                                            <img src="{{ asset('images/' . $university['logo']) }}" alt="{{ $university['name'] }}" class="h-full w-full object-contain">
                                        @else
                                            <svg class="h-8 w-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.44M12 14l-6.16-3.44M12 14v6.66M19 16.67V9.5m-7 7.17v6.66M5 16.67V9.5"/></svg>
                                        @endif
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h3 class="truncate text-sm font-bold text-slate-900">{{ $university['name'] }}</h3>
                                        <p class="text-xs text-slate-500">{{ $university['city'] }}</p>
                                    </div>
                                    <span class="rounded-full bg-primary-100 px-3 py-1 text-xs font-bold text-primary-700">{{ $university['count'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-6 text-xl font-bold text-slate-900">Top Kota</h2>
                        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-100">
                            <ul class="space-y-4">
                                @foreach ($topCities as $city => $count)
                                    <li class="flex items-center justify-between">
                                        <span class="font-medium text-slate-700">{{ $city }}</span>
                                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-600">{{ $count }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
