@extends('layouts.app')
@section('title', 'Beranda - SDN Pendrikan Lor 02 Semarang')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
    .hero-slider-section {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .swiper {
        position: absolute !important;
        top: 0; left: 0; width: 100%; height: 100%;
        z-index: 0;
    }
    .swiper-slide {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .swiper-slide::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to bottom, rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.3));
        z-index: 1;
    }
    .hero-content {
        position: relative;
        z-index: 20;
        padding-bottom: 5rem;
    }
    .hero-content h1 {
        color: white;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    .hero-content p {
        color: #e2e8f0;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }
    .custom-shape-divider-bottom {
        pointer-events: none;
    }
</style>
@endpush

@section('content')
@php
    $sliders = \App\Models\HeroSlider::where('is_active', true)->orderBy('order')->get();
    $popularNews = \App\Models\Post::where('type', 'news')->latest()->take(3)->get();
@endphp

<!-- Hero Section -->
<section class="hero-slider-section">
    @if($sliders->count() > 0)
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide" style="background-image: url('{{ \Illuminate\Support\Str::startsWith($slider->image, 'sliders/') ? asset('storage/' . $slider->image) : asset('images/' . $slider->image) }}');">
                <div class="container hero-content text-center" data-aos="fade-up">
                    <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 1rem;">{{ $slider->title }}</h1>
                    <p style="font-size: 1.25rem; max-width: 800px; margin: 0 auto 2rem;">{{ $slider->subtitle }}</p>
                    @if($slider->button_text)
                    <a href="{{ $slider->button_url ?? '#' }}" class="btn btn-primary" style="border-radius: var(--radius-xl); box-shadow: var(--shadow-md);">{{ $slider->button_text }}</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    @else
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; {{ isset($schoolProfile) && $schoolProfile->hero_image ? 'background-image: url(' . asset('storage/' . $schoolProfile->hero_image) . ');' : 'background-image: url(' . asset('images/hero.jpeg') . ');' }} background-size: cover; background-position: center; z-index: 0;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.3));"></div>
    </div>
    <div class="container hero-content text-center" data-aos="fade-up">
        <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 1rem;">{{ isset($schoolProfile) && $schoolProfile->hero_title ? $schoolProfile->hero_title : 'Selamat Datang di SDN Pendrikan Lor 02' }}</h1>
        <p style="font-size: 1.25rem; max-width: 800px; margin: 0 auto 2rem;">{{ isset($schoolProfile) && $schoolProfile->hero_subtitle ? $schoolProfile->hero_subtitle : 'Membentuk generasi penerus bangsa yang berakhlak mulia, cerdas, dan berprestasi.' }}</p>
        <a href="{{ route('about') }}" class="btn btn-secondary" style="border-radius: var(--radius-xl); box-shadow: var(--shadow-md);">Pelajari Lebih Lanjut</a>
    </div>
    @endif

    <div class="custom-shape-divider-bottom" style="z-index: 10;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,119.34,201.39,98.4,242.4,86.2,283.4,70.36,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<!-- Overlapping News Strip -->
