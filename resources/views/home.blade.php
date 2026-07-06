@extends('layouts.app')
@section('title', 'Beranda')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/immersive.css') }}">
    <style>
        /* Typography refinements */
        .text-gradient-gold {
            background: linear-gradient(135deg, var(--gold-accent), var(--gold-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Premium overlay assets styling */
        .potensi-card-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition-normal);
        }

        .card:hover .potensi-card-img {
            transform: scale(1.03);
            border-color: var(--gold-accent);
        }
    </style>
@endpush

@section('content')

    {{-- MODERN PARALLAX HERO --}}
    <section class="parallax-hero">
        <div class="parallax-viewport">
            <!-- Layer 1: Deep sky gradient -->
            <div class="parallax-layer layer-sky"></div>

            <!-- Layer 2: Subtle starfield (JS populated) -->
            <div class="parallax-layer layer-stars"></div>

            <!-- Layer 3: Glowing sun/moon orb -->
            <div class="parallax-layer layer-sun"></div>

            <!-- Layer 4: Soft gradient clouds -->
            <div class="parallax-layer layer-clouds"></div>

            <!-- Layer 5: Village illustration (PNG) — far background -->
            <div class="parallax-layer layer-mountains-far" style="background-image: url('{{ asset('images/mentaraman_village.png') }}'); background-size: cover; background-position: center 70%; opacity: 0.25;"></div>

            <!-- Layer 6: Gradient terrain silhouette -->
            <div class="parallax-layer layer-mountains-near"></div>

            <!-- Layer 7: Beach illustration (PNG) — mid-ground -->
            <div class="parallax-layer layer-village" style="background-image: url('{{ asset('images/mentaraman_beach.png') }}'); background-size: cover; background-position: center bottom; opacity: 0.2;"></div>

            <!-- Layer 8: Bottom gradient fade -->
            <div class="parallax-layer layer-beach"></div>

            <!-- Layer 9: Vignette frame -->
            <div class="parallax-layer layer-trees"></div>

            <!-- Atmospheric mist -->
            <div class="parallax-layer layer-mist"></div>

            <!-- Hero Content -->
            <div class="hero-content-overlay">
                <img src="{{ asset('images/logo-kkn.png') }}" alt="Logo KKN UM Mentaraman" class="hero-logo">
                <h1 class="hero-main-title">Desa Mentaraman</h1>
                <p class="hero-tagline">Kearifan Agraris & Pesisir Bahari</p>
                <p class="hero-loc">Kec. Donomulyo &bull; Kab. Malang &bull; Jawa Timur</p>
                <a href="#tentang" class="hero-cta-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    Jelajahi Desa
                </a>
            </div>
        </div>

        <div class="scroll-down-indicator">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="rgba(255,246,224,0.7)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 13l5 5 5-5M7 6l5 5 5-5"/></svg>
        </div>
    </section>

    {{-- MENGENAL DESA --}}
    <section class="section section-cream cinema-section" id="tentang" style="padding-top: 150px;">
        <div class="container section-content">
            <div class="section-header cinema-reveal">
                <h2>Mengenal Desa Mentaraman</h2>
                <p>Sebuah desa kaya sejarah yang membentang dari perbukitan sejuk Donomulyo hingga pesisir mistis Samudera Hindia.</p>
            </div>

            <div class="grid-2" style="gap:48px; align-items:center;">
                <div class="cinema-reveal-left" style="line-height:1.9; font-size:1.05rem; color:var(--brown-accent);">
                    <p style="margin-bottom:18px;">
                        Nama <strong>&ldquo;Mentaraman&rdquo;</strong> berakar dari kata <em>Mataraman</em>. Menelusuri
                        sejarah, wilayah ini dibuka oleh para pelarian dan pengikut Kerajaan Mataram Islam pada era 1800-an
                        yang melakukan babat alas di perbukitan selatan Malang demi memulai peradaban baru yang berdaulat.
                    </p>
                    <p style="margin-bottom:18px;">
                        Kini, Mentaraman berdiri anggun di ketinggian <strong>&plusmn;300 mdpl</strong>. Lanskap geografisnya
                        sangat unik, memadukan hijaunya hutan tropis Perhutani, suburnya hamparan sawah terasering agraris,
                        hingga deburan ombak eksotis dari <strong>Pantai Jonggring Saloko</strong> di pesisir selatan Jawa.
                    </p>

                    <!-- Border cards details -->
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-top:28px;">
                        <div class="card glass-card-light" style="padding:16px; border-left:4px solid var(--forest-mid) !important;">
                            <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px; color:var(--forest-mid); font-weight:700;">Batas Utara</span>
                            <p style="margin:4px 0 0; font-size:0.95rem; font-weight:600;">Desa Donomulyo</p>
                        </div>
                        <div class="card glass-card-light" style="padding:16px; border-left:4px solid var(--gold-accent) !important;">
                            <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px; color:var(--gold-accent); font-weight:700;">Batas Selatan</span>
                            <p style="margin:4px 0 0; font-size:0.95rem; font-weight:600;">Samudera Hindia</p>
                        </div>
                        <div class="card glass-card-light" style="padding:16px; border-left:4px solid var(--earth-warm) !important;">
                            <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px; color:var(--earth-warm); font-weight:700;">Batas Barat</span>
                            <p style="margin:4px 0 0; font-size:0.95rem; font-weight:600;">Desa Purwodadi</p>
                        </div>
                        <div class="card glass-card-light" style="padding:16px; border-left:4px solid var(--brown-accent) !important;">
                            <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px; color:var(--brown-accent); font-weight:700;">Batas Timur</span>
                            <p style="margin:4px 0 0; font-size:0.95rem; font-weight:600;">Desa Kedungsalam</p>
                        </div>
                    </div>
                </div>

                <!-- Interaktif 3D Tilt Stats Cards Grid -->
                <div class="grid-2 cinema-reveal-right" style="gap:20px;">
                    <div class="card glass-card-light" style="text-align:center; padding:35px 20px;">
                        <div class="card-icon" style="margin:0 auto 16px;">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3 style="font-size:2.2rem; color:var(--forest-mid); margin-bottom:4px; font-weight:800;">5.810</h3>
                        <p style="font-size:0.85rem; font-weight:700; color:var(--text-dark);">Jiwa Penduduk</p>
                    </div>
                    <div class="card glass-card-light" style="text-align:center; padding:35px 20px;">
                        <div class="card-icon" style="margin:0 auto 16px; background:linear-gradient(135deg, var(--gold), var(--gold-light));">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="10" r="3" />
                                <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z" />
                            </svg>
                        </div>
                        <h3 style="font-size:2.2rem; color:var(--forest-mid); margin-bottom:4px; font-weight:800;">3</h3>
                        <p style="font-size:0.85rem; font-weight:700; color:var(--text-dark);">Dusun Utama</p>
                    </div>
                    <div class="card glass-card-light" style="text-align:center; padding:35px 20px;">
                        <div class="card-icon" style="margin:0 auto 16px; background:linear-gradient(135deg, var(--earth-warm), var(--earth-light));">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 21h18" />
                                <path d="M5 21V7l7-4 7 4v14" />
                                <path d="M9 21v-4h6v4" />
                            </svg>
                        </div>
                        <h3 style="font-size:2.2rem; color:var(--forest-mid); margin-bottom:4px; font-weight:800;">9 / 33</h3>
                        <p style="font-size:0.85rem; font-weight:700; color:var(--text-dark);">Rukun Warga / RT</p>
                    </div>
                    <div class="card glass-card-light" style="text-align:center; padding:35px 20px;">
                        <div class="card-icon" style="margin:0 auto 16px; background:linear-gradient(135deg, var(--brown-accent), var(--earth-mid));">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                            </svg>
                        </div>
                        <h3 style="font-size:1.5rem; color:var(--forest-mid); margin-bottom:4px; font-weight:800;">&plusmn;300 mdpl</h3>
                        <p style="font-size:0.85rem; font-weight:700; color:var(--text-dark);">Ketinggian Wilayah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- DUA SISI MENTARAMAN (THEME TOGGLE SECTION) --}}
    <section class="dual-theme-section theme-agraris" id="dua-sisi">
        <div class="container">
            <div class="section-header cinema-reveal">
                <h2 style="color: #fff;">Dua Sisi Karakteristik Mentaraman</h2>
                <p style="color: rgba(255, 255, 255, 0.7); max-width: 700px; margin:0 auto;">
                    Dua potensi ekosistem utama yang bersatu membentuk keselarasan ekonomi dan pariwisata lokal yang harmonis.
                </p>
            </div>

            <!-- Custom Switcher Control -->
            <div class="theme-switcher-container cinema-reveal">
                <div class="theme-switcher-track">
                    <div class="theme-switcher-pill"></div>
                    <button class="theme-switcher-btn active" id="btnThemeAgraris">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                        Sisi Bukit Agraris
                    </button>
                    <button class="theme-switcher-btn" id="btnThemeBahari">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M2 12h20M2 12c4-2 8-2 12 0s8 2 12 0"/>
                        </svg>
                        Sisi Pesisir Bahari
                    </button>
                </div>
            </div>

            <!-- Dual Design Cards Grid -->
            <div class="dual-grid">
                <!-- Card 1: Agraris Style -->
                <div class="dual-design-card card-left cinema-reveal-left">
                    <div>
                        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: var(--agraris-accent); font-weight: 800; display: block; margin-bottom: 8px;">KAWASAN PERBUKITAN</span>
                        <h3 class="dual-card-title">Bukit Agraris</h3>
                        <p class="dual-card-desc">
                            Tanah pegunungan karst yang subur menghasilkan aneka komoditas perkebunan, kelapa murni, kopi robusta, dan penyulingan gula merah kelapa tradisional berkualitas tinggi.
                        </p>
                        <div class="dual-card-features">
                            <div class="dual-feature-item">
                                <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Perkebunan Kelapa & Sawit Produktif</span>
                            </div>
                            <div class="dual-feature-item">
                                <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Sentra Gula Kelapa & Kopi Robusta</span>
                            </div>
                            <div class="dual-feature-item">
                                <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Tradisi Terasering Sawah Subur</span>
                            </div>
                        </div>
                    </div>
                    <a href="/karakteristik" class="dual-card-btn">Jelajahi Agraris &rarr;</a>
                </div>

                <!-- Card 2: Bahari Style -->
                <div class="dual-design-card card-right cinema-reveal-right">
                    <div>
                        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: var(--bahari-accent); font-weight: 800; display: block; margin-bottom: 8px;">KAWASAN SAMUDERA</span>
                        <h3 class="dual-card-title">Pesisir Bahari</h3>
                        <p class="dual-card-desc">
                            Kawasan selatan yang berbatasan langsung dengan Samudera Hindia, menghidupi nelayan lokal dengan kekayaan ikan laut segar dan menghadirkan destinasi wisata Pantai Jonggring Saloko.
                        </p>
                        <div class="dual-card-features">
                            <div class="dual-feature-item">
                                <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Ekowisata Pantai Jonggring Saloko</span>
                            </div>
                            <div class="dual-feature-item">
                                <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Semburan Ombak Ajaib Watu Ngebros</span>
                            </div>
                            <div class="dual-feature-item">
                                <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Pendaratan Penyu Laut & Perikanan Tangkap</span>
                            </div>
                        </div>
                    </div>
                    <a href="/karakteristik" class="dual-card-btn">Jelajahi Pesisir &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- CINEMATIC IMAGE SCROLL EXPERIENCE --}}
    <section class="scrub-section" id="cinematic-scrub">
        <div class="sticky-video-container">
            <!-- Image-based cinematic panels (always visible, clean fallback) -->
            <div class="scrub-image-panels">
                <div class="scrub-panel scrub-panel-1" style="background-image: url('{{ asset('images/mentaraman_merged.png') }}');"></div>
                <div class="scrub-panel scrub-panel-2" style="background-image: url('{{ asset('images/mentaraman_village.png') }}');"></div>
                <div class="scrub-panel scrub-panel-3" style="background-image: url('{{ asset('images/mentaraman_beach.png') }}');"></div>
            </div>

            <!-- Dim Overlay -->
            <div class="scrub-overlay"></div>

            <!-- Sequence Captions -->
            <div class="scrub-caption-container">
                <div class="scrub-caption" id="caption1">
                    <h2>Jejak Panjang Peradaban</h2>
                    <p>Mentaraman lahir dari kisah perjuangan pembuka lahan asal Kerajaan Mataram Islam pada abad ke-19.</p>
                </div>
                <div class="scrub-caption" id="caption2">
                    <h2>Terasering Bukit Agraris</h2>
                    <p>Lanskap perbukitan hijau subur yang menghasilkan kelapa murni, kopi beraroma khas, dan gula kelapa alami.</p>
                </div>
                <div class="scrub-caption" id="caption3">
                    <h2>Gerbang Eksotis Samudera</h2>
                    <p>Deburan ombak di Pantai Jonggring Saloko dengan semburan karang legendaris Watu Ngebros.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- STATISTIK (CINEMATIC COUNTERS) --}}
    <section class="section section-dark cinema-section" id="statistik" style="background: linear-gradient(180deg, #050b10 0%, #0d1b24 100%);">
        <div class="container section-content">
            <div class="section-header cinema-reveal">
                <h2>Mentaraman dalam Angka</h2>
                <p style="color:rgba(255,255,255,0.65);">Statistik resmi kependudukan dan sarana administratif Desa Mentaraman.</p>
            </div>

            <div class="stats-row">
                <div class="stat-item cinema-reveal-scale stagger-1" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="stat-number" data-target="5810">0</div>
                    <div class="stat-label">Total Jiwa Penduduk</div>
                </div>
                <div class="stat-item cinema-reveal-scale stagger-2" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="stat-number" data-target="9">0</div>
                    <div class="stat-label">Rukun Warga (RW)</div>
                </div>
                <div class="stat-item cinema-reveal-scale stagger-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="stat-number" data-target="33">0</div>
                    <div class="stat-label">Rukun Tetangga (RT)</div>
                </div>
                <div class="stat-item cinema-reveal-scale stagger-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="stat-number" data-target="4">0</div>
                    <div class="stat-label">SD Negeri Terakreditasi</div>
                </div>
            </div>
        </div>
    </section>

    {{-- POTENSI UNGGULAN --}}
    <section class="section section-ivory cinema-section" id="potensi" style="padding-top: 140px;">
        <div class="container section-content">
            <div class="section-header cinema-reveal">
                <h2>Kekayaan & Potensi Desa</h2>
                <p>Harmoni ekosistem alam pegunungan dan pantai selatan yang melahirkan komoditas unggulan berkualitas.</p>
            </div>

            <div class="grid-3">
                <!-- Card 1: Agrikultur -->
                <div class="card glass-card-light potensi-card-1 cinema-reveal-scale stagger-1" style="padding: 24px; border-radius: 20px;">
                    <img src="{{ asset('images/mentaraman_village.png') }}" alt="Sektor Agraris Mentaraman" class="potensi-card-img">
                    <span class="potensi-badge">Sektor Agraris</span>
                    <h3 style="font-weight: 800; font-size: 1.3rem; margin-bottom: 12px; color: var(--forest-dark);">
                        Agrikultur & Kelapa Murni
                    </h3>
                    <p style="font-size: 0.92rem; line-height: 1.8; color: #555;">
                        Padi terasering subur, kopi robusta, kelapa segar, coklat, tembakau, serta produksi gula kelapa murni yang didistribusikan ke berbagai daerah.
                    </p>
                </div>

                <!-- Card 2: Wisata Pantai -->
                <div class="card glass-card-light potensi-card-2 cinema-reveal-scale stagger-2" style="padding: 24px; border-radius: 20px;">
                    <img src="{{ asset('images/mentaraman_beach.png') }}" alt="Kawasan Pantai Jonggring Saloko" class="potensi-card-img">
                    <span class="potensi-badge">Ekowisata Bahari</span>
                    <h3 style="font-weight: 800; font-size: 1.3rem; margin-bottom: 12px; color: #8b6e20;">
                        Wisata Pantai Jonggring Saloko
                    </h3>
                    <p style="font-size: 0.92rem; line-height: 1.8; color: #555;">
                        Pantai selatan mistis yang terkenal dengan fenomena alam <strong>Watu Ngebros</strong> (semburan air dari karang) serta penangkaran penyu laut alami.
                    </p>
                </div>

                <!-- Card 3: Budaya -->
                <div class="card glass-card-light potensi-card-3 cinema-reveal-scale stagger-3" style="padding: 24px; border-radius: 20px;">
                    <img src="{{ asset('images/mentaraman_merged.png') }}" alt="Upacara Adat Larung Sesaji" class="potensi-card-img">
                    <span class="potensi-badge">Warisan Budaya</span>
                    <h3 style="font-weight: 800; font-size: 1.3rem; margin-bottom: 12px; color: var(--brown-accent);">
                        Budaya Larung Sesaji
                    </h3>
                    <p style="font-size: 0.92rem; line-height: 1.8; color: #555;">
                        Upacara ritual adat masyarakat pesisir pantai sebagai perwujudan rasa syukur atas berkah hasil laut dan bumi yang melimpah secara turun temurun.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- WILAYAH ADMINISTRATIF (REACT INTERACTIVE EXPLORER) --}}
    <section class="section section-cream cinema-section" id="dusun" style="padding: 120px 0;">
        <div class="container section-content">
            <div class="section-header cinema-reveal">
                <h2>Wilayah Administratif Dusun</h2>
                <p>Klik nama Dusun di bawah untuk menjelajahi potensi ekonomi, demografi, dan karakteristik setiap kawasan secara interaktif.</p>
            </div>

            <!-- React Mount Point -->
            <div id="dusun-explorer-root" class="cinema-reveal">
                <!-- Fallback loading state -->
                <div style="text-align: center; padding: 40px; color: var(--brown-accent); font-weight: 600;">
                    Memuat Modul Dusun Explorer...
                </div>
            </div>
        </div>
    </section>

    {{-- KEGIATAN MASYARAKAT --}}
    <section class="section section-dark cinema-section" id="kegiatan" style="background: linear-gradient(180deg, #09130d 0%, #050a08 100%); padding: 120px 0;">
        <div class="container section-content">
            <div class="section-header cinema-reveal">
                <h2>Kegiatan Masyarakat</h2>
                <p style="color:rgba(255,255,255,0.65);">Keseharian dan guyub rukun warga Desa Mentaraman dalam memupuk persaudaraan.</p>
            </div>

            <div class="grid-3">
                <div class="kegiatan-card cinema-reveal-scale stagger-1" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06); border-radius: 16px;">
                    <div class="kegiatan-img" style="background: linear-gradient(135deg, var(--forest-dark), var(--forest-mid)); height: 180px;">
                        <svg viewBox="0 0 24 24" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <div class="kegiatan-body" style="padding: 24px;">
                        <span class="schedule" style="background: var(--gold); color: #fff; border-radius: 30px; padding: 4px 12px; font-size: 0.75rem;">Setiap Jumat Malam</span>
                        <h3 style="color:#fff; font-weight:800; margin-top: 12px;">Pengajian Rutin</h3>
                        <p style="color:rgba(255,255,255,0.65); font-size:0.9rem; line-height:1.7; margin-top: 8px;">
                            Pertemuan rohani keliling masjid dusun guna mempererat tali ukhuwah islamiyah dan keimanan jamaah.
                        </p>
                    </div>
                </div>

                <div class="kegiatan-card cinema-reveal-scale stagger-2" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06); border-radius: 16px;">
                    <div class="kegiatan-img" style="background: linear-gradient(135deg, var(--gold), var(--gold-light)); height: 180px;">
                        <svg viewBox="0 0 24 24" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div class="kegiatan-body" style="padding: 24px;">
                        <span class="schedule" style="background: var(--forest-mid); color: #fff; border-radius: 30px; padding: 4px 12px; font-size: 0.75rem;">Minggu Pagi</span>
                        <h3 style="color:#fff; font-weight:800; margin-top: 12px;">Gotong Royong</h3>
                        <p style="color:rgba(255,255,255,0.65); font-size:0.9rem; line-height:1.7; margin-top: 8px;">
                            Wujud tradisi sambatan membersihkan saluran irigasi pertanian dan prasarana jalan desa.
                        </p>
                    </div>
                </div>

                <div class="kegiatan-card cinema-reveal-scale stagger-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06); border-radius: 16px;">
                    <div class="kegiatan-img" style="background: linear-gradient(135deg, var(--brown-accent), var(--earth-mid)); height: 180px;">
                        <svg viewBox="0 0 24 24" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg>
                    </div>
                    <div class="kegiatan-body" style="padding: 24px;">
                        <span class="schedule" style="background: var(--earth-warm); color: #fff; border-radius: 30px; padding: 4px 12px; font-size: 0.75rem;">Setiap Tanggal 10</span>
                        <h3 style="color:#fff; font-weight:800; margin-top: 12px;">Posyandu Bulanan</h3>
                        <p style="color:rgba(255,255,255,0.65); font-size:0.9rem; line-height:1.7; margin-top: 8px;">
                            Pemeriksaan kesehatan balita, pendataan gizi, serta imunisasi anak demi cegah stunting terpadu.
                        </p>
                    </div>
                </div>
            </div>

            <div class="cinema-reveal" style="text-align: center; margin-top: 48px;">
                <a href="/kegiatan" class="btn btn-outline" style="border-color: var(--gold-light); color: var(--gold-light);">Jelajahi Kegiatan Warga &rarr;</a>
            </div>
        </div>
    </section>

    {{-- KKN PROGRAM SPONSOR & REDIRECT --}}
    <section class="section section-ivory cinema-section" style="padding: 120px 0; text-align: center; position: relative;">
        <div class="container section-content cinema-reveal">
            <h2 style="font-size: 2.2rem; font-weight: 800; color: var(--forest-dark);">Program Kerja KKN Kelompok 2</h2>
            <p style="max-width: 650px; margin: 16px auto 36px; color: var(--brown-accent); line-height: 1.8;">
                Digitalisasi profil desa ini merupakan bentuk kontribusi nyata Kuliah Kerja Nyata (KKN) Universitas Negeri
                Malang Kelompok 2 demi mendukung keterbukaan informasi pariwisata dan administrasi Desa Mentaraman.
            </p>

            <!-- Dynamic floating animation logos -->
            <div style="display: flex; justify-content: center; gap: 32px; align-items: center; margin-bottom: 40px; flex-wrap: wrap;">
                <div class="float-anim" style="padding: 12px; background: #fff; border-radius: 50%; box-shadow: var(--shadow-md); display: flex;">
                    <img src="{{ asset('images/logo-kkn.png') }}" alt="Logo KKN UM Mentaraman" style="height: 90px; width: 90px; object-fit: contain;">
                </div>
                <div class="float-anim-delay" style="padding: 12px; background: #fff; border-radius: 50%; box-shadow: var(--shadow-md); display: flex;">
                    <img src="{{ asset('images/logo-um.png') }}" alt="Logo Universitas Negeri Malang" style="height: 90px; width: 90px; object-fit: contain;">
                </div>
            </div>

            <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                <a href="/pojok-baca" class="btn btn-primary" style="background: var(--gold); border: none; box-shadow: 0 4px 14px rgba(184, 150, 62, 0.3);">Kunjungi Pojok Baca &rarr;</a>
                <a href="/pendidikan" class="btn btn-outline" style="border-color: var(--forest-mid); color: var(--forest-mid);">Satuan Pendidikan Desa</a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <!-- React & ReactDOM CDN -->
    <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
    <!-- Babel compiler for inline script JSX -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

    <!-- Mount React Component with Babel compiler -->
    <script type="text/babel" src="{{ asset('js/dusun-explorer.js') }}"></script>

    <!-- Immersive engine (Lenis + GSAP Parallax & Scrubbing) -->
    <script src="{{ asset('js/immersive.js') }}"></script>
@endpush