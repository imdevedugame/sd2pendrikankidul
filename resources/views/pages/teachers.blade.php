@extends('layouts.app')
@section('title', 'Profil Guru - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="section-title">Profil Guru & Tenaga Kependidikan</h1>
        <div class="grid">
            @foreach($teachers as $teacher)
            <div class="card text-center" style="padding-top: 2rem;">
                <img src="{{ \Illuminate\Support\Str::startsWith($teacher->photo, 'teachers/') ? asset('storage/' . $teacher->photo) : asset('images/' . ($teacher->photo ?: 'kepsek.jpeg')) }}" alt="{{ $teacher->name }}" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto; box-shadow: var(--shadow-md);">
                <div class="card-body">
                    <h3 class="card-title">{{ $teacher->name }}</h3>
                    <p class="text-primary font-bold mb-2">{{ $teacher->position }}</p>
                    <p class="text-muted text-sm">{{ $teacher->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
