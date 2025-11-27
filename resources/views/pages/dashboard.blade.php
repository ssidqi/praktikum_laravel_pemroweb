@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <section class="card">
    <h2 style="margin-top: o;">Dashboard</h2>
    <p>Halo, <strong>{{ auth()->user()->name }}</strong>!</p>
    <p class="muted">Ini halaman privat — hanya bisa diakses setelah login.</p>
  </section>
  <section class="row" style="margin-top: 1rem;">
    <div class="card">
      <p style="font-size: 2rem; margin: .25rem 0;">
        {{$totalArticles ?? 0}}
      </p>
      <p class="muted">jumlah seluruh artikel yang ada di sistem.</p>
    </div>

    <div class="card">
      <h3>Artikel Kamu</h3>
      <p style="font-size:2rem; margin: .25rem 0;">
        {{ $myArticles ?? 0}}
      </p>
      <p class="muted">
        Artikel Yang Dibuat Di Akun Kamu. 
      </p>
    </div>

    <div class="card">
      <h3>Aksi Cepat</h3>
      <ul style="margin-bottom: 0;">
        <li><a href="{{ route('articles.create')}}">+ Tambah Artikel Baru</a></li>
        <li><a href="{{ route('articles.index')}}">+ lihat Semua Artikel</a></li>
        <li><a href="{{ route('home')}}">Lihat Halam Home</a></li>
      </ul>
    </div>
  </section>

  <section class="card" style="margin-to: 1rem;">
    <h3>Artikel Terbaru</h3>
    @if(($latestArticles ?? collect()->count))
    <div class="row">
      @foreach ($latestArticles as $article)
        <article class="card">
          <div style="display: flex; gap: 1rem;" >
            <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/0*Z4QsIrj9c7mOajq- {{ $loop->index + 10}}"  alt="" style="width: 120px; height: 80px; object-fit: cover;">
            <div>
              <h4 style="margin: 0 0 .25rem 0;">
                <a href="{{ route('articles.show', $article)}}"> {{ $article->title}}</a>
              </h4>
              <p class="muted" style="margin: 0 0 .25rem 0;"> Oleh User #{{ $article->user_id }}
                <span> . </span>
                <span>{{ $article->created_at->format('d M Y')}}</span>
              </p>
              <p style="margin: 0;"> {{ \Illuminate\Support\Str::limit($article->body, 100) }}
                </p>
                
              </div>
            </div>
        </article>
      @endforeach
    </div>
  @else
    <p class="muted">Belum Ada Artikel Yang Bisa Ditampilakan.</p>
  @endif
  </section>

  <section class="card" style="magin-top: 1rem;">
    <h3>Info Akun</h3>
    <ul>
      <li><strong>Nama:</strong>{{ $user->name ?? auht()->user()->name}}</li>
      <li><strong>Email:</strong>{{ $user->email ?? auht()->user()->email}}</li>
    </ul>
    <p class="muted">
      Gunakan menu di navbar untuk berpinda atara home, artikel, dan Dashboard
    </p>
  </section>
@endsection