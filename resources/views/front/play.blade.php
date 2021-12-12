@extends('layouts.app')
@section('title', 'Lance Master | Home Page')
<style>
    .video{
    position: relative;
    overflow: hidden;
    margin-top: 80px !important;
    
    }
    #my_overlay {
	background:rgba(0,0,0,0.5);
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index:199;
	display:none;
	overflow:hidden;
}
.responsive-iframe {
  position: relative;
  top: 5%;
  left: 1%;
  width: 98%;
  height: 90%;
}
#my_overlay .overlay-in {
	position:absolute;
	top:50%;
	left:50%;
  width: 100%;
  height: 100%;
	transform: translate(-50%, -50%);
	display:inline-block;
}
#my_overlay .overlay-close {
	width: 120px;
	height: 40;
	background-image:url('{{ asset("assets/images/skip-ad.svg") }}');
    background-size: contain;
    background-repeat: no-repeat;
	bottom: 40px;
	right:40px;
	cursor:pointer;
	position:absolute;
}
#my_overlay .overlay-count {
	width: 120px;
	height: 40;
    font-size: 35px;
    color: #fff;
	bottom: 40px;
	right:40px;
	cursor:pointer;
	position:absolute;
}


/*--------------------
Chat
--------------------*/
.chat {
  position: absolute;
  top: 55%;
  left: 45%;
  transform: translate(-50%, -50%);
  width: 300px;
  height: 70vh;
  max-height: 500px;
  z-index: 2;
  overflow: hidden;
  box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2);
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: space-between;
  flex-direction: column;
}

.bg {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
  filter: blur(80px);
  transform: scale(1.2);
}

/*--------------------
Chat Title
--------------------*/
.chat-title {
  flex: 0 1 45px;
  position: relative;
  z-index: 2;
  background: rgba(147, 147, 147, 0.2);
  color: #fff;
  text-transform: uppercase;
  text-align: left;
  padding: 10px 10px 10px 50px;
}
.chat-title h1, .chat-title h2 {
  font-weight: normal;
  font-size: 10px;
  margin: 0;
  padding: 0;
}
.chat-title h2 {
  color: rgba(255, 255, 255, 0.5);
  font-size: 8px;
  letter-spacing: 1px;
}
.chat-title .avatar {
  position: absolute;
  z-index: 1;
  top: 8px;
  left: 9px;
  border-radius: 30px;
  width: 30px;
  height: 30px;
  overflow: hidden;
  margin: 0;
  padding: 0;
  border: 2px solid rgba(255, 255, 255, 0.24);
}
.chat-title .avatar img {
  width: 100%;
  height: auto;
}

/*--------------------
Messages
--------------------*/
.messages {
  flex: 1 1 auto;
  color: rgba(255, 255, 255, 0.5);
  overflow: hidden;
  position: relative;
  width: 100%;
}
.messages .messages-content {
  position: absolute;
  top: 0;
  left: 0;
  height: 101%;
  width: 100%;
}
.messages .message {
  clear: both;
  float: left;
  padding: 6px 10px 7px;
  border-radius: 10px 10px 10px 0;
  background: rgba(0, 0, 0, 0.3);
  margin: 8px 0;
  font-size: 11px;
  line-height: 1.4;
  margin-left: 35px;
  position: relative;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}
.messages .message .timestamp {
  position: absolute;
  bottom: -15px;
  font-size: 9px;
  color: rgba(255, 255, 255, 0.3);
}
.messages .message::before {
  content: "";
  position: absolute;
  bottom: -6px;
  border-top: 6px solid rgba(0, 0, 0, 0.3);
  left: 0;
  border-right: 7px solid transparent;
}
.messages .message .avatar {
  position: absolute;
  z-index: 1;
  bottom: -15px;
  left: -35px;
  border-radius: 30px;
  width: 30px;
  height: 30px;
  overflow: hidden;
  margin: 0;
  padding: 0;
  border: 2px solid rgba(255, 255, 255, 0.24);
}
.messages .message .avatar img {
  width: 100%;
  height: auto;
}
.messages .message.message-personal {
  float: right;
  color: #fff;
  text-align: right;
  background: linear-gradient(120deg, #248A52, #257287);
  border-radius: 10px 10px 0 10px;
}
.messages .message.message-personal::before {
  left: auto;
  right: 0;
  border-right: none;
  border-left: 5px solid transparent;
  border-top: 4px solid #257287;
  bottom: -4px;
}
.messages .message:last-child {
  margin-bottom: 30px;
}
.messages .message.new {
  transform: scale(0);
  transform-origin: 0 0;
  -webkit-animation: bounce 500ms linear both;
          animation: bounce 500ms linear both;
}
.messages .message.loading::before {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  content: "";
  display: block;
  width: 3px;
  height: 3px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.5);
  z-index: 2;
  margin-top: 4px;
  -webkit-animation: ball 0.45s cubic-bezier(0, 0, 0.15, 1) alternate infinite;
          animation: ball 0.45s cubic-bezier(0, 0, 0.15, 1) alternate infinite;
  border: none;
  -webkit-animation-delay: 0.15s;
          animation-delay: 0.15s;
}
.messages .message.loading span {
  display: block;
  font-size: 0;
  width: 20px;
  height: 10px;
  position: relative;
}
.messages .message.loading span::before {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  content: "";
  display: block;
  width: 3px;
  height: 3px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.5);
  z-index: 2;
  margin-top: 4px;
  -webkit-animation: ball 0.45s cubic-bezier(0, 0, 0.15, 1) alternate infinite;
          animation: ball 0.45s cubic-bezier(0, 0, 0.15, 1) alternate infinite;
  margin-left: -7px;
}
.messages .message.loading span::after {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  content: "";
  display: block;
  width: 3px;
  height: 3px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.5);
  z-index: 2;
  margin-top: 4px;
  -webkit-animation: ball 0.45s cubic-bezier(0, 0, 0.15, 1) alternate infinite;
          animation: ball 0.45s cubic-bezier(0, 0, 0.15, 1) alternate infinite;
  margin-left: 7px;
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}

/*--------------------
Message Box
--------------------*/
.message-box {
  flex: 0 1 40px;
  width: 100%;
  background: rgba(147, 147, 147, 0.3);
  padding: 10px;
  position: relative;
}
.message-box .message-input {
  background: none;
  border: none;
  outline: none !important;
  resize: none;
  color: rgba(255, 255, 255, 0.7);
  font-size: 11px;
  height: 17px;
  margin: 0;
  padding-right: 20px;
  width: 265px;
}
.message-box textarea:focus:-webkit-placeholder {
  color: transparent;
}
.message-box .message-submit {
  position: absolute;
  z-index: 1;
  top: 9px;
  right: 10px;
  color: #fff;
  border: none;
  background: #248A52;
  font-size: 10px;
  text-transform: uppercase;
  line-height: 1;
  padding: 6px 10px;
  border-radius: 10px;
  outline: none !important;
  transition: background 0.2s ease;
}
.message-box .message-submit:hover {
  background: #1D7745;
}

/*--------------------
Custom Srollbar
--------------------*/
.mCSB_scrollTools {
  margin: 1px -3px 1px 0;
  opacity: 0;
}

.mCSB_inside > .mCSB_container {
  margin-right: 0px;
  padding: 0 10px;
}

.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
  background-color: rgba(0, 0, 0, 0.5) !important;
}

