@extends('layouts.app')
@section('title', 'Beranda - SDN Pendrikan Lor 02 Semarang')

@section('content')
<!-- Hero Section -->
<section class="hero" style="padding-bottom: 12rem; {{ isset($schoolProfile) && $schoolProfile->hero_image ? 'background-image: url(' . asset('storage/' . $schoolProfile->hero_image) . ');' : '' }}">
    <div class="container hero-content">
        <h1>{{ isset($schoolProfile) && $schoolProfile->hero_title ? $schoolProfile->hero_title : 'Selamat Datang di SDN Pendrikan Lor 02' }}</h1>
        <p>{{ isset($schoolProfile) && $schoolProfile->hero_subtitle ? $schoolProfile->hero_subtitle : 'Membentuk generasi penerus bangsa yang berakhlak mulia, cerdas, dan berprestasi.' }}</p>
        <a href="{{ route('about') }}" class="btn btn-secondary" style="border-radius: var(--radius-xl); box-shadow: var(--shadow-md);">Pelajari Lebih Lanjut</a>
    </div>
    <div class="custom-shape-divider-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,119.34,201.39,98.4,242.4,86.2,283.4,70.36,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<!-- Sambutan -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Sambutan Kepala Sekolah</h2>
        <div class="about-content">
            <div>
                <img src="{{ asset('images/kepsek.jpeg') }}" alt="Kepala Sekolah" class="about-image" style="max-width: 300px; display: block; margin: 0 auto;">
            </div>
            <div>
                <h3 class="mb-2">Assalamualaikum warohmatullahi wabarokatuh..</h3>
                <p class="mb-3 text-muted">
                    Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan hidayahNya sehingga website SD Negeri Pendrikan Lor 02 Semarang ini dapat terbit.
                    Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SD Negeri Pendrikan Lor 02 Semarang.
                </p>
                <p class="font-bold">Rumiati, S.Pd.</p>
                <p class="text-primary">Kepala Sekolah</p>
            </div>
        </div>
    </div>
</section>

<!-- Berita Terbaru -->
<section class="section" style="background-color: white;">
    <div class="container">
        <h2 class="section-title">Berita & Pengumuman Terbaru</h2>
        <div class="grid">
            @foreach($news as $post)
            <div class="card">
                @if($post->image)
                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="card-img" style="height: 180px; width: 100%; object-fit: cover;">
                @endif
                <div class="card-body">
                    <span class="badge">{{ strtoupper($post->type) }}</span>
                    <h3 class="card-title"><a href="{{ route('news.detail', $post->slug) }}">{{ $post->title }}</a></h3>
                    <p class="text-muted mb-3">{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('news.detail', $post->slug) }}" class="text-primary font-bold">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('news') }}" class="btn btn-primary">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<!-- Galeri Singkat -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Galeri Kegiatan</h2>
        <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            @foreach($gallery as $item)
            <div class="card">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}" class="card-img">
                <div class="card-body" style="padding: 1rem;">
                    <p class="font-bold text-center">{{ $item->title }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('gallery') }}" class="btn btn-secondary">Lihat Galeri Lengkap</a>
        </div>
    </div>
</section>
@endsection
