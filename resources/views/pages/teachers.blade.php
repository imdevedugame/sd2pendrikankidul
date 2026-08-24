@extends('layouts.app')
@section('title', 'Profil Guru - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-alternate">
    <div class="container">
        <h1 class="section-title" data-aos="fade-up">Guru & Tenaga Kependidikan</h1>
        <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 3rem;" data-aos="fade-up" data-aos-delay="100">
            @foreach($teachers as $teacher)
            <div class="card text-center" style="padding: 2rem; border: none; background: white; box-shadow: var(--shadow-md);">
                @if($teacher->photo)
                <img src="{{ \Illuminate\Support\Str::startsWith($teacher->photo, 'teachers/') ? asset('storage/' . $teacher->photo) : asset('images/' . $teacher->photo) }}" alt="{{ $teacher->name }}" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%; margin: 0 auto 1.5rem; border: 4px solid var(--border); box-shadow: var(--shadow-sm);">
                @else
                <div style="width: 150px; height: 150px; background-color: var(--border); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#94a3b8" style="width: 64px; height: 64px;">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                @endif
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: var(--primary-dark);">{{ $teacher->name }}</h3>
                <p class="text-primary font-bold" style="font-size: 1rem; margin-bottom: 0.5rem;">{{ $teacher->position }}</p>
                @if($teacher->nip)
                <p class="text-muted" style="font-size: 0.9rem;">NIP: {{ $teacher->nip }}</p>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
