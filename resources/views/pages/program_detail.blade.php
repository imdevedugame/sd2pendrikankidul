@extends('layouts.app')
@section('title', $program->title . ' - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white" style="padding-top: 4rem;">
    <div class="container">
        <div class="program-detail-header" style="text-align: center; margin-bottom: 3rem;" data-aos="fade-up">
            @if($program->icon_svg)
                <div style="color: var(--primary); display: flex; justify-content: center;">
                    {!! str_replace('margin-bottom: 1.5rem;', 'margin-bottom: 1rem;', $program->icon_svg) !!}
                </div>
            @endif
            <h1 class="section-title" style="margin-bottom: 1rem;">{{ $program->title }}</h1>
            <p class="text-muted" style="font-size: 1.1rem; max-width: 700px; margin: 0 auto;">{{ $program->short_description }}</p>
        </div>

        @if($program->image)
            <div data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 3rem; text-align: center;">
                <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}" style="max-width: 100%; height: auto; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
            </div>
        @endif

        <div class="program-content" style="max-width: 800px; margin: 0 auto; line-height: 1.8; font-size: 1.05rem;" data-aos="fade-up" data-aos-delay="200">
            @if($program->content)
                {!! $program->content !!}
            @else
                <p>Belum ada detail lebih lanjut mengenai program ini.</p>
            @endif
        </div>
    </div>
</section>
@endsection
