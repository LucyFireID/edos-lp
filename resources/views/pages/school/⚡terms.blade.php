<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Syarat & Ketentuan - Qosim Al Hadi Semarang')] class extends Component
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
                        <li class="font-medium text-slate-700" aria-current="page">Syarat &amp; Ketentuan</li>
                    </ol>
                </nav>

                <div class="mb-10 text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Syarat &amp; Ketentuan
                    </h1>
                    <p class="mt-3 text-slate-600">Terakhir diperbarui: 29 September 2026</p>
                </div>

                <div class="space-y-8 text-slate-700">
                    <section>
                        <h2 class="text-xl font-bold text-slate-900">1. Penerimaan Syarat</h2>
                        <p class="mt-2 leading-relaxed">
                            Dengan mengakses dan menggunakan situs web Qosim Al Hadi Semarang, Anda dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku. Jika Anda tidak menyetujui, harap untuk tidak melanjutkan penggunaan situs ini.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">2. Penggunaan Situs</h2>
                        <p class="mt-2 leading-relaxed">
                            Situs ini disediakan untuk memberikan informasi mengenai sekolah, program, kegiatan, dan layanan yang kami tawarkan. Anda dilarang menggunakan situs ini untuk tujuan yang melanggar hukum, menyesatkan, atau merusak nama baik institusi.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">3. Kekayaan Intelektual</h2>
                        <p class="mt-2 leading-relaxed">
                            Seluruh konten di situs ini, termasuk teks, gambar, logo, video, dan materi lainnya, merupakan milik Qosim Al Hadi Semarang atau pihak yang memberi lisensi kepada kami. Dilarang menyalin, mendistribusikan, atau memodifikasi konten tanpa izin tertulis.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">4. Batasan Tanggung Jawab</h2>
                        <p class="mt-2 leading-relaxed">
                            Kami berusaha menyajikan informasi yang akurat dan terkini, namun tidak menjamin bahwa seluruh informasi bebas dari kesalahan atau kelalaian. Qosim Al Hadi Semarang tidak bertanggung jawab atas kerugian yang timbul akibat penggunaan informasi di situs ini.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">5. Tautan Pihak Ketiga</h2>
                        <p class="mt-2 leading-relaxed">
                            Situs ini dapat menyertakan tautan ke situs pihak ketiga. Tautan tersebut disediakan untuk kemudahan Anda dan bukan merupakan endorsement. Kami tidak bertanggung jawab atas konten atau kebijakan privasi situs pihak ketiga.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">6. Perubahan Syarat</h2>
                        <p class="mt-2 leading-relaxed">
                            Kami berhak mengubah syarat dan ketentuan ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Perubahan akan berlaku sejak dipublikasikan di halaman ini. Penggunaan berkelanjutan atas situs ini berarti Anda menerima syarat yang telah diperbarui.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">7. Hukum yang Berlaku</h2>
                        <p class="mt-2 leading-relaxed">
                            Syarat dan ketentuan ini tunduk pada hukum yang berlaku di Indonesia. Setiap perselisihan yang timbul akan diselesaikan melalui musyawarah mufakat atau lewat jalur hukum yang berwenang.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-xl font-bold text-slate-900">8. Kontak</h2>
                        <p class="mt-2 leading-relaxed">
                            Jika Anda memiliki pertanyaan mengenai Syarat &amp; Ketentuan ini, silakan hubungi kami melalui email info@qosimalhadi.sch.id atau telepon (021) 555-0123.
                        </p>
                    </section>
                </div>
            </div>
        </div>

    </main>
</div>
