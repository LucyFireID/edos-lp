@php
$isHome = request()->routeIs('home');
$isBlog = request()->routeIs('blog', 'blog.post');
@endphp

<header
    x-data="{ open: false @if ($isHome) , scrolled: false @endif }"
    @if ($isHome) @scroll.window="scrolled = window.scrollY > 20" @endif
    @if ($isHome) :class="scrolled ? 'bg-white/90 shadow-lg backdrop-blur-md' : 'bg-transparent'" @endif
    class="fixed inset-x-0 top-0 z-50 transition-all duration-300 @unless ($isHome) bg-white/90 shadow-lg backdrop-blur-md @endunless"
>
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
        <a href="{{ $isHome ? '#home' : route('home') }}" @if ($isHome) @click.prevent="scrollToSection('home')" @endif class="flex items-center gap-4">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center">
                <img src="{{ asset('images/logo-qosimalhadi-128.png') }}" alt="Logo Qosim Al Hadi" class="h-full w-full object-contain drop-shadow-lg">
            </span>
            <span class="flex flex-col leading-tight">
                <span class="text-xl font-bold tracking-tight sm:text-2xl @if ($isHome) transition-colors duration-300" :class="scrolled ? 'text-slate-900' : 'text-white' @else text-slate-900 @endif">Qosim Al Hadi</span>
                <span class="text-sm tracking-wide @if ($isHome) transition-colors duration-300" :class="scrolled ? 'text-slate-500' : 'text-primary-100' @else text-slate-500 @endif">Bhakti Kepada Negeri</span>
            </span>
        </a>

        <ul class="hidden items-center gap-9 lg:flex">
            @if ($isHome)
                @foreach (['home' => 'Beranda', 'program' => 'Program', 'fasilitas' => 'Fasilitas', 'universitas' => 'Universitas'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}" @click.prevent="scrollToSection('{{ $id }}')" class="text-base font-medium transition hover:text-primary-500" :class="scrolled ? 'text-slate-700' : 'text-white/90'">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a href="{{ route('blog') }}" class="text-base font-medium transition hover:text-primary-500" :class="scrolled ? 'text-slate-700' : 'text-white/90'">Berita</a>
                </li>
            @else
                <li>
                    <a href="{{ route('home') }}" class="text-base font-medium text-slate-700 transition hover:text-primary-500">Beranda</a>
                </li>
                @if ($isBlog)
                    <li>
                        <a href="{{ route('blog') }}" class="text-base font-medium text-primary-600 transition hover:text-primary-500" aria-current="page">Berita</a>
                    </li>
                @endif
            @endif
            <li>
                <a href="{{ $isHome ? '#home' : route('home') }}" @if ($isHome) @click.prevent="scrollToSection('home')" @endif class="rounded-full bg-gradient-to-r from-primary-500 to-primary-600 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-primary-500/30 transition hover:scale-105">
                    SPMB 2027
                </a>
            </li>
        </ul>

        <button @click="open = !open" class="@if ($isHome) transition-colors duration-300" :class="scrolled ? 'text-slate-900' : 'text-white' @else text-slate-900 @endif lg:hidden" aria-label="Menu">
            <svg x-show="!open" class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="open" x-cloak class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </nav>

    <div x-show="open" x-cloak x-transition.opacity class="lg:hidden">
        <ul class="mx-4 mb-4 space-y-1 rounded-2xl bg-white p-4 shadow-2xl">
            @if ($isHome)
                @foreach (['home' => 'Beranda', 'program' => 'Program', 'fasilitas' => 'Fasilitas', 'universitas' => 'Universitas'] as $id => $label)
                    <li>
                        <a href="#{{ $id }}" @click.prevent="scrollToSection('{{ $id }}'); open = false" class="block rounded-lg px-4 py-3.5 text-base font-medium text-slate-700 transition hover:bg-primary-50 hover:text-primary-600">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a href="{{ route('blog') }}" @click="open = false" class="block rounded-lg px-4 py-3.5 text-base font-medium text-slate-700 transition hover:bg-primary-50 hover:text-primary-600">Berita</a>
                </li>
            @else
                <li>
                    <a href="{{ route('home') }}" @click="open = false" class="block rounded-lg px-4 py-3.5 text-base font-medium text-slate-700 transition hover:bg-primary-50 hover:text-primary-600">Beranda</a>
                </li>
                @if ($isBlog)
                    <li>
                        <a href="{{ route('blog') }}" @click="open = false" class="block rounded-lg bg-primary-50 px-4 py-3.5 text-base font-medium text-primary-700 transition hover:bg-primary-100">Berita</a>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</header>

@if ($isHome)
    <script>
        window.scrollToSection = function (id) {
            const el = document.getElementById(id);
            if (! el) return;

            const offset = 96;
            const targetY = el.getBoundingClientRect().top + window.scrollY - offset;
            const startY = window.scrollY;
            const distance = targetY - startY;
            const duration = 700;
            let startTime = null;

            function easeOutCubic(t) {
                return 1 - Math.pow(1 - t, 3);
            }

            function step(currentTime) {
                if (startTime === null) startTime = currentTime;
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                window.scrollTo(0, startY + distance * easeOutCubic(progress));

                if (progress < 1) {
                    requestAnimationFrame(step);
                }
            }

            requestAnimationFrame(step);
            history.replaceState(null, '', window.location.pathname);
        };

        document.addEventListener('DOMContentLoaded', () => {
            const hash = window.location.hash.slice(1);
            if (hash) {
                setTimeout(() => scrollToSection(hash), 100);
            }
        });
    </script>
@endif
