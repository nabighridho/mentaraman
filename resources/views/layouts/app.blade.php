<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Profil Desa Mentaraman, Kecamatan Donomulyo, Kabupaten Malang. Kearifan Agraris, Jejak Mentaraman.">
    <meta name="keywords" content="Desa Mentaraman, Donomulyo, Malang, KKN UM, Profil Desa">
    <title>@yield('title', 'Desa Mentaraman') — Kec. Donomulyo, Kab. Malang</title>

    <!-- Open Graph / Facebook SEO Metadata -->
    <meta property="og:title" content="@yield('title', 'Desa Mentaraman') — Kec. Donomulyo, Kab. Malang">
    <meta property="og:description" content="Portal profil resmi Desa Mentaraman, Donomulyo, Malang. Jelajahi keindahan terasering agraris dan pesisir Pantai Jonggring Saloko secara interaktif.">
    <meta property="og:image" content="{{ asset('images/logo-kkn.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Desa Mentaraman') — Kec. Donomulyo, Kab. Malang">
    <meta name="twitter:description" content="Portal profil resmi Desa Mentaraman, Donomulyo, Malang.">
    <meta name="twitter:image" content="{{ asset('images/logo-kkn.png') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body style="overflow:hidden;">

    {{-- LOADING SCREEN --}}
    <div class="page-loader" id="pageLoader">
        <img src="{{ asset('images/logo-kkn.png') }}" alt="Loading..." class="loader-logo">
        <div class="loader-text">Desa Mentaraman</div>
        <div class="loader-subtext">Kearifan Agraris, Jejak Mentaraman</div>
        <div class="loader-bar-wrap">
            <div class="loader-bar" id="loaderBar"></div>
        </div>
        <div class="loader-percentage" id="loaderPercentage">0%</div>
    </div>

    {{-- PAGE TRANSITION (Smart TV - Starts closed/entering) --}}
    <div class="page-transition entering" id="pageTransition">
        <div class="tv-half"></div>
        <div class="tv-line"></div>
        <div class="tv-half"></div>
    </div>

    {{-- NAVBAR --}}
    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="/" class="nav-brand">
                <img src="{{ asset('images/logo-kkn.png') }}" alt="Logo KKN UM BBM" onerror="this.style.background='linear-gradient(135deg,#4A6741,#5C4033)';this.alt='Logo'">
                <div class="nav-brand-text">
                    Desa Mentaraman
                    <span>Kec. Donomulyo, Kab. Malang</span>
                </div>
            </a>

            <div class="nav-links" id="navLinks">
                <a href="/">Beranda</a>
                <a href="/visi-misi">Visi & Misi</a>
                <a href="/sejarah">Sejarah</a>
                <a href="/karakteristik">Karakteristik</a>
                <a href="/kegiatan">Kegiatan</a>
                <a href="/pendidikan">Pendidikan</a>
                <a href="/pojok-baca">Pojok Baca</a>
            </div>

            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h4>Desa Mentaraman</h4>
                    <p>Kecamatan Donomulyo, Kabupaten Malang, Jawa Timur.<br>Kearifan Agraris, Jejak Mentaraman.</p>
                    <div class="footer-logos">
                        <img src="{{ asset('images/logo-kkn.png') }}" alt="Logo KKN UM BBM" onerror="this.style.background='rgba(255,255,255,0.15)'">
                        <img src="{{ asset('images/logo-um.png') }}" alt="Logo Universitas Negeri Malang" onerror="this.style.background='rgba(255,255,255,0.15)'">
                    </div>
                </div>
                <div>
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/visi-misi">Visi & Misi</a></li>
                        <li><a href="/sejarah">Sejarah</a></li>
                        <li><a href="/karakteristik">Karakteristik</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Informasi</h4>
                    <ul>
                        <li><a href="/kegiatan">Kegiatan</a></li>
                        <li><a href="/pendidikan">Pendidikan</a></li>
                        <li><a href="/pojok-baca">Pojok Baca</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Program KKN</h4>
                    <ul>
                        <li><a href="#">KKN Kelompok 2</a></li>
                        <li><a href="#">Universitas Negeri Malang</a></li>
                        <li><a href="#">UM BBM Mentaraman</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Desa Mentaraman — KKN Kelompok 2, Universitas Negeri Malang. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- GSAP, ScrollTrigger, Lenis Smooth Scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.9/dist/lenis.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
