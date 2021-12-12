@extends('layout.studio-dashboard')
@section('title', 'Lance Master | Home Page')

@section('content')
    <section class="streamManager">
        <div class="heading">
            <h2>
                Videos
            </h2>
        </div>

        <div class="row">
            <div class="list-group w-100">
                <div class="list-group-item list-group-item-action active d-flex justify-content-around">
                    <div class="video-group-title text-center">
                        Video
                    </div>
                    <div class="video-group-title text-center">
                        Category
                    </div>
                    <div class="video-group-title text-center">
                        Views
                    </div>
                    <div class="video-group-title text-center">
                        Action
                    </div>
                </div>
                @foreach ($user->videos as $video)

                    <div class="list-group-item list-group-item-action d-flex">
                        <div class="video-group d-flex">
                            <video width='50%' id="recommendedVideoPlayer{{ $video->id }}" onclick="playVideo(this.id);">
                                <source src="{{ asset($video->video_path) }}">
                            </video>
                            <p class="align-self-center px-2">{{ $video->title }}</p>
                        </div>
                        <div class="category align-self-center">
                            {{ $video->category->name }}
                        </div>
                        <div class="table-views align-self-center">
                            @if (sizeof($video->views) > 0)
                                {{ $video->views->count() }} Views
                            @else
                                0 Views
                            @endif
                        </div>
                        <div class="action align-self-center">
                            <a href="{{ route('user.editVideo', $video->id) }}" class="btn btn-sm btn-primary"><i
                                    class="fa fa-edit"></i></a>
                            <a href="{{ route('user.deleteVideo', $video->id) }}" class="btn btn-sm btn-danger"><i
                                    class="fa fa-trash"></i></a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        <div class="playList">

            {{-- @foreach ($user->videos as $video)
                <div>
                    <div class="boxImg">
                        <video controls width='100%' id="recommendedVideoPlayer{{ $video->id }}"
                            onclick="playVideo(this.id);">
                            <source src="{{ asset($video->video_path) }}">
                        </video>
                        <div class="px-3">
                            <div class="title">
                                <div>
                                    {{ $video->title }}
                                    <p class="float-right">
                                        @if (isset($video->view))
                                            @if (sizeof($video->view) > 0)
                                                {{ $video->views->total_views }} Views
                                            @endif
                                        @else
                                            0 Views
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                </div>
                                <div class="video-details">
                                    <div class="channel">
                                        <a href="" class="color-white">
                                            <span class="text-capitalize">{{ $video->user->name }}</span> Channel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </section>
@endsection
