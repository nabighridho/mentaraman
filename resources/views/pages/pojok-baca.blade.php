@extends('layouts.app')
@section('title', 'Pojok Baca')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Pojok Baca Mentaraman</h1>
        <p>Meningkatkan minat baca, memperluas wawasan, dan membangun masa depan gemilang</p>
        <div class="breadcrumb">
            <a href="/">Beranda</a> / <span>Pojok Baca</span>
        </div>
    </div>
</div>

{{-- TENTANG PROGRAM --}}
<section class="section section-cream">
    <div class="container">
        <div class="visi-misi-wrapper">
            <div class="visi-box fade-in-left">
                <h3 style="color:var(--gold-light); font-size:1.8rem; margin-bottom:15px;">Program KKN UM 2026</h3>
                <p style="font-size:1.05rem; line-height:1.8; opacity:0.95;">
                    Pojok Baca merupakan inisiatif program kerja KKN Kelompok 2 Universitas Negeri Malang (UM) untuk mendukung peningkatan budaya literasi masyarakat, khususnya anak-anak usia sekolah di Desa Mentaraman.
                </p>
                <p style="font-size:1.05rem; line-height:1.8; opacity:0.95; margin-top:15px;">
                    Melalui penyediaan buku bacaan yang variatif dan edukatif serta ruang baca yang nyaman, kami berharap program ini dapat menumbuhkan kecintaan membaca sejak dini.
                </p>
            </div>
            <div class="misi-box fade-in-right" style="display:flex; flex-direction:column; justify-content:center; padding:40px;">
                <h3 style="font-size:1.5rem; margin-bottom:15px;">Layanan Pojok Baca</h3>
                <ul style="list-style:none; padding:0;">
                    <li style="margin-bottom:12px; display:flex; align-items:center; gap:12px; font-size:0.95rem;">
                        <span style="background:var(--forest-mid); color:#fff; border-radius:50%; width:28px; height:28px; display:flex; align-items:center; justify-content:center; font-weight:bold; flex-shrink:0;">✓</span>
                        Akses pinjam buku gratis untuk seluruh warga desa.
                    </li>
                    <li style="margin-bottom:12px; display:flex; align-items:center; gap:12px; font-size:0.95rem;">
                        <span style="background:var(--forest-mid); color:#fff; border-radius:50%; width:28px; height:28px; display:flex; align-items:center; justify-content:center; font-weight:bold; flex-shrink:0;">✓</span>
                        Ruang baca lesehan yang bersih, sejuk, dan kondusif.
                    </li>
                    <li style="margin-bottom:12px; display:flex; align-items:center; gap:12px; font-size:0.95rem;">
                        <span style="background:var(--forest-mid); color:#fff; border-radius:50%; width:28px; height:28px; display:flex; align-items:center; justify-content:center; font-weight:bold; flex-shrink:0;">✓</span>
                        Kegiatan belajar bersama dan mendongeng kreatif berkala.
                    </li>
                    <li style="display:flex; align-items:center; gap:12px; font-size:0.95rem;">
                        <span style="background:var(--forest-mid); color:#fff; border-radius:50%; width:28px; height:28px; display:flex; align-items:center; justify-content:center; font-weight:bold; flex-shrink:0;">✓</span>
                        Penerimaan donasi buku layak baca secara berkelanjutan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- KOLEKSI BUKU --}}
<section class="section section-ivory">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Koleksi Buku Terpopuler</h2>
            <p>Pilihan buku menarik yang paling digemari oleh anak-anak dan warga Desa Mentaraman.</p>
        </div>

        <div class="grid-3">
            <div class="baca-card scale-in animate-delay-1">
                <div class="baca-cover">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                </div>
                <div class="baca-body">
                    <span class="category">Fiksi & Sastra</span>
                    <h3>Laskar Pelangi</h3>
                    <p style="font-size:0.8rem; color:#8b6914; margin-bottom:8px; font-weight:600;">Penulis: Andrea Hirata</p>
                    <p>Kisah perjuangan sepuluh anak Belitong dalam mengejar mimpi melalui pendidikan.</p>
                </div>
            </div>

            <div class="baca-card scale-in animate-delay-2">
                <div class="baca-cover">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                </div>
                <div class="baca-body">
                    <span class="category">Pengetahuan Umum</span>
                    <h3>Ensiklopedia Sains Anak</h3>
                    <p style="font-size:0.8rem; color:#8b6914; margin-bottom:8px; font-weight:600;">Penulis: Tim Edukasi Nasional</p>
                    <p>Penjelasan interaktif tentang alam semesta, tubuh manusia, dan teknologi mutakhir.</p>
                </div>
            </div>

            <div class="baca-card scale-in animate-delay-3">
                <div class="baca-cover">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"><path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66L17 8z"/><path d="M12.73 2.4A4.67 4.67 0 0 1 17 6.13"/></svg>
                </div>
                <div class="baca-body">
                    <span class="category">Pertanian & Kebun</span>
                    <h3>Bercocok Tanam Modern</h3>
                    <p style="font-size:0.8rem; color:#8b6914; margin-bottom:8px; font-weight:600;">Penulis: Dr. Ir. Suprapto, M.P.</p>
                    <p>Panduan memaksimalkan hasil perkebunan dengan metode ramah lingkungan.</p>
                </div>
            </div>

            <div class="baca-card scale-in animate-delay-1">
                <div class="baca-cover">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <div class="baca-body">
                    <span class="category">Keagamaan</span>
                    <h3>Kisah Teladan Wali Songo</h3>
                    <p style="font-size:0.8rem; color:#8b6914; margin-bottom:8px; font-weight:600;">Penulis: KH. Zainal Arifin</p>
                    <p>Cerita perjuangan dakwah Wali Songo di tanah Jawa yang sarat akan nilai toleransi.</p>
                </div>
            </div>

            <div class="baca-card scale-in animate-delay-2">
                <div class="baca-cover">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="baca-body">
                    <span class="category">Buku Anak</span>
                    <h3>Dongeng Nusantara Bergambar</h3>
                    <p style="font-size:0.8rem; color:#8b6914; margin-bottom:8px; font-weight:600;">Penulis: Kak Seto</p>
                    <p>Koleksi cerita rakyat Nusantara dengan ilustrasi penuh warna tentang kejujuran.</p>
                </div>
            </div>

            <div class="baca-card scale-in animate-delay-3">
                <div class="baca-cover">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                </div>
                <div class="baca-body">
                    <span class="category">Ekonomi & UMKM</span>
                    <h3>Kewirausahaan Desa Mandiri</h3>
                    <p style="font-size:0.8rem; color:#8b6914; margin-bottom:8px; font-weight:600;">Penulis: Prof. Rhenald Kasali</p>
                    <p>Strategi merintis usaha mikro dengan produk unggulan lokal desa bernilai jual tinggi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- JADWAL DAN DONASI --}}
<section class="section section-dark">
    <div class="container">
        <div class="grid-2">
            <div class="card fade-in-left" style="background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.15); color:var(--text-light);">
                <div style="margin-bottom:15px;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--gold-light)" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h3 style="font-size:1.4rem; color:var(--gold-light); margin-bottom:12px;">Jadwal Operasional</h3>
                <p style="opacity:0.9; line-height:1.7;">
                    Pojok Baca dibuka setiap hari untuk seluruh warga Desa Mentaraman:
                </p>
                <ul style="margin-top:12px; list-style:none; padding:0; opacity:0.85;">
                    <li>• Senin - Jumat: 13.00 - 16.00 WIB</li>
                    <li>• Sabtu - Minggu: 09.00 - 15.00 WIB</li>
                </ul>
            </div>
            <div class="card fade-in-right" style="background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.15); color:var(--text-light);">
                <div style="margin-bottom:15px;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--gold-light)" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                </div>
                <h3 style="font-size:1.4rem; color:var(--gold-light); margin-bottom:12px;">Gerakan Donasi Buku</h3>
                <p style="opacity:0.9; line-height:1.7;">
                    Kami mengajak Bapak/Ibu untuk mendonasikan buku bacaan layak pakai demi memperkaya koleksi literasi Pojok Baca.
                </p>
                <p style="margin-top:12px; font-weight:600; color:var(--gold-light);">
                    Hubungi Sekretariat KKN Kelompok 2 UM di Balai Desa Mentaraman.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
