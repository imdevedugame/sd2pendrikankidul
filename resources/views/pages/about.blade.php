@extends('layouts.app')
@section('title', 'Profil Sekolah - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Profil Sekolah</h2>
        <div class="about-content">
            <div data-aos="fade-right">
                <h3 class="mb-3">Sejarah Singkat {{ isset($schoolProfile) ? $schoolProfile->name : 'SDN Pendrikan Lor 02' }}</h3>
                <p class="text-muted mb-3" style="text-align: justify; white-space: pre-wrap; font-size: 1.1rem; line-height: 1.8;">{{ isset($schoolProfile) ? $schoolProfile->history : 'Sejarah belum ditambahkan.' }}</p>
                
                <h3 class="mb-3 mt-5">Visi dan Misi</h3>
                <div class="card p-4" style="background-color: var(--primary); color: white; padding: 2rem; border-radius: var(--radius-lg); margin-bottom: 2rem; box-shadow: var(--shadow-lg);">
                    <h4 class="mb-2" style="color: white; font-size: 1.25rem;">VISI</h4>
                    <p class="mb-4" style="font-style: italic; white-space: pre-wrap; font-size: 1.1rem;">{{ isset($schoolProfile) ? $schoolProfile->vision : 'Visi belum ditambahkan.' }}</p>
                    
                    <h4 class="mb-2" style="color: white; font-size: 1.25rem;">MISI</h4>
                    <div style="white-space: pre-wrap; font-size: 1.1rem; line-height: 1.8;">{{ isset($schoolProfile) ? $schoolProfile->mission : 'Misi belum ditambahkan.' }}</div>
                </div>
            </div>
            <div data-aos="fade-left">
                <img src="{{ asset('images/gerbang.jpg') }}" alt="Gerbang Sekolah" class="about-image" style="box-shadow: var(--shadow-lg); border-radius: var(--radius-xl);">
            </div>
        </div>
    </div>
</section>

@php
    $facilities = \App\Models\Facility::orderBy('order')->get();
@endphp

@if($facilities->count() > 0)
<section class="section bg-alternate">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Sarana dan Prasarana</h2>
        <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));" data-aos="fade-up" data-aos-delay="100">
            @foreach($facilities as $facility)
            <div class="card" style="overflow: hidden; border: none;">
                @if($facility->photo)
                <img src="{{ asset('storage/' . $facility->photo) }}" alt="{{ $facility->name }}" class="card-img" style="height: 220px; object-fit: cover; width: 100%;">
                @else
                <div style="height: 200px; background-color: #e2e8f0; display: flex; align-items: center; justify-content: center; width: 100%;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#94a3b8" style="width: 48px; height: 48px;">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                    </svg>
                </div>
                @endif
                <div class="card-body" style="padding: 1.5rem;">
                    <h3 class="card-title" style="margin-bottom: 0.5rem; font-size: 1.25rem;">{{ $facility->name }}</h3>
                    <p class="text-muted" style="line-height: 1.6;">{{ $facility->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
