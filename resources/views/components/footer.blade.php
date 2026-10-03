<footer class="bg-slate-900 pt-16 pb-8 text-slate-400">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-12 lg:grid-cols-4">
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3">
                    <span class="flex h-14 w-14 shrink-0 items-center justify-center">
                        <img src="{{ asset('images/logo-qosimalhadi-128.png') }}" alt="Logo Qosim Al Hadi" class="h-full w-full object-contain">
                    </span>
                    <span class="text-xl font-bold tracking-tight text-white">Qosim Al Hadi</span>
                </div>
                <p class="mt-5 max-w-md leading-relaxed">
                    Menyelenggarakan pendidikan berkualitas untuk membentuk generasi cerdas, berkarakter, dan siap menghadapi tantangan global.
                </p>

                <div class="mt-10">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Instansi Kerja Sama</h3>
                    <div class="mt-5 flex flex-wrap items-center gap-4">
                        <img src="{{ asset('images/kemenag.png') }}" alt="Kemenag" class="h-12 w-auto rounded bg-white/5 object-contain p-2">
                        <img src="{{ asset('images/dinas-kota-semarang.png') }}" alt="Dinas Kota Semarang" class="h-12 w-auto rounded bg-white/5 object-contain p-2">
                        <img src="{{ asset('images/ban-pdm.png') }}" alt="BAN PDM" class="h-12 w-auto rounded bg-white/5 object-contain p-2">
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Tautan Cepat</h3>
                <ul class="mt-5 space-y-3 text-sm">
                    @foreach (['home' => 'Beranda', 'program' => 'Program', 'fasilitas' => 'Fasilitas', 'universitas' => 'Universitas', 'berita' => 'Berita'] as $id => $label)
                        <li><a href="{{ route('home') }}#{{ $id }}" class="transition hover:text-primary-400">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Kontak</h3>
                <ul class="mt-5 space-y-3 text-sm">
                    <li>Jl. Raya Kuripan, RT.2/RW.1, Kelurahan Wonolopo, Kecamatan Mijen, Kota Semarang, Jawa Tengah 50215</li>
                    <li>(021) 555-0123</li>
                    <li>info@qosimalhadi.sch.id</li>
                </ul>
                <div class="mt-6 flex gap-3">
                    <a href="#" aria-label="Instagram" class="flex h-10 w-10 items-center justify-center rounded-full bg-white/5 text-slate-300 transition hover:bg-primary-500 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 002.25 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM12 6.75a5.25 5.25 0 110 10.5 5.25 5.25 0 010-10.5zm0 1.75a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.5 5.5a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/></svg>
                    </a>
                    <a href="#" aria-label="YouTube" class="flex h-10 w-10 items-center justify-center rounded-full bg-white/5 text-slate-300 transition hover:bg-primary-500 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 text-sm sm:flex-row">
            <p>&copy; {{ date('Y') }} Qosim Al Hadi. Seluruh hak cipta dilindungi.</p>
            <div class="flex gap-6">
                <a href="{{ route('privacy') }}" class="transition hover:text-primary-400">Kebijakan Privasi</a>
                <a href="{{ route('terms') }}" class="transition hover:text-primary-400">Syarat &amp; Ketentuan</a>
            </div>
        </div>

        <p class="mt-6 text-center text-xs text-slate-500">
            <a href="#" class="transition hover:text-primary-400">EduSatuOS by TexusCode</a>
        </p>
    </div>
</footer>
