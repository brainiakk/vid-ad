@extends('layout.front-master')
@section('title', 'Lance Master | Search Results')

@section('content')

    <div class="videos-row row justify-content-md-center">
        <div class="col-lg-12" style="margin-top: 60px;">
            <div class="filters">
                <h3 class="pl-2 pb-2">Filters</h3>
                <div class="row">
                    <div class="col-md-6 pl-2 pr-1">
                        <select name="category_id" class="form-control" id="categories">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $category_id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 pl-2 pr-1">
                        <select name="topic_id" class="form-control" id="topics">
                            <option value="">Select Topic</option>
                            @foreach($topics as $topic)
                                <option value="{{ $topic->id }}" @if($topic->id == $topic_id) selected @endif>{{ $topic->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="heading">
                <h2>Search Results</h2>
            </div>
            <div class="slick-slider">
                @foreach ($searchVideos as $video)
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
                <h2>Previously Watched</h2>
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
                <h2>People Also Watched</h2>
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
                <h2>Latest From Official Channels</h2>
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

        $('#categories').on('change', function() {
            window.location.href = 'search?category_id=' + $(this).find(':selected').val();
        });

        $('#topics').on('change', function() {
            window.location.href = 'search?category_id=' + $('#categories').find(':selected').val() + '&topic_id=' + $(this).find(':selected').val();
        });
    });
    </script>
@endpush
