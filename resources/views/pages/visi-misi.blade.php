@extends('layouts.app')
@section('title', 'Visi & Misi')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Visi & Misi Desa</h1>
        <p>Arah dan tujuan pembangunan Desa Mentaraman menuju masyarakat yang sejahtera</p>
        <div class="breadcrumb">
            <a href="/">Beranda</a> / <span>Visi & Misi</span>
        </div>
    </div>
</div>

<section class="section section-cream">
    <div class="container">
        <div class="visi-misi-wrapper">
            <div class="visi-box fade-in-left">
                <h3>Visi</h3>
                <p style="font-size:1.15rem;line-height:1.9;">
                    Terwujudnya Desa Mentaraman yang maju, mandiri, dan sejahtera berlandaskan kearifan lokal dan nilai-nilai budaya Mataraman untuk kesejahteraan seluruh masyarakat.
                </p>
                <div style="margin-top:24px;padding-top:20px;border-top:1px solid rgba(255,255,255,0.15);">
                    <p style="font-style:italic;opacity:0.85;font-size:0.95rem;">
                        "Kearifan Agraris, Jejak Mataraman"
                    </p>
                </div>
            </div>
            <div class="misi-box fade-in-right">
                <h3>Misi</h3>
                <ol>
                    <li>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan yang berkelanjutan</li>
                    <li>Mengembangkan potensi pertanian, perkebunan, dan ekonomi kreatif masyarakat desa</li>
                    <li>Melestarikan budaya dan kearifan lokal Mataraman sebagai identitas desa</li>
                    <li>Meningkatkan infrastruktur dan pelayanan publik untuk kemudahan akses masyarakat</li>
                    <li>Mewujudkan tata kelola pemerintahan desa yang transparan, akuntabel, dan partisipatif</li>
                    <li>Meningkatkan kesejahteraan masyarakat melalui program-program pemberdayaan</li>
                    <li>Membangun sinergitas antar lembaga desa dan masyarakat untuk pembangunan berkelanjutan</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Nilai-Nilai Desa</h2>
        </div>
        <div class="grid-4">
            <div class="stat-item scale-in animate-delay-1">
                <div style="margin-bottom:12px;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--gold-light)" stroke-width="1.5"><path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66L17 8z"/><path d="M12.73 2.4A4.67 4.67 0 0 1 17 6.13"/><path d="M7.54 7.72A4.67 4.67 0 0 0 12.27 12.45"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--gold-light);margin-bottom:8px;">Kearifan Lokal</h3>
                <p style="font-size:0.85rem;opacity:0.7;">Menjaga dan melestarikan tradisi warisan leluhur</p>
            </div>
            <div class="stat-item scale-in animate-delay-2">
                <div style="margin-bottom:12px;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--gold-light)" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--gold-light);margin-bottom:8px;">Gotong Royong</h3>
                <p style="font-size:0.85rem;opacity:0.7;">Semangat kebersamaan dalam setiap kegiatan</p>
            </div>
            <div class="stat-item scale-in animate-delay-3">
                <div style="margin-bottom:12px;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--gold-light)" stroke-width="1.5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--gold-light);margin-bottom:8px;">Pendidikan</h3>
                <p style="font-size:0.85rem;opacity:0.7;">Mengutamakan ilmu pengetahuan dan keterampilan</p>
            </div>
            <div class="stat-item scale-in animate-delay-4">
                <div style="margin-bottom:12px;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--gold-light)" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--gold-light);margin-bottom:8px;">Berkelanjutan</h3>
                <p style="font-size:0.85rem;opacity:0.7;">Pembangunan yang ramah lingkungan</p>
            </div>
        </div>
    </div>
</section>

@endsection
