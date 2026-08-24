@extends('layouts.app')
@section('title', $post->title . ' - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white">
    <div class="container" style="max-width: 800px;" data-aos="fade-up">
        <a href="{{ route('news') }}" class="text-primary font-bold mb-4" style="display: inline-block;">&larr; Kembali ke Berita</a>
        
        <span class="badge">{{ strtoupper($post->type) }}</span>
        <h1 class="mb-3" style="font-size: 2.5rem; line-height: 1.2;">{{ $post->title }}</h1>
        <p class="text-muted mb-4">{{ $post->created_at->format('d M Y H:i') }} | Dilihat: {{ $post->views }} kali</p>
        
        @if($post->image)
        <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); margin-bottom: 2rem;">
        @endif

        <div class="post-content" style="font-size: 1.1rem; color: var(--text-main); line-height: 1.8;">
            {!! nl2br(e($post->content)) !!}
        </div>

        <div class="mt-4 pt-4" style="border-top: 1px solid var(--border);">
            <a href="{{ route('news') }}" class="btn btn-secondary">&larr; Kembali ke Berita</a>
        </div>
    </div>
</section>
@endsection
