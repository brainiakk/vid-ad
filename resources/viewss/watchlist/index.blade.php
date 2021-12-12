@extends('layout.front-master')
@section('title', 'Lance Master | Watchlist')

@section('content')
    <div class="videos-row row justify-content-md-center" style="margin-top: 20px !important">
        <div class="col-lg-12">
            <div class="heading">
                <h2>Watchlist</h2>
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
                                <div class="title">
                                    <div>
                                        {{ $video->title }}
                                        <p class="float-right">
                                            @if (isset($video->views))
                                                {{ sizeof($video->views) }} Views
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="details mt-1">
                                    <div class="profile-pic">
                                        <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                    </div>
                                    <div class="video-details">
                                        <div class="channel">
                                            <a href="{{ route('channel.index', $video->user->id) }}" class="color-white">
                                                <span class="text-capitalize">{{ $video->user->name }}</span>
                                            </a>
                                        </div>
                                    </div>
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