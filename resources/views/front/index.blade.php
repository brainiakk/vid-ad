@extends('layout.front-master')
@section('title', 'Lance Master | Home Page')

@section('content')

    <div id="carousalTop" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousalTop" data-slide-to="0" class="active"></li>
            <li data-target="#carousalTop" data-slide-to="1"></li>
            <li data-target="#carousalTop" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/front/images/banner1.jpeg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/front/images/banner2.jpeg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/front/images/banner3.jpeg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carousalTop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousalTop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
    </div>

    <div class="videos-row row justify-content-md-center">
        <div class="col-lg-12">
            <div class="heading">
                <h2>Recommended For You</h2>
            </div>
            <div class="slick-slider">
                @foreach ($recommendedVideos as $video)
                    <div>
                        <div class="boxImg">
                            @php
                                if($video->continueWatches->first()){
                                    $v_time = round($video->continueWatches->first()->time);
                                }
                                else{
                                    $v_time = 0;
                                }
                            @endphp
                            <img src="{{ asset($video->thumbnail) }}" data-href="{{ URL::to('/video', $video->id) }}"
                                 class="video-list clickable" />
                            {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->id }}" height='200px' onclick="playVideo(this.id);">
                                <source src="{{ asset($video->video_path) }}">
                            </video> --}}
                            <div class="pt-3">
                               <!--  <div class="title">
                                    <div>
                                        {{ $video->title }}
                                        <p class="float-right">
                                            @if (isset($video->views))
                                                {{ sizeof($video->views) }} Views
                                            @endif
                                        </p>
                                    </div>
                                </div> -->
                                <div class="details mt-1">
                                    <div class="profile-pic">
                                        <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                    </div>
                                    <div class="video-details">
                                        <div>{{ $video->title }}</div>
                                        <div class="channel">
                                            <a href="{{ route('channel.index', $video->user->id) }}" class="color-white">
                                                <span class="text-capitalize">{{ $video->user->name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="ml-auto">
                                        @if (isset($video->views))
                                        {{ sizeof($video->views) }} Views
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="videos-row row justify-content-md-center">
        <div class="col-lg-12">
            <div class="heading">
                <h2>Watch List</h2>
            </div>
            <div class="slick-slider">
                @foreach ($watchlistVideos as $video)
                    <div>
                        <div class="boxImg">
                            @php
                                if($video->continueWatches->first()){
                                    $v_time = round($video->continueWatches->first()->time);
                                }
                                else{
                                    $v_time = 0;
                                }
                            @endphp
                            <img src="{{ asset($video->thumbnail) }}" data-href="{{ URL::to('/video', $video->id) }}"
                                class="video-list clickable" />
                            {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->id }}" height='200px' onclick="playVideo(this.id);">
                                <source src="{{ asset($video->video_path) }}">
                            </video> --}}
                            <div class="pt-3">
                                <div class="details mt-1">
                                    <div class="profile-pic">
                                        <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                    </div>
                                    <div class="video-details">
                                        <div>{{ $video->title }}</div>
                                        <div class="channel">
                                            <a href="{{ route('channel.index', $video->user->id) }}" class="color-white">
                                                <span class="text-capitalize">{{ $video->user->name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="ml-auto">
                                        @if (isset($video->views))
                                        {{ sizeof($video->views) }} Views
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="videos-row row justify-content-md-center">
        <div class="col-lg-12">
            <div class="heading">
                <h2>Continue Watching</h2>
            </div>
            <div class="slick-slider">
            @foreach ($contWatchesVideos as $video)
                <div>
                    <div class="boxImg">
                        @php 
                            if($video->continueWatches->first()){
                                $v_time = round($video->continueWatches->first()->time);
                            }
                            else{
                                $v_time = 0;
                            }
                        @endphp
                        <img src="{{ asset($video->thumbnail) }}" data-href="{{ URL::to('/video', $video->id) }}"
                            class="video-list clickable" />
                        {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->id }}" height='200px' onclick="playVideo(this.id);">
                            <source src="{{ asset($video->video_path) }}">
                        </video> --}}
                        <div class="pt-3">
                            <div class="details mt-1">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                </div>
                                <div class="video-details">
                                    <div>{{ $video->title }}</div>
                                    <div class="channel">
                                        <a href="{{ route('channel.index', $video->user->id) }}" class="color-white">
                                            <span class="text-capitalize">{{ $video->user->name }}</span>
                                        </a>
                                    </div>
                                </div>
                                <p class="ml-auto">
                                    @if (isset($video->views))
                                    {{ sizeof($video->views) }} Views
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>

    <div class="videos-row row justify-content-md-center">
        <div class="col-lg-12">
            <div class="heading"   style="text-de: 2px solid white">
                <h2>Trending</h2>
            </div>
            <div class="slick-slider" >
            @foreach ($trendingVideos as $video)
                <div>
                    <div class="boxImg">
                        @php 
                            if($video->record->continueWatches->first()){
                                $v_time = round($video->record->continueWatches->first()->time);
                            }
                            else{
                                $v_time = 0;
                            }
                        @endphp
                        <img src="{{ asset($video->record->thumbnail) }}" data-href="{{ URL::to('/video', $video->record->id) }}"
                            class="video-list clickable" />
                        {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->record->id }}" height='200px' onclick="playVideo(this.id);">
                            <source src="{{ asset($video->record->video_path) }}">
                        </video> --}}
                        <div class="pt-3">
                            <div class="details mt-1">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                </div>
                                <div class="video-details">
                                    <div>{{ $video->record->title }}</div>
                                    <div class="channel">
                                        <a href="{{ route('channel.index', $video->record->user->id) }}" class="color-white">
                                            <span class="text-capitalize">{{ $video->record->user->name }}</span>
                                        </a>
                                    </div>
                                </div>
                                <p class="ml-auto">
                                    @if (isset($video->record->views))
                                    {{ sizeof($video->record->views) }} Views
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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