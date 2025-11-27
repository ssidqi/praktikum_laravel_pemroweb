@extends('layouts.app')
@section('title', $article->title)

@section('content')

<section class="card">

    <h2 style="margin-top: 0;">{{ $article->title }}</h2>

    <p class="muted" style="margin-top: .25rem;">
        Dipublikasikan pada {{ $article->created_at ? $article->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}
        @if($article->user_id)
            oleh User #{{ $article->user_id }}
        @endif
    </p>

    @php
        $imageUrl = 'https://picsum.photos/800/300?random=' . $article->id;
    @endphp

    <img src="{{ $imageUrl }}" style="width:100%; border-radius:10px; margin-top:1rem;">

    <div style="margin-top:1rem;">
        {!! nl2br(e($article->body)) !!}
    </div>

    <p style="margin-top:1rem;">
        <a href="{{ route('articles.index') }}">← Kembali ke daftar</a>
    </p>
</section>

@endsection
