@extends('layouts.app')
@section('title', 'Berita & Pengumuman - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white">
    <div class="container">
        <h1 class="section-title" data-aos="fade-up">Berita & Pengumuman</h1>
        <div class="grid" data-aos="fade-up" data-aos-delay="100">
            @foreach($posts as $post)
            <div class="card" style="display: flex; flex-direction: column;">
                @if($post->image)
                <img src="{{ file_exists(public_path('images/' . $post->image)) ? asset('images/' . $post->image) : asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="card-img" style="height: 220px; width: 100%; object-fit: cover;">
                @endif
                <div class="card-body" style="flex: 1; display: flex; flex-direction: column;">
                    <span class="badge" style="align-self: flex-start;">{{ strtoupper($post->type) }}</span>
                    <h3 class="card-title" style="flex: 1;"><a href="{{ route('news.detail', $post->slug) }}">{{ $post->title }}</a></h3>
                    <p class="text-muted text-sm mb-2">{{ $post->created_at->format('d M Y') }}</p>
                    <p class="text-muted mb-3">{{ Str::limit($post->content, 120) }}</p>
                    <a href="{{ route('news.detail', $post->slug) }}" class="text-primary font-bold mt-auto" style="display: inline-block;">Baca Selengkapnya &rarr;</a>
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