@if($popularNews->count() > 0)
<div class="container overlap-container" data-aos="fade-up" data-aos-delay="200">
    <div class="grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem;">
        @foreach($popularNews as $post)
        <a href="{{ route('news.detail', $post->slug) }}" class="overlap-card">
            @if($post->image)
            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}">
            @else
            <div style="width: 70px; height: 70px; background: rgba(255,255,255,0.2); border-radius: var(--radius-sm);"></div>
            @endif
            <div style="flex: 1;">
                <span style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px; color: var(--secondary);">{{ $post->type }}</span>
                <h4 style="font-size: 0.95rem; line-height: 1.4; font-weight: 600; margin: 0; color: white;">{{ Str::limit($post->title, 40) }}</h4>
                <span style="font-size: 0.75rem; color: rgba(255,255,255,0.7);">{{ $post->created_at->format('d M Y') }}</span>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endif

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    if(document.querySelector('.mySwiper')) {
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
</script>
@endpush

<!-- Layanan / Program Unggulan -->
<section class="section bg-white">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" style="text-align: left; margin-bottom: 3rem;">Layanan & Program <br>Unggulan Sekolah</h2>
        <div class="grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem;" data-aos="fade-up" data-aos-delay="100">
            <div class="card-komdigi">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.315 48.315 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                </svg>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 1px;">Akademik</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: rgba(255,255,255,0.9); flex: 1; margin-bottom: 1.5rem;">Kurikulum modern yang mendidik siswa menjadi cerdas dan berwawasan luas.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 32px; height: 32px; opacity: 0.8;">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="card-komdigi">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 1px;">Ekstrakurikuler</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: rgba(255,255,255,0.9); flex: 1; margin-bottom: 1.5rem;">Beragam kegiatan untuk mengembangkan bakat dan minat peserta didik di luar jam pelajaran.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 32px; height: 32px; opacity: 0.8;">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="card-komdigi">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 1px;">Karakter</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: rgba(255,255,255,0.9); flex: 1; margin-bottom: 1.5rem;">Pendidikan karakter untuk membentuk siswa yang berakhlak mulia dan beriman.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 32px; height: 32px; opacity: 0.8;">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="card-komdigi">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 48px; height: 48px; margin-bottom: 1.5rem;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.83-5.83m0 0l-6.75-6.75a2.652 2.652 0 00-3.75 3.75l6.75 6.75m0 0l3-3m-3 3l-3 3m3-3l3-3" />
                </svg>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 1px;">Fasilitas</h3>
                <p style="font-size: 0.95rem; line-height: 1.6; color: rgba(255,255,255,0.9); flex: 1; margin-bottom: 1.5rem;">Didukung sarana dan prasarana yang memadai untuk pembelajaran digital masa depan.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 32px; height: 32px; opacity: 0.8;">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Sambutan -->
<section class="section section-blue">
    <div class="container">
        <div class="about-content" style="gap: 2rem;">
            <div data-aos="fade-right">
                <h2 class="section-title" style="text-align: left; margin-bottom: 1rem;">Transformasi Digital<br>Bersama SDN Pendrikan Lor 02</h2>
                <p class="mb-4" style="font-size: 1.1rem; line-height: 1.8; color: rgba(255,255,255,0.9);">
                    Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan hidayahNya sehingga website SD Negeri Pendrikan Lor 02 Semarang ini dapat terbit.
                    Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar sekolah kami.
                </p>
                <div style="border-left: 4px solid var(--secondary); padding-left: 1rem; margin-top: 2rem;">
                    <p class="font-bold" style="font-size: 1.25rem;">Rumiati, S.Pd.</p>
                    <p style="color: var(--secondary);">Kepala Sekolah</p>
                </div>
                <a href="{{ route('about') }}" class="btn btn-secondary mt-4" style="border-radius: var(--radius-xl); box-shadow: var(--shadow-md);">Baca Selengkapnya</a>
            </div>
            <div data-aos="fade-left" style="display: flex; justify-content: flex-end;">
                <img src="{{ asset('images/kepsek.jpeg') }}" alt="Kepala Sekolah" class="about-image" style="max-width: 350px; border-radius: var(--radius-lg); box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 4px solid rgba(255,255,255,0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Berita Terbaru -->
<section class="section bg-alternate">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Berita & Pengumuman Terbaru</h2>
        <div class="grid" data-aos="fade-up" data-aos-delay="100">
            @foreach($news as $post)
            <div class="card" style="display: flex; flex-direction: column;">
                @if($post->image)
                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="card-img" style="height: 220px; width: 100%; object-fit: cover;">
                @endif
                <div class="card-body" style="flex: 1; display: flex; flex-direction: column;">
                    <span class="badge" style="align-self: flex-start;">{{ strtoupper($post->type) }}</span>
                    <h3 class="card-title" style="flex: 1;"><a href="{{ route('news.detail', $post->slug) }}">{{ $post->title }}</a></h3>
                    <p class="text-muted mb-3">{{ Str::limit($post->content, 120) }}</p>
                    <a href="{{ route('news.detail', $post->slug) }}" class="text-primary font-bold mt-auto" style="display: inline-block;">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('news') }}" class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1.1rem; border-radius: 2rem;">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<!-- Galeri Singkat -->
<section class="section bg-white">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Galeri Kegiatan</h2>
        <div class="grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));" data-aos="fade-up" data-aos-delay="100">
            @foreach($gallery as $item)
            <div class="card">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}" class="card-img" style="height: 250px;">
                <div class="card-body" style="padding: 1.5rem;">
                    <p class="font-bold text-center" style="font-size: 1.1rem;">{{ $item->title }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('gallery') }}" class="btn btn-secondary" style="padding: 1rem 2.5rem; font-size: 1.1rem; border-radius: 2rem;">Lihat Galeri Lengkap</a>
        </div>
    </div>
</section>
@endsection
