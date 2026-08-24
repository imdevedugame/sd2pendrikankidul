@extends('layouts.app')
@section('title', 'Galeri - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white">
    <div class="container">
        <h1 class="section-title" data-aos="fade-up">Galeri Kegiatan</h1>
        <div class="grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));" data-aos="fade-up" data-aos-delay="100">
            @foreach($galleries as $item)
            <div class="card" style="border: none;">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}" class="card-img" style="height: 250px;">
                <div class="card-body" style="padding: 1.5rem;">
                    <p class="font-bold text-center" style="font-size: 1.1rem;">{{ $item->title }}</p>
                    @if($item->description)
                    <p class="text-muted text-center">{{ $item->description }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
