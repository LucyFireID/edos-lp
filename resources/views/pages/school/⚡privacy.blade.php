<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Kebijakan Privasi - Qosim Al Hadi Semarang')] class extends Component
{
    //
};

?>

<div class="scroll-smooth">
    <main class="flex min-h-screen flex-col bg-slate-50 pt-28 text-slate-800">
        <div class="flex-1 py-12 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <nav aria-label="Breadcrumb" class="mb-6 flex justify-center text-sm text-slate-500">
                    <ol class="flex items-center gap-2">
                        <li>
                            <a href="{{ route('home') }}" class="transition hover:text-primary-600">Beranda</a>
                        </li>
                        <li aria-hidden="true" class="text-slate-300">/</li>
                        <li class="font-medium text-slate-700" aria-current="page">Kebijakan Privasi</li>
                    </ol>
                </nav>

                <div class="mb-10 text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Kebijakan Privasi
                    </h1>
                    <p class="mt-3 text-slate-600">Terakhir diperbarui: 29 September 2026</p>
                </div>

                <div class="space-y-8 text-slate-700">
                    <section>
                        <h2 class="text-xl font-bold text-slate-900">1. Pendahuluan</h2>
                        <p class="mt-2 leading-relaxed">
                            Qosim Al Hadi Semarang menghargai privasi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi yang Anda berikan saat menggunakan situs web kami.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">2. Informasi yang Kami Kumpulkan</h2>
                        <p class="mt-2 leading-relaxed">
                            Kami dapat mengumpulkan informasi berupa nama, alamat email, nomor telepon, dan pesan yang Anda kirimkan melalui formulir kontak. Kami tidak mengumpulkan informasi sensitif seperti nomor kartu kredit atau data kesehatan melalui situs ini.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">3. Penggunaan Informasi</h2>
                        <p class="mt-2 leading-relaxed">
                            Informasi yang Anda berikan digunakan untuk merespons pertanyaan, memproses pendaftaran, memberikan informasi sekolah, dan meningkatkan layanan kami. Kami tidak menjual, menyewakan, atau membagikan data pribadi Anda kepada pihak ketiga untuk tujuan komersial.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">4. Perlindungan Data</h2>
                        <p class="mt-2 leading-relaxed">
                            Kami menerapkan langkah-langkah keamanan yang wajar untuk melindungi data Anda dari akses, penggunaan, atau pengungkapan yang tidak sah. Meskipun demikian, tidak ada sistem online yang sepenuhnya aman.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">5. Cookies</h2>
                        <p class="mt-2 leading-relaxed">
                            Situs ini dapat menggunakan cookies untuk meningkatkan pengalaman pengguna, seperti menyimpan preferensi bahasa atau analitik kunjungan. Anda dapat menonaktifkan cookies melalui pengaturan browser, namun beberapa fitur mungkin tidak berfungsi optimal.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">6. Hak Anda</h2>
                        <p class="mt-2 leading-relaxed">
                            Anda berhak meminta akses, perbaikan, atau penghapusan data pribadi Anda yang kami miliki. Silakan hubungi kami melalui informasi kontak yang tersedia di situs ini.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">7. Perubahan Kebijakan</h2>
                        <p class="mt-2 leading-relaxed">
                            Kebijakan Privasi ini dapat diperbarui sewaktu-waktu. Perubahan akan diumumkan di halaman ini dan berlaku sejak dipublikasikan.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">8. Kontak</h2>
                        <p class="mt-2 leading-relaxed">
                            Jika Anda memiliki pertanyaan tentang Kebijakan Privasi ini, silakan hubungi kami melalui email info@qosimalhadi.sch.id atau telepon (021) 555-0123.
                        </p>
                    </section>
                </div>
            </div>
        </div>

    </main>
</div>
