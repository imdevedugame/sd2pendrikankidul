@extends('layouts.app')
@section('title', 'Berita & Pengumuman - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="section-title">Berita & Pengumuman</h1>
        <div class="grid">
            @foreach($posts as $post)
            <div class="card">
                @if($post->image)
                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="card-img" style="height: 200px; width: 100%; object-fit: cover;">
                @endif
                <div class="card-body">
                    <span class="badge">{{ strtoupper($post->type) }}</span>
                    <h3 class="card-title"><a href="{{ route('news.detail', $post->slug) }}">{{ $post->title }}</a></h3>
                    <p class="text-muted text-sm mb-2">{{ $post->created_at->format('d M Y') }}</p>
                    <p class="text-muted mb-3">{{ Str::limit($post->content, 120) }}</p>
                    <a href="{{ route('news.detail', $post->slug) }}" class="text-primary font-bold">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection
