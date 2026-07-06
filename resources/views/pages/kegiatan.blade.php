@extends('layouts.app')
@section('title', 'Kegiatan Rutinitas')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Kegiatan Rutinitas Desa</h1>
        <p>Berbagai agenda rutin kemasyarakatan, keagamaan, dan sosial di Desa Mentaraman</p>
        <div class="breadcrumb">
            <a href="/">Beranda</a> / <span>Kegiatan</span>
        </div>
    </div>
</div>

<section class="section section-cream">
    <div class="container">
        <div class="section-header blur-in">
            <h2>Agenda Rutin Warga</h2>
            <p>Kegiatan gotong royong dan kebersamaan yang terus dijaga untuk mempererat silaturahmi warga Desa Mentaraman.</p>
        </div>

        <div class="grid-3">
            <div class="kegiatan-card scale-in animate-delay-1">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Setiap Jumat Malam</span>
                    <h3>Pengajian Rutin</h3>
                    <p>Kegiatan keagamaan dan silaturahmi warga desa untuk meningkatkan keimanan dan kebersamaan spiritual masyarakat.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-2">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18"/><path d="M12 3v18"/><path d="M5 12c2-4 5-6 7-6s5 2 7 6"/><path d="M5 16c2-2 5-3 7-3s5 1 7 3"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Minggu Pagi (Kala)</span>
                    <h3>Gotong Royong Lingkungan</h3>
                    <p>Kerja bakti berkala membersihkan saluran air, jalan desa, dan fasilitas umum demi keasrian serta kenyamanan desa.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-3">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Setiap Tanggal 10</span>
                    <h3>Posyandu Balita & Lansia</h3>
                    <p>Pelayanan kesehatan dasar, imunisasi, penimbangan balita, serta pemeriksaan kesehatan lansia secara berkala.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-1">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Sabtu Minggu Ke-2</span>
                    <h3>Pertemuan PKK Desa</h3>
                    <p>Pembinaan kesejahteraan keluarga, rapat koordinasi, serta pelatihan keterampilan industri kreatif untuk ibu-ibu.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-2">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Satu Bulan Sekali</span>
                    <h3>Musyawarah Dusun (Musdus)</h3>
                    <p>Musyawarah tingkat dusun untuk membahas perencanaan pembangunan infrastruktur dan menyerap aspirasi warga.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-3">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Setiap Malam</span>
                    <h3>Siskamling & Ronda Malam</h3>
                    <p>Sistem keamanan lingkungan warga secara bergilir guna menjaga ketenteraman dan ketertiban lingkungan desa.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-1">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Setiap Sabtu Sore</span>
                    <h3>Kesenian Tradisional</h3>
                    <p>Latihan kesenian tradisional karawitan dan tari khas Mataraman untuk melestarikan kebudayaan lokal generasi muda.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-2">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Minggu Pagi</span>
                    <h3>Senam Kebugaran Desa</h3>
                    <p>Senam pagi bersama untuk menjaga kebugaran jasmani, kesehatan jantung, dan mempererat kebersamaan warga.</p>
                </div>
            </div>

            <div class="kegiatan-card scale-in animate-delay-3">
                <div class="kegiatan-img">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="kegiatan-body">
                    <span class="schedule">Musim Tanam/Panen</span>
                    <h3>Rembuk Tani</h3>
                    <p>Pertemuan kelompok tani desa guna membahas pembagian air irigasi, distribusi pupuk, dan penyuluhan pertanian.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
