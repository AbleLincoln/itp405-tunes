@extends('main-layout')

@section('title', 'ITP Tunes')

@section('content')

<div class="row align-items-center" style="height: 100vh;">
  <div class="col-md-6 offset-md-3">
    <h1 style="text-align: center;">Andrew Maney's <span style="color: #563d7c;">ITP TUNES</span></h1>
    <ul class="nav">
      <li class="nav-item">
        <a href="/invoices" class="nav-link">Invoices</a>
      </li>
      <li class="nav-item">
        <a href="/genres" class="nav-link">Genres</a>
      </li>
      <li class="nav-item">
        <a href="/tracks" class="nav-link">Tracks</a>
      </li>
      <li class="nav-item">
        <a href="/plalists" class="nav-link">Playlists</a>
      </li>
    </ul>
  </div>
</div>


@endsection