@extends('layout.front-master')
@section('title', 'Lance Master | History')

@section('content')
    <div class="playRow mt-4">
        <div class="heading">
            <h2>Watch History</h2>
        </div>
        <div class="historyList" style="width: 70%">
            @foreach ($historyVideos as $video)
                <table>
                    <br><br>
                    <tr >
                        <th><div style="border-bottom: 1px solid white;"></th>
                    </tr>
                    <tr>
                        <th style="padding-top: 10px;"><h6>{{ $video->updated_at->format('M d') }}</h6></th>
                    </tr>
                    <tr>
                        <td style="width: 300px;height: 200px;max-width: 300px;padding-right: 30px;">
                            <img src="{{ asset($video->video->thumbnail) }}" data-href="{{ URL::to('/video', $video->video->id) }}"
                            class="video-list clickable" />    
                        </td>
                        <td>
                            <h5 style="text-decoration-line: underline">{{$video->video->title}}<h5>
                            <!-- <div class="details">
                                <div class="profile-pic">
                                    <img src="{{ asset('assets/front/images/dummy.jpg') }}" alt="">
                                </div>
                                <div class="video-details">
                                    <div class="channel">
                                        <a href="{{ route('channel.index', $video->video->user->id) }}" class="color-white">
                                            <span class="text-capitalize">{{ $video->video->user->name }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>    
                            <p style="font-size: 13px;color: goldenrod;font-weight: bold;line-height: normal;">
                                @if (isset($video->video->views))
                                    {{ sizeof($video->video->views) }} Views
                                @endif
                            </p>
                            <small>{{$video->video->description}}</small> -->
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
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div class="px-3">
                                <div class="title">
                                    <div>
                                        {{ $video->video->title }}
                                    </div>
                                </div>
                            </div>        
                        </th>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>

@endsection
