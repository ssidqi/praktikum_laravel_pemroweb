@extends('layouts.app')
@section('title', 'Tambah Artikel')

@section('content')

<section class="card">
    <h2 style="margin-top: 0;">Tambah Artikel / Berita</h2>
    <p class="muted">
        Isi fromulir di bawah untuk menambahkan berita baru, gambar menggunakan url( opsional ), jika kosong maka sistem akan memakai gambar placeholder online
    </p>
    @if ($errors->any())
        <div class="error">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf

        <label for="titile">Judul Artikel</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="masukan judul berita">

        <label for="image">URL Gambar (opsional)</label>
        <input type="text" id="title" name="image" value="{{ old('image') }}" placeholder="https://example.com/gambar.jpg">
        <p class="muted">
            jika kosong maka sistem akan menggunakan gabar placeholder dari <code>picsum.photos</code>.
        </p>
        <label for="body">Isi Berita</label>
        <textarea id ="text" name="body" rows="8" required placeholder="tulis berita di sini ...">{{ old('body') }}</textarea>

        <button type="submit">Simpan</button>
        <a href="{{ route('articles.index') }}">Batal</a>
    </form>
</section>

@endsection
