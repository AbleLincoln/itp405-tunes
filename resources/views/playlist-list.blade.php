@extends('main-layout')

@section('title')
  Playlists
@endsection

@section('content')
  <h1>Playlists</h1>

  <ul>
    @foreach($playlists as $playlist)
    <li>
      <a href='/playlists/{{$playlist->PlaylistId}}'>{{$playlist->Name}}</a>
    </li>
    @endforeach
  </ul>

  <a href="/playlists/new" class="btn btn-primary">Create new playlist</a>
@endsection