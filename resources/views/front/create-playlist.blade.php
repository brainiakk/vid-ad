@extends('layout.front-master')
@section('title', 'Lance Master | Home Page')

@section('content')

    <div class="cover">
        @if ($user->profile == null)

            <img src="{{ asset('assets/images/cover.jpg') }}" alt="...">
        @else

            <img src="{{ asset($user->profile->cover_image) }}" alt="...">
        @endif
    </div>

    <h4 class="text-left pb-2">Create Playlist</h4>

    <form action="{{ route('channel.storePlaylist', $user->id) }}" method="POST" class="mt-5">
        @csrf

        <label for="playlistName">Playlist Name:</label>
        <input type="text" placeholder="Channel Name" name="playlist_name" class="form-control" required>

        <button class="btn btn-primary mt-2" type="submit">Create Playlist</button>
    </form>

@endsection
