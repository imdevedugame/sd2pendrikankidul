@extends('layouts.app')
@section('title', 'Galeri - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white">
    <div class="container">
        <h1 class="section-title" data-aos="fade-up">Galeri Kegiatan</h1>
        <div class="gallery-bento" data-aos="fade-up" data-aos-delay="100">
            @foreach($galleries as $item)
            <div class="gallery-item">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}">
                <div class="gallery-overlay">
                    <h3>{{ $item->title }}</h3>
                    @if($item->description)
                    <p>{{ Str::limit($item->description, 60) }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