/*--------------------
Bounce
--------------------*/
@-webkit-keyframes bounce {
  0% {
    transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  4.7% {
    transform: matrix3d(0.45, 0, 0, 0, 0, 0.45, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  9.41% {
    transform: matrix3d(0.883, 0, 0, 0, 0, 0.883, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  14.11% {
    transform: matrix3d(1.141, 0, 0, 0, 0, 1.141, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  18.72% {
    transform: matrix3d(1.212, 0, 0, 0, 0, 1.212, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  24.32% {
    transform: matrix3d(1.151, 0, 0, 0, 0, 1.151, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  29.93% {
    transform: matrix3d(1.048, 0, 0, 0, 0, 1.048, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  35.54% {
    transform: matrix3d(0.979, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  41.04% {
    transform: matrix3d(0.961, 0, 0, 0, 0, 0.961, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  52.15% {
    transform: matrix3d(0.991, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  63.26% {
    transform: matrix3d(1.007, 0, 0, 0, 0, 1.007, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  85.49% {
    transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  100% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
}
@keyframes bounce {
  0% {
    transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  4.7% {
    transform: matrix3d(0.45, 0, 0, 0, 0, 0.45, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  9.41% {
    transform: matrix3d(0.883, 0, 0, 0, 0, 0.883, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  14.11% {
    transform: matrix3d(1.141, 0, 0, 0, 0, 1.141, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  18.72% {
    transform: matrix3d(1.212, 0, 0, 0, 0, 1.212, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  24.32% {
    transform: matrix3d(1.151, 0, 0, 0, 0, 1.151, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  29.93% {
    transform: matrix3d(1.048, 0, 0, 0, 0, 1.048, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  35.54% {
    transform: matrix3d(0.979, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  41.04% {
    transform: matrix3d(0.961, 0, 0, 0, 0, 0.961, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  52.15% {
    transform: matrix3d(0.991, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  63.26% {
    transform: matrix3d(1.007, 0, 0, 0, 0, 1.007, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  85.49% {
    transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  100% {
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
}
@-webkit-keyframes ball {
  from {
    transform: translateY(0) scaleY(0.8);
  }
  to {
    transform: translateY(-10px);
  }
}
@keyframes ball {
  from {
    transform: translateY(0) scaleY(0.8);
  }
  to {
    transform: translateY(-10px);
  }
}
</style>
    <?php
    // dd($video->video_path);
    ?>
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="video">

                @php 
                if($current_video->continueWatches->first()){
                    $v_time = round($current_video->continueWatches->first()->time);
                }
                else{
                    $v_time = 0;
                }
                @endphp
                <video
                        controls
                        class="recommended-videos"
                        id="recommendedVideoPlayer{{ $current_video->id }}"
                        data-id="{{ $current_video->id }}"
                        data-time="{{ $v_time }}"
                        muted="muted"  autoplay="false"
                >
                    <source src="{{ asset($current_video->video_path) }}" type="video/mp4">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    Your browser does not support the video tag.
                
                </video>
                <div id="my_overlay">
                    <div class="overlay-in">
                    // Banner Ad Code Here.
                    </div>
                    <div class="overlay-close"></div>
                    <div class="overlay-count"></div>
                </div>
                {{-- <video autoplay controls id="{{ $video->id }}" onseeked="writeVideoTime(this.id,this.currentTime);"
                    onclick="writeVideoTime(this.id,this.currentTime);"
                    class="recommended-videos" id="recommendedVideoPlayer{{ $video->id }}" data-id="{{ $video->id }}" data-time="{{ $v_time }}">
                    <source src="{{ asset($video->video_path) }}" type="video/mp4">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    Your browser does not support the video tag.
                </video> --}}
                {{-- <video autoplay controls id="{{ $video->id }}" onseeked="writeVideoTime(this.id,this.currentTime);"
                    onclick="writeVideoTime(this.id,this.currentTime);">
                    <source src="{{ asset($video->video_path) }}" type="video/mp4">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    Your browser does not support the video tag.
                </video> --}}
            </div>
        </div>
        <div class="col-md-4" style="padding-left: 0 !important;">
            <div class="chat">
                <div class="chat-title">
                <h1>{{ auth()->user()->name }}</h1>
                <h2>Supah</h2>
                <figure class="avatar">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure>
                </div>
                <div class="messages">
                <div class="messages-content">
                   
                </div>
                </div>
                <div class="message-box">
                <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
                <button type="submit" class="message-submit">Send</button>
                </div>
            
            </div>
            <div class="bg"></div>
        </div>
    </div>

    <div class="w-95">
        <div class="user-details my-3">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    @if ($current_video->user->profile == null)
                        <img src="{{ asset('assets/images/avatar-1.jpg') }}" alt="..." class="profile-image play">
                    @else
                        <img src="{{ asset($current_video->user->profile->profile_image) }}" alt="..." class="profile-image">
                    @endif

                    <div class="align-self-center px-3">
                        <h4> <a href="{{ route('channel.index', $current_video->user->id) }}"
                                class="text-light font-weight-bold">{{ $current_video->user->name }}</a></h4>
                        <p>{{ sizeof($current_video->user->subscribers) }} Subscribers</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="engagements">
            <h4 class="text-left" style="padding-bottom: 10px;">{{ $current_video->title }}</h4>
            <div class="d-flex flex-column">
                <div class="col-md-3 d-flex" style="padding-left: -11px;margin-left: -15px;">
                    <p style="margin: 0px 20px 0px 0px;">{{ sizeof($current_video->views) }} Views</p>
                    <p>
                        {{ explode('-', date('M d, Y', strtotime($current_video->created_at)))[0] }}
                    </p>
                </div>
                <div class="d-flex" style="padding-top: 0px;margin-top: 0px;font-size: 15px;">
                    <div class="d-flex flex-column mx-1" style="padding-left: -29px;">
                        @if (!empty($like))
                        <a class="text-light" href="{{ url('dislike',request()->id) }}"><i class="fa fa-heart ml-2"></i></a>Dislike
                        @else
                        <a class="text-light" href="{{ url('like',request()->id) }}"><i class="fa fa-heart ml-2"></i></a>Like
                        @endif
                    </div>
                    <div class="d-flex flex-column mx-2" style="padding-left: -29px;">
                        <a class="text-light share" href="#"><i class="fa fa-share ml-3"></i></a>
                        Share
                    </div>
                    <div class="d-flex flex-column">
                        @if(session()->get('success'))
                            <a class="text-light" href="#"><i class="fa fa-check ml-2"></i></a>
                            Saved
                        @else
                        <a class="text-light dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus ml-2"></i></a>
                        Save
                        <ul class="dropdown-menu" style="max-width: 150px;">
                            @if($playlists->count())
                                @foreach($playlists as $playlist)
                                    <li>
                                        <a href="" class="save-to-playlist">{{ $playlist->playlist_name }}</a>
                                        <form action="{{ route('channel.assignVideoToPlaylist', $playlist->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="video_id" value="{{ $current_video->id }}">
                                        </form>
                                    </li>
                                @endforeach
                            @else
                                <li>No playlist found</li>
                            @endif
                        </ul>
                        @endif
                    </div>
                    @php
                        $subscribe = false;
                    @endphp
                    @foreach (auth()->user()->subscribers as $item)
                        @if ($item->pivot->subscriber_id == auth()->id())
                            @php
                                $subscribe = true;
                            @endphp
                            <div class="d-flex flex-column mx-3">
                                <a href="{{ route('channel.unsubscribe', [$item->pivot->subscriber_id, $item->pivot->account_id]) }}"
                                    class="text-light dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa {{ $item->pivot->notifications ? 'fa-bell' : 'fa-bell-slash' }} ml-4"></i>
                                </a>
                                Subscribed
                                <ul class="dropdown-menu" style="max-width: 150px;">
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
                            </div>
                        @endif
                    @endforeach
                    @if (!$subscribe)
                        <div class="d-flex flex-column mx-3">
                            <a href="{{ route('channel.subscribe', auth()->user()->id) }}" class="text-light">
                                <i class="fa fa-bell ml-4"></i>
                            </a>
                            Subscribe
                        </div>
                    @endif


                </div>
            </div>
        </div>
        <hr>
        <div class="videos mt-3">
            <div class="tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#suggested" class="nav-link active" data-toggle="tab">Suggested</a>
                    </li>
                    <li class="nav-item">
                        <a href="#comments" class="nav-link" data-toggle="tab">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a href="#details" class="nav-link" data-toggle="tab">Details</a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="tab-content">
        <div class="tab-pane fade show active" id="suggested" style="padding-left: 0px;">
            <div class="slick-slider">
                @foreach ($suggestedVideos as $video)
                <div>
                    <div class="boxImg">
                        <img src="{{ asset($video->thumbnail) }}" data-href="{{ URL::to('/video', $video->id) }}"
                            class="video-list clickable" />
                        {{-- <video controls width='100%' id="recommendedVideoPlayer{{ $video->record->id }}" height='200px'
                        onclick="playVideo(this.id);">
                        <source src="{{ asset($video->record->video_path) }}">
                        </video> --}}
                        <div class="pt-3">
                            <!-- <div class="title">
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

        <div class="tab-pane fade text-left" id="comments">

            <div class="float-left">
                Sort Comments<a class="text-light dropdown-toggle" href="" data-toggle="dropdown"><i class="fa fa-dropdown ml-2"></i></a>
                <ul class="dropdown-menu" style="max-width: 150px;">
                    <li>
                        <a href="{{ url('video/' . $current_video->id . '?sort_comments=newest') }}" class="newest-comments">Newest First</a>
                    </li>
                    <li>
                        <a href="{{ url('video/' . $current_video->id . '?sort_comments=top') }}" class="top-comments">Top Comments</a>
                    </li>
                </ul>
            </div>
            <br>

            @if($sort_comments == 'newest')
            
                @include('front.videos.commentsDisplay', ['comments' => $current_video->comments->sortByDesc('created_at') , 'video_id' => $current_video->id])

            @else

                @include('front.videos.commentsDisplay', ['comments' => $current_video->comments , 'video_id' => $current_video->id])

            @endif

            <hr>
            <h4 class="text-left">Add Comment</h4>
            <form action="{{ route('comments.store') }}" method="POST" class="col-md-12 p-0">
                @csrf
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                    <input type="hidden" name="video_id" value="{{ $current_video->id }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Comment</button>
                </div>
            </form>
            {{-- {{ $video->comments }} --}}
        </div>

        <div class="tab-pane fade" id="details">

        </div>
    </div>
    </div>
@endsection
@section('jscripts')

<script>

    function syncWatchTime(videoId, currentTime){//pass video id to this function where you call it.
        // console.log(videoId);
        // console.log(currentTime);

        var data = {time: currentTime}; //data to send to server 
        var dataType = "json";//expected datatype from server 
        var headers = { 'X-CSRF-TOKEN': $('input[name="_token"]').val()};
        $.ajax({   
            url: '/store/'+videoId,   //url of the server which stores time data   
            data: data,
            headers: headers,
            dataType: dataType,
            success: function(data,status){
                    // alert(status);
                    // var data = JSON.parse(data)
                    // console.log(data['message']);
            }   
        });
    }

    // This function runs when page is done loading
    $(function() {

        var elements = document.getElementsByClassName("recommended-videos");

        var dataType = "json";//expected datatype from server 
        var headers = { 'X-CSRF-TOKEN': $('input[name="_token"]').val()};
        var adPath = '';
        $.ajax({   
            url: '/play-ad',   //url of the server which stores time data   
            headers: headers,
            dataType: dataType,
            success: function(data,status){
                adPath = `{{ asset('${data.substr(1)}') }}`;
            }, 
            async: false // <- this turns it into synchronous   
        });
                    console.log(adPath);
        var loadVideoFunction = function(vid_id, vid_time) {
            var myvideo = document.getElementById(vid_id);
            videoStartTime = vid_time;
            myvideo.currentTime = videoStartTime;
            console.log('Current Time', myvideo.currentTime);
            console.log('Video ID:', vid_id);
            // $('.video').click();
            // video = jQuery('#'+vid_id).get()[0];
            showAd(vid_id)
            // $('#'+vid_id)[0].addEventListener('play', event => {console.log('PLAY');});
        };
        var showAd = function(vid_id) {
            var myvideo = document.getElementById(vid_id);
            if(adPath != ''){
                $("#my_overlay").fadeIn();
                $('.overlay-count').show();
                $('.overlay-close').hide();
                var count = 5;
                var x = setInterval(function() {
                    $('.overlay-count').html('<b>'+count+'s</b>');
                    count--;
                    if (count < 1) {
                        clearInterval(x);
                        $('.overlay-close').show();
                        $('.overlay-count').hide();
                    }
                }, 1000);
                myvideo.pause();
                $('.overlay-in').html('<iframe class="responsive-iframe" autoplay="true" src="'+adPath+'"></iframe>');
            }else{
                myvideo.play();
            }
            
        }

        for (var i = 0; i < elements.length; i++) {
            var vid_id = elements[i].getAttribute("id");
            var vid_time = elements[i].getAttribute("data-time");
            elements[i].addEventListener('loadedmetadata', loadVideoFunction(vid_id, vid_time), false);
        }

        document.querySelectorAll('.recommended-videos').forEach(item => {
            item.addEventListener('play', event => {
                console.log('PLAY');
            });

            item.addEventListener('pause', event => {
                // if(adPath != ''){
                //     $("#my_overlay").fadeIn();
                //     $('.overlay-in').html('<iframe class="responsive-iframe" autoplay="true" src="'+adPath+'"></iframe>');
                // }
                console.log('PAUSE');                
            });

            item.addEventListener('timeupdate', event => {
                let req_stat = item.currentTime % 3;
                if(req_stat <= 0.4){
                    let vid_id = item.getAttribute("data-id");
                    console.log(req_stat);
                    syncWatchTime(vid_id, item.currentTime)
                }

            });
        })

        function onPlayProgress(data) {
            status.text(data.seconds + 's played');
        }


    $('.overlay-close').click(function () {
        $("#my_overlay").fadeOut();
        let vid = document.getElementById(vid_id);
        vid.play();
    });
    });


    // function playVideo(id) {
    //     $(`#${id}`).click(function() {
    //         this.paused ? this.play() : this.pause();
    //     });

    // }

    $(document).ready(function(){

        $('.share').on('click', function(e){
            e.preventDefault();

            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(window.location.href).select();
            document.execCommand("copy");
            $temp.remove();
            alert('Video URL copied to clipboard');
        });


        $('.save-to-playlist').on('click', function(e){
            e.preventDefault();

            $(this).siblings('form').submit();
        });

        $('.view-replies').on('click', function(e){
            e.preventDefault();

            $(this).siblings('.replies').removeClass('d-none');
            $(this).hide();
        });
    });
    var $messages = $('.messages-content'),
    d, h, m,
    i = 0;


</script>

@endsection

@push('scripts')
    <script>
    $( function() {
        $('.slick-track').addClass('float-left');
    });
    </script>
@endpush