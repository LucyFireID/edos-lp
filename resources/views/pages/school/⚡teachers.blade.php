<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Tenaga Pendidik - Qosim Al Hadi Semarang')] class extends Component
{
    public function with(): array
    {
        return [
            'teachers' => [
                ['name' => 'Ahmad Fauzi, S.Pd.', 'subject' => 'Matematika', 'role' => 'Kepala Sekolah'],
                ['name' => 'Dewi Sartika, S.Pd.', 'subject' => 'Bahasa Indonesia', 'role' => 'Wali Kelas'],
                ['name' => 'Hendra Wijaya, M.Pd.', 'subject' => 'Fisika', 'role' => 'Guru'],
                ['name' => 'Sari Dewi, S.Pd.', 'subject' => 'Biologi', 'role' => 'Guru'],
                ['name' => 'Ridwan Hakim, S.Pd.', 'subject' => 'Pendidikan Agama Islam', 'role' => 'Guru'],
                ['name' => 'Nur Aini, S.Pd.', 'subject' => 'Bahasa Inggris', 'role' => 'Guru'],
                ['name' => 'Bambang Setyo, S.Pd.', 'subject' => 'Sejarah', 'role' => 'Guru'],
                ['name' => 'Lestari Indah, S.Pd.', 'subject' => 'Kimia', 'role' => 'Guru'],
                ['name' => 'Andi Pratama, S.Pd.', 'subject' => 'Olahraga', 'role' => 'Guru'],
                ['name' => 'Fitriani Rahma, S.Pd.', 'subject' => 'Seni Budaya', 'role' => 'Guru'],
                ['name' => 'Eko Nugroho, M.Pd.', 'subject' => 'Bahasa Arab', 'role' => 'Guru'],
                ['name' => 'Rina Amelia, S.Pd.', 'subject' => 'IPS', 'role' => 'Guru'],
            ],
        ];
    }
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <div class="flex-1 py-12 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-6 flex justify-center text-sm text-slate-500">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('home') }}" class="transition hover:text-primary-600">Beranda</a></li>
                        <li aria-hidden="true" class="text-slate-300">/</li>
                        <li class="font-medium text-slate-700" aria-current="page">Tenaga Pendidik</li>
                    </ol>
                </nav>

                <div class="mb-10 text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Tenaga Pendidik</h1>
                    <p class="mt-3 text-slate-600">Terakhir diperbarui: 29 September 2026</p>
                </div>

                <div class="-mx-4 flex snap-x gap-4 overflow-x-auto px-4 pb-4 sm:mx-0 sm:grid sm:grid-cols-2 sm:overflow-visible lg:grid-cols-4 lg:gap-6 lg:px-0 lg:pb-0">
                    @foreach ($teachers as $teacher)
                        <div class="w-36 shrink-0 snap-start text-center sm:w-auto">
                            <div class="mx-auto aspect-[3/4] w-full max-w-[180px] rounded-2xl bg-slate-200 sm:max-w-[220px]">
                                <div class="flex h-full w-full items-center justify-center text-slate-400">
                                    <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                </div>
                            </div>
                            <div class="mt-3 px-1">
                                <h2 class="text-sm font-semibold leading-tight text-slate-900 sm:text-base">{{ $teacher['name'] }}</h2>
                                <p class="mt-1 text-xs text-slate-500">{{ $teacher['role'] }}</p>
                                <p class="mt-0.5 text-xs text-primary-600">{{ $teacher['subject'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
</div>
