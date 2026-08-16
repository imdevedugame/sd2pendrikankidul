@extends('layouts.app')
@section('title', 'Profil Sekolah - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section">
    <div class="container">
        <h2 class="section-title">Profil Sekolah</h2>
        <div class="about-content">
            <div>
                <h3 class="mb-3">Sejarah Singkat {{ isset($schoolProfile) ? $schoolProfile->name : 'SDN Pendrikan Lor 02' }}</h3>
                <p class="text-muted mb-3" style="text-align: justify; white-space: pre-wrap;">{{ isset($schoolProfile) ? $schoolProfile->history : 'Sejarah belum ditambahkan.' }}</p>
                
                <h3 class="mb-3 mt-5">Visi dan Misi</h3>
                <div class="card p-4" style="background-color: var(--primary-light); color: white; padding: 1.5rem; border-radius: var(--radius-lg); margin-bottom: 2rem;">
                    <h4 class="mb-2" style="color: white;">VISI</h4>
                    <p class="mb-4" style="font-style: italic; white-space: pre-wrap;">{{ isset($schoolProfile) ? $schoolProfile->vision : 'Visi belum ditambahkan.' }}</p>
                    
                    <h4 class="mb-2" style="color: white;">MISI</h4>
                    <div style="white-space: pre-wrap;">{{ isset($schoolProfile) ? $schoolProfile->mission : 'Misi belum ditambahkan.' }}</div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/gerbang.jpg') }}" alt="Gerbang Sekolah" class="about-image">
            </div>
        </div>
    </div>
</section>
@endsection
