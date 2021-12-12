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
    <div class="user-details">
        <div class="container-fluid">
            <div class="text-right">
                <div class="d-flex mr-auto">
                    @if ($user->profile == null)
                        <img src="{{ asset('assets/images/avatar-1.jpg') }}" alt="..." class="profile-image">
                    @else
                        <img src="{{ asset($user->profile->profile_image) }}" alt="..." class="profile-image">
                    @endif

                    <div class="align-self-center px-3">
                        <h4>{{ $user->name }}</h4>
                        <p>{{ sizeof($user->subscribers) }} Subscribers</p>
                    </div>
                </div>

                {{-- {{ $user->subscribers[0]->pivot->subscriber_id }} --}}
                @php
                    $subscribe = false;
                @endphp
                @foreach ($user->subscribers as $item)
                    @if ($item->pivot->subscriber_id == auth()->id())
                        @php
                            $subscribe = true;
                        @endphp
                        <a href="{{ route('channel.unsubscribe', [$item->pivot->subscriber_id, $item->pivot->account_id]) }}"
                            class="align-self-center btn btn-danger ml-auto">Subscribed</a>&nbsp;
                        <a href="{{ route('channel.changeNotificationSettings', [$item->pivot->subscriber_id, $item->pivot->account_id]) }}"
                        class="btn btn-dark dropdown-toggle ml-auto" data-toggle="dropdown"><i class="fa {{ $item->pivot->notifications ? 'fa-bell' : 'fa-bell-slash' }}"></i></a>
                        <ul class="dropdown-menu" style="max-width: 50px;">
                            <li>
                                <a href="{{ route('channel.changeNotificationSettings', [$item->pivot->subscriber_id, $item->pivot->account_id]) }}">
                                    <i class="fa fa-bell ml-4"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('channel.changeNotificationSettings', [$item->pivot->subscriber_id, $item->pivot->account_id]) }}">
                                    <i class="fa fa-bell-slash ml-4"></i>
                                </a>
                            </li>
                        </ul>
                    @endif
                @endforeach
                @if (!$subscribe)
                    <a href="{{ route('channel.subscribe', $user->id) }}"
                        class="align-self-center btn btn-primary">Subscribe</a>
                @endif
            </div>
        </div>
    </div>

    <div class="videos mt-3">
        <div class="container-fluid">
            <div class="tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active" data-toggle="tab">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#playlist" class="nav-link" data-toggle="tab">Playlists</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link" data-toggle="tab">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <div class="container-fluid">
                <div class="row">

                    @foreach ($user->videos as $item)
                        <div class="col-md-3">
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

                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="playlist">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <h4 class="mt-2 text-left">Playlists</h4>
                    <a href="{{ route('channel.createPlaylist', $user->id) }}" class="btn btn-primary">Create
                        Playlist</a>
                </div>

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
        <div class="tab-pane fade" id="about">
            <div class="container-fluid">
                <div class="d-flex flex-column">
                    <h4 class="text-left mt-3">About: </h4>
                    <div style="min-height: 150px" class="mt-3">
                        @if ($user->profile != null)
                            <p class="text-left">
                                {{ $user->profile->about }}
                            </p>
                        @endif
                    </div>

                    <h4 class="text-left mt-3">Location: </h4>
                    <div style="min-height: 50px" class="mt-3">
                        @if ($user->profile != null)
                            <p class="text-left">
                                {{ $user->profile->location }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
