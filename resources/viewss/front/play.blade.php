@extends('layout.front-master')
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
.messages::-webkit-scrollbar {
    width: .6em;
}

.messages::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

.messages::-webkit-scrollbar-thumb {
    background-color: #ccc;
    outline: 1px solid #fff;
    border-radius: 20px;
}
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
    color: #fff;
    background: linear-gradient(120deg, #696767, #5b647a);

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
            <div class="video playerContainer">

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
                        class=" xdPlayer"
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

            <!-- Video Controls -->
                <div id="superplay" title="Play">
                    <svg class="icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 17.804 17.804" style="enable-background:new 0 0 17.804 17.804;" xml:space="preserve"><g><g id="c98_play"><path d="M2.067,0.043C2.21-0.028,2.372-0.008,2.493,0.085l13.312,8.503c0.094,0.078,0.154,0.191,0.154,0.313
			c0,0.12-0.061,0.237-0.154,0.314L2.492,17.717c-0.07,0.057-0.162,0.087-0.25,0.087l-0.176-0.04
			c-0.136-0.065-0.222-0.207-0.222-0.361V0.402C1.844,0.25,1.93,0.107,2.067,0.043z"/></g><g id="Capa_1_78_"></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </div>
                <div id="unlock" title="UnLock">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h2c0-1.66 1.34-3 3-3s3 1.34 3 3v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg>
                </div>
                <div id='speed-list'>
                    <p class='speed-item' data-speed='0.5'>0.5x</p>
                    <p class='speed-item' data-speed='0.75'>0.75x</p>
                    <p class='speed-item' data-speed='1' class='active'>1x</p>
                    <p class='speed-item' data-speed='1.5'>1.5x</p>
                    <p class='speed-item' data-speed='2'>2x</p>
                </div>

                <div id="video-controls">

                    <div class="progress">
                        <span class="current-time">00/00</span>
                        <input class="seek" id="seek" value="0" min="0" type="range" step="1">
                        <span class="total-time">00/00</span>
                    </div>

                    <div class='controls-main'>

                        <div class='controls-left'>
                            <div class='volume'>
                                <div class='icon'>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 9v6h4l5 5V4L7 9H3zm7-.17v6.34L7.83 13H5v-2h2.83L10 8.83zM16.5 12c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77 0-4.28-2.99-7.86-7-8.77z"/></svg>
                                </div>
                                <div class='volume'>
                                    <input id="volumeSeek" value="1" type="range" max="1" min="0" step="0.01">
                                </div>
                            </div>

                        </div>

                        <div id="center_p">
                            <div class="icon" id="rew">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 5V1l-5 5 5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6h-2c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8zm-1.1 11h-.85v-3.26l-1.01.31v-.69l1.77-.63h.09V16zm4.28-1.76c0 .32-.03.6-.1.82s-.17.42-.29.57-.28.26-.45.33-.37.1-.59.1-.41-.03-.59-.1-.33-.18-.46-.33-.23-.34-.3-.57-.11-.5-.11-.82v-.74c0-.32.03-.6.1-.82s.17-.42.29-.57.28-.26.45-.33.37-.1.59-.1.41.03.59.1.33.18.46.33.23.34.3.57.11.5.11.82v.74zm-.85-.86c0-.19-.01-.35-.04-.48s-.07-.23-.12-.31-.11-.14-.19-.17-.16-.05-.25-.05-.18.02-.25.05-.14.09-.19.17-.09.18-.12.31-.04.29-.04.48v.97c0 .19.01.35.04.48s.07.24.12.32.11.14.19.17.16.05.25.05.18-.02.25-.05.14-.09.19-.17.09-.19.11-.32.04-.29.04-.48v-.97z"/></svg>
                            </div>
                            <div class="plybtn" id="play">
                                <button class="player-btn toggle-play icon" title="Toggle Play">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 17.804 17.804" style="enable-background:new 0 0 17.804 17.804;" xml:space="preserve"><g><g id="c98_play"><path d="M2.067,0.043C2.21-0.028,2.372-0.008,2.493,0.085l13.312,8.503c0.094,0.078,0.154,0.191,0.154,0.313
                 c0,0.12-0.061,0.237-0.154,0.314L2.492,17.717c-0.07,0.057-0.162,0.087-0.25,0.087l-0.176-0.04
                 c-0.136-0.065-0.222-0.207-0.222-0.361V0.402C1.844,0.25,1.93,0.107,2.067,0.043z"/></g><g id="Capa_1_78_"></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                </button>
                            </div>
                            <div class="icon" id="for">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M18,13c0,3.31-2.69,6-6,6s-6-2.69-6-6s2.69-6,6-6v4l5-5l-5-5v4c-4.42,0-8,3.58-8,8c0,4.42,3.58,8,8,8s8-3.58,8-8H18z"/><polygon points="10.9,16 10.9,11.73 10.81,11.73 9.04,12.36 9.04,13.05 10.05,12.74 10.05,16"/><path d="M14.32,11.78c-0.18-0.07-0.37-0.1-0.59-0.1s-0.41,0.03-0.59,0.1s-0.33,0.18-0.45,0.33s-0.23,0.34-0.29,0.57 s-0.1,0.5-0.1,0.82v0.74c0,0.32,0.04,0.6,0.11,0.82s0.17,0.42,0.3,0.57s0.28,0.26,0.46,0.33s0.37,0.1,0.59,0.1s0.41-0.03,0.59-0.1 s0.33-0.18,0.45-0.33s0.22-0.34,0.29-0.57s0.1-0.5,0.1-0.82V13.5c0-0.32-0.04-0.6-0.11-0.82s-0.17-0.42-0.3-0.57 S14.49,11.85,14.32,11.78z M14.33,14.35c0,0.19-0.01,0.35-0.04,0.48s-0.06,0.24-0.11,0.32s-0.11,0.14-0.19,0.17 s-0.16,0.05-0.25,0.05s-0.18-0.02-0.25-0.05s-0.14-0.09-0.19-0.17s-0.09-0.19-0.12-0.32s-0.04-0.29-0.04-0.48v-0.97 c0-0.19,0.01-0.35,0.04-0.48s0.06-0.23,0.12-0.31s0.11-0.14,0.19-0.17s0.16-0.05,0.25-0.05s0.18,0.02,0.25,0.05 s0.14,0.09,0.19,0.17s0.09,0.18,0.12,0.31s0.04,0.29,0.04,0.48V14.35z"/></g></g></svg>
                            </div>
                        </div>



                        <div class="controls-right">
                            <div id="lock" title="Lock">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg>
                            </div>
                            <div id="speedbtn" title="Playback Speed">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.38 8.57l-1.23 1.85a8 8 0 0 1-.22 7.58H5.07A8 8 0 0 1 15.58 6.85l1.85-1.23A10 10 0 0 0 3.35 19a2 2 0 0 0 1.72 1h13.85a2 2 0 0 0 1.74-1 10 10 0 0 0-.27-10.44z"/><path d="M10.59 15.41a2 2 0 0 0 2.83 0l5.66-8.49-8.49 5.66a2 2 0 0 0 0 2.83z"/></svg>
                            </div>
                            <div class='fullscreen' title="FullScreen">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Video Controls End -->

            </div>
        </div>
        <live-chat :video="{{ $current_video }}" :user="{{ \Auth::user() }}"></live-chat>
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