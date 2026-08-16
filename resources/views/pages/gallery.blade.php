@extends('layouts.app')
@section('title', 'Galeri - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="section-title">Galeri Foto</h1>
        <div class="grid">
            @foreach($gallery as $item)
            <div class="card">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}" class="card-img" style="height: 250px;">
                <div class="card-body">
                    <h3 class="card-title text-center">{{ $item->title }}</h3>
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
