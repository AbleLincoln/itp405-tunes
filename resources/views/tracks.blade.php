@extends('main-layout')

@section('title', $genre)

@section('content')

  <h1>{{$genre}}</h1>

  <table class="table">
    <tr>
      <th>Track</th>
      <th>Album</th>
      <th>Artist</th>
      <th>Price</th>
    </tr>

    @foreach($tracks as $track)
    <tr>
      <td>{{$track->TrackName}}</td>
      <td>{{$track->AlbumName}}</td>
      <td>{{$track->ArtistName}}</td>
      <td>{{$track->UnitPrice}}</td>
    </tr>
    @endforeach
  </table>

@endsection