@extends('layouts.app')
@section('title', 'Karakteristik Desa')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Karakteristik Desa</h1>
        <p>Potensi dan keunikan Desa Mentaraman, Kecamatan Donomulyo, Kabupaten Malang</p>
        <div class="breadcrumb">
            <a href="/">Beranda</a> / <span>Karakteristik</span>
        </div>
    </div>
</div>

<section class="section section-cream">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Geografi & Demografi</h2>
        </div>
        <div class="grid-2">
            <div class="card fade-in-left">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z"/></svg>
                </div>
                <h3>Letak Geografis</h3>
                <p>Terletak di Malang Selatan, topografi terdiri dari lembah dan perbukitan, membentang dari dataran tinggi hingga pesisir Samudera Hindia (Pantai Jonggring Saloko). Berjarak ±70 km dari pusat Kota Malang.</p>
                <ul style="margin-top:16px;list-style:disc;padding-left:20px;color:rgba(255, 255, 255, 0.85);font-size:0.93rem;line-height:2;">
                    <li>Luas Wilayah: ±15,12 km²</li>
                    <li>Ketinggian: ±300 mdpl</li>
                    <li>Suhu rata-rata: 18–27°C</li>
                    <li>Curah hujan: Sedang (tropis)</li>
                    <li>Kode Wilayah: 35.07.01.2009</li>
                    <li>Kode Pos: 65167</li>
                </ul>
            </div>
            <div class="card fade-in-right">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>Demografi & Administrasi</h3>
                <p>Mayoritas bermata pencaharian sebagai petani, pekebun, dan nelayan pesisir. Budaya Mataraman masih kental dalam kehidupan sehari-hari masyarakat desa.</p>
                <ul style="margin-top:16px;list-style:disc;padding-left:20px;color:rgba(255, 255, 255, 0.85);font-size:0.93rem;line-height:2;">
                    <li>Jumlah penduduk: ±5.810 jiwa</li>
                    <li>Kepala Desa: Wasito Hadi</li>
                    <li>3 Dusun: Mentaraman, Gondangrejo, Gondangtowo</li>
                    <li>9 RW dan 33 RT</li>
                    <li>Batas Utara: Desa Donomulyo</li>
                    <li>Batas Selatan: Samudera Hindia</li>
                    <li>Batas Barat: Desa Purwodadi</li>
                    <li>Batas Timur: Desa Kedungsalam</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-ivory">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Potensi Unggulan</h2>
            <p>Ragam sumber daya alam, budaya, dan ekonomi yang dimiliki Desa Mentaraman.</p>
        </div>
        <div class="grid-3">
            <div class="card scale-in animate-delay-1">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Pertanian</h3>
                <p>Padi, jagung, palawija, tembakau, dan tebu menjadi komoditas utama perekonomian masyarakat agraris desa.</p>
            </div>
            <div class="card scale-in animate-delay-2">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66L17 8z"/><path d="M12.73 2.4A4.67 4.67 0 0 1 17 6.13"/></svg>
                </div>
                <h3>Perkebunan & UMKM</h3>
                <p>Kelapa, kopi, coklat, cengkeh, dan sengon. Gula kelapa murni menjadi produk UMKM unggulan lokal yang bernilai ekonomi tinggi.</p>
            </div>
            <div class="card scale-in animate-delay-3">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                </div>
                <h3>Budaya Mataraman</h3>
                <p>Kesenian karawitan, tarian tradisional, tradisi Larung Sesaji, ritual Suroan, dan mantra pertanian lokal yang masih lestari.</p>
            </div>
            <div class="card scale-in animate-delay-1">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Pantai Jonggring Saloko</h3>
                <p>Pesona pesisir selatan dengan fenomena <em>Watu Ngebros</em>, tebing karang, spot camping, dan sungai air tawar bermuara ke laut.</p>
            </div>
            <div class="card scale-in animate-delay-2">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z"/><path d="M13 13l6 6"/></svg>
                </div>
                <h3>Kehutanan (Perhutani)</h3>
                <p>Kawasan hutan lindung yang dikelola Perum Perhutani, menjadi paru-paru hijau, sumber kayu rakyat (jati, sengon), dan habitat flora-fauna.</p>
            </div>
            <div class="card scale-in animate-delay-3">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <h3>Perikanan Pesisir</h3>
                <p>Nelayan pesisir dengan KUB (Kelompok Usaha Bersama) dan Pokmaswas yang menjaga kelestarian habitat penyu dan ekosistem laut.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Wilayah Administratif</h2>
        </div>
        <div class="stats-row">
            <div class="stat-item scale-in animate-delay-1">
                <div class="stat-number" data-target="3">0</div>
                <div class="stat-label">Dusun</div>
            </div>
            <div class="stat-item scale-in animate-delay-2">
                <div class="stat-number" data-target="9">0</div>
                <div class="stat-label">Rukun Warga</div>
            </div>
            <div class="stat-item scale-in animate-delay-3">
                <div class="stat-number" data-target="33">0</div>
                <div class="stat-label">Rukun Tetangga</div>
            </div>
            <div class="stat-item scale-in animate-delay-4">
                <div class="stat-number" data-target="4">0</div>
                <div class="stat-label">SD Negeri</div>
            </div>
        </div>
    </div>
</section>

@endsection
