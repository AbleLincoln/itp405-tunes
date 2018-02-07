@extends('main-layout')

@section('title')
  Playlists
@endsection

@section('content')
  <a href="/playlists/new">Create new playlist</a>

  <ul>
    @foreach($playlists as $playlist)
    <li>
      <a href='/playlists/{{$playlist->PlaylistId}}'>{{$playlist->Name}}</a>
    </li>
    @endforeach
  </ul>
@endsection