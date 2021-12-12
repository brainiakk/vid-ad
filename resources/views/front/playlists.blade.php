@extends('layout.front-master')
@section('title', 'Lance Master | Library')

@section('content')
    <div class="videos-row row justify-content-md-center" style="margin-top: 20px !important">
        <div class="col-lg-12 col-lg-offset-2">
            <div class="heading">
                <h2>Playlists</h2>
                @if (sizeof($user->playlists) < 1)
                    <h4 class="my-5">No Playlist Found</h4>
                @else
                    <div class="row">
                        @foreach ($user->playlists as $playlist)
                            <div class="col-md-3 my-4">
                                <a href="{{ route('channel.playlist', $playlist->id) }}">
                                    <div class="card">
                                        <div class="card-body p-5">
                                            <div class="text-center text-dark">
                                                {{ $playlist->playlist_name }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection