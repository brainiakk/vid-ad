@extends('layout.front-master')
@section('title', 'Lance Master | Home Page')

@section('content')
    <div class="d-flex justify-content-between ml-5" style="margin-top: 50px">
        <h4 class="text-left mt-5 align-self-center">Playlist</h4>
        <a href="{{ route('channel.assignVideoToPlaylistView', $playlist->id) }}"
            class="btn btn-primary align-self-center">Add Video to playlist</a>
    </div>
    @if (sizeof($playlist->videos) == 0)
        <h5 class="text-center mt-5">No Video Found</h5>
    @endif

    @foreach ($playlist->videos as $item)
        <div class="col-md-3 ml-4">
            <div class="d-flex flex-column">
                <img src="{{ asset($item->thumbnail) }}" data-href="{{ URL::to('/video', $item->id) }}"
                    class="video-list clickable" />
                <div class="d-flex justify-content-between">
                    <p>{{ sizeof($item->views) }} views</p>
                    <p>{{ $item->created_at }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
