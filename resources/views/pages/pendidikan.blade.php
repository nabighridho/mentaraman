@extends('layouts.app')
@section('title', 'Satuan Pendidikan')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Satuan Pendidikan</h1>
        <p>Lembaga pendidikan formal dan non-formal di Desa Mentaraman</p>
        <div class="breadcrumb">
            <a href="/">Beranda</a> / <span>Pendidikan</span>
        </div>
    </div>
</div>

<section class="section section-cream">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Lembaga Pendidikan Desa</h2>
            <p>Mendukung kecerdasan generasi penerus bangsa melalui akses pendidikan berkualitas dari usia dini hingga menengah.</p>
        </div>

        <div class="grid-2">
            <div class="pendidikan-card scale-in animate-delay-1">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>PAUD Harapan Bangsa</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Pendidikan Anak Usia Dini • Dusun Krajan</p>
                    <p>Lembaga pendidikan usia dini yang berfokus pada perkembangan motorik, sensorik, dan interaksi sosial dasar anak.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in animate-delay-2">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>TK Mentaraman</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Taman Kanak-Kanak • Dusun Krajan</p>
                    <p>Pendidikan pra-sekolah dasar yang menekankan pada pembentukan karakter, kreativitas, dan persiapan belajar.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in animate-delay-1">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-4h6v4"/><path d="M9 9h1"/><path d="M14 9h1"/><path d="M9 13h1"/><path d="M14 13h1"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>SDN 1 Mentaraman</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Sekolah Dasar Negeri • Dusun Mentaraman</p>
                    <p>Sekolah dasar negeri utama di pusat Desa Mentaraman dengan fasilitas memadai yang mendidik siswa berprestasi.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in animate-delay-2">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-4h6v4"/><path d="M9 9h1"/><path d="M14 9h1"/><path d="M9 13h1"/><path d="M14 13h1"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>SDN 2 Mentaraman</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Sekolah Dasar Negeri • Dusun Gondangrejo</p>
                    <p>Sekolah dasar negeri yang melayani wilayah dusun Gondangrejo dan sekitarnya.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in animate-delay-1">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-4h6v4"/><path d="M9 9h1"/><path d="M14 9h1"/><path d="M9 13h1"/><path d="M14 13h1"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>SDN 3 Mentaraman</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Sekolah Dasar Negeri • Dusun Gondangtowo</p>
                    <p>Sekolah dasar negeri yang melayani anak-anak di wilayah dusun Gondangtowo dan perbukitan selatan.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in animate-delay-2">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-4h6v4"/><path d="M9 9h1"/><path d="M14 9h1"/><path d="M9 13h1"/><path d="M14 13h1"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>SDN 4 Mentaraman</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Sekolah Dasar Negeri • Dusun Mentaraman</p>
                    <p>Sekolah dasar negeri tambahan di wilayah dusun Mentaraman untuk memperluas akses pendidikan dasar warga.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in animate-delay-1">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><line x1="8" y1="7" x2="16" y2="7"/><line x1="8" y1="11" x2="13" y2="11"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>SMP Negeri Satu Atap Donomulyo</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Sekolah Menengah Pertama • Dusun Krajan</p>
                    <p>Sekolah menengah yang memfasilitasi kelanjutan belajar wajib 9 tahun bagi generasi muda desa.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in animate-delay-2">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>Madrasah Diniyah Al-Falah</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Pendidikan Non-Formal • Dusun Krajan</p>
                    <p>Lembaga pendidikan sore hari yang memfokuskan ilmu tauhid, fikih ibadah, dan baca-tulis Al-Qur'an.</p>
                </div>
            </div>

            <div class="pendidikan-card scale-in card-span-2">
                <div class="pendidikan-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9z"/></svg>
                </div>
                <div class="pendidikan-info">
                    <h3>Pondok Pesantren Miftahul Ulum</h3>
                    <p style="font-weight:600;color:var(--forest-mid);font-size:0.85rem;margin-bottom:6px;">Pendidikan Islam Keagamaan • Dusun Mulyorejo</p>
                    <p>Lembaga pendidikan Islam tradisional yang membina karakter santri dengan kajian kitab-kitab klasik dan kemandirian hidup.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Statistik Pendidikan Desa</h2>
        </div>
        <div class="stats-row">
            <div class="stat-item scale-in animate-delay-1">
                <div class="stat-number" data-target="450" data-suffix="+">0</div>
                <div class="stat-label">Total Murid/Siswa</div>
            </div>
            <div class="stat-item scale-in animate-delay-2">
                <div class="stat-number" data-target="35" data-suffix="">0</div>
                <div class="stat-label">Tenaga Pengajar</div>
            </div>
            <div class="stat-item scale-in animate-delay-3">
                <div class="stat-number" data-target="6" data-suffix="">0</div>
                <div class="stat-label">Sekolah Formal</div>
            </div>
            <div class="stat-item scale-in animate-delay-4">
                <div class="stat-number" data-target="2" data-suffix="">0</div>
                <div class="stat-label">Lembaga Non-Formal</div>
            </div>
        </div>
    </div>
</section>

@endsection
