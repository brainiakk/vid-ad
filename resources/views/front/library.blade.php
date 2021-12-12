@extends('layout.front-master')
@section('title', 'Lance Master | Library')

@section('content')
    <div class="videos-row row justify-content-md-center" style="margin-top: 20px !important">
        <div class="col-lg-12 col-lg-offset-2">
            <div class="heading">
                <h2 class="d-inline-block">History</h2>
                <a href="{{ route('history') }}" class="btn btn-primary float-right" style="margin-top: 37px; margin-right: 10px;">View All</a>
            </div>
            @if ($historyVideos->count())

                @php
                    $historyRow1 = $historyVideos->slice(0, 4);
                    $historyRow2 = $historyVideos->slice(4, 4);
                @endphp

                <div class="slick-slider">
                    @foreach ($historyRow1 as $video)
                        <div>
                            <div class="boxImg">
                                <img src="{{ asset($video->video->thumbnail) }}" data-href="{{ URL::to('/video', $video->video->id) }}"
                                    class="video-list clickable" />
                                {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->video->id }}" height='200px' onclick="playVideo(this.id);">
                                    <source src="{{ asset($video->video->video_path) }}">
                                </video> --}}
                                <div class="pt-3">
                                    <!-- <div class="title">
                                        <div>
                                            {{ $video->video->title }}
                                            <p class="float-right">
                                                @if (isset($video->video->views))
                                                    {{ sizeof($video->video->views) }} Views
                                                @endif
                                            </p>
                                        </div>
                                    </div> -->
                                    <div class="details mt-1">
                                        <div class="profile-pic">
                                            <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                        </div>
                                        <div class="video-details">
                                            <div>{{ $video->video->title }}</div>
                                            <div class="channel">
                                                <a href="{{ route('channel.index', $video->video->user->id) }}" class="color-white">
                                                    <span class="text-capitalize">{{ $video->video->user->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="ml-auto">
                                            @if (isset($video->video->views))
                                            {{ sizeof($video->video->views) }} Views
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($historyRow2->count())
                    <div class="slick-slider">
                        @foreach ($historyRow1 as $video)
                            <div>
                                <div class="boxImg">
                                    <img src="{{ asset($video->video->thumbnail) }}" data-href="{{ URL::to('/video', $video->video->id) }}"
                                        class="video-list clickable" />
                                    {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->video->id }}" height='200px' onclick="playVideo(this.id);">
                                        <source src="{{ asset($video->video->video_path) }}">
                                    </video> --}}
                                    <div class="pt-3">
                                        <!-- <div class="title">
                                            <div>
                                                {{ $video->video->title }}
                                                <p class="float-right">
                                                    @if (isset($video->video->views))
                                                        {{ sizeof($video->video->views) }} Views
                                                    @endif
                                                </p>
                                            </div>
                                        </div> -->
                                        <div class="details mt-1">
                                            <div class="profile-pic">
                                                <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                            </div>
                                            <div class="video-details">
                                                <div>{{ $video->video->title }}</div>
                                                <div class="channel">
                                                    <a href="{{ route('channel.index', $video->video->user->id) }}" class="color-white">
                                                        <span class="text-capitalize">{{ $video->video->user->name }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="ml-auto">
                                                @if (isset($video->video->views))
                                                {{ sizeof($video->video->views) }} Views
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @else
                <h6 class="text-center">No history found</h6>
            @endif
        </div>
        <div class="col-lg-12 col-lg-offset-2">
            <div class="heading">
                <h2 class="d-inline-block">Playlists</h2>
                <a href="{{ route('playlists') }}" class="btn btn-primary float-right" style="margin-top: 37px; margin-right: 10px;">View All</a>
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

@push('scripts')
    <script>
    $( function() {
        $('.slick-track').addClass('float-left');
    });
    </script>
@endpush