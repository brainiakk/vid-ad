@extends('layout.front-master')
@section('title', 'Lance Master | Library')

@section('content')
    <div class="videos-row row justify-content-md-center" style="margin-top: 20px !important">
        <div class="col-lg-12 col-lg-offset-2">
            <div class="heading">
                <h2>History</h2>
            </div>
            @if ($historyVideos->count())

                <div class="row">
                    @foreach ($historyVideos as $video)
                        <div class="col-md-3 px-0">
                            <div class="boxImg">
                                <img src="{{ asset($video->video->thumbnail) }}" data-href="{{ URL::to('/video', $video->video->id) }}"
                                    class="video-list clickable" />
                                {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->video->id }}" height='200px' onclick="playVideo(this.id);">
                                    <source src="{{ asset($video->video->video_path) }}">
                                </video> --}}
                                <div class="pt-3">
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
            @else
                <h6 class="text-center">No history found</h6>
            @endif
        </div>
    </div>
@endsection