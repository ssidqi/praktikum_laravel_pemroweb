@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <section class="card">
    <h2>Dashboard</h2>
    <p>Halo, <strong>{{ auth()->user()->name }}</strong>!</p>
    <p>Ini halaman privat — hanya bisa diakses setelah login.</p>
  </section>
@endsection