@extends('main-layout')

@section('title', 'Create a Playlist')

@section('content')
  <h1>Create a new playlist</h1>

  @if($errors->isNotEmpty())
  <div class="alert alert-danger" role="danger">
    @foreach($errors->all() as $message)
      {{$message}}
    @endforeach
  </div>
  @endif

  <form action="/playlists" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="playlist">Playlist Name</label>
      <input value="{{old('playlist')}}" type="text" id="playlist" name="playlist" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>

@endsection