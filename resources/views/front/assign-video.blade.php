@extends('layout.front-master')
@section('title', 'Lance Master | Home Page')

@section('content')
    {{-- {{ $playlist }} --}}
    <div class="d-flex justify-content-between my-5">
        <h4 class="text-left mt-5 align-self-center">Assign Video To Playlist</h4>
    </div>

    <form action="{{ route('channel.assignVideoToPlaylist', $playlist->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <label for="video">Select Video</label>

        <select name="videos[]" class="form-control custom-select mb-3" multiple required>
            <option value="" disabled>Select Video</option>
            @foreach ($videos as $item)
                @if (sizeof($item->playlists) < 1)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endif
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Assign</button>
    </form>
@endsection
