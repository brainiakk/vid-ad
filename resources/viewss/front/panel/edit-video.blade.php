@extends('layout.studio-dashboard')
@section('title', 'Lance Master | Home Page')

@section('content')


    <h2 class="text-uppercase"> Edit {{ $video->title }}</h2>
    <form class="" method="POST" action="{{ route('user.updateVideo', $video->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">

            <div class="col-md-6">
                <label>Video Title</label>
                <input type="text" class="form-control" name="video_title" placeholder="Video Title"
                    value="{{ $video->title }}" />
            </div>

            <div class="col-md-6">
                <label>Video Category</label>
                <select name="video_category" id="videoCategory" class="w-100 " required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $video->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-12 mt-3">
                <label>Video Description</label>
                <textarea name="description" class="form-control" rows="10">{{ $video->description }}</textarea>
            </div>
            <div class="col-md-6 mt-3">
                <label>Video Tags <sub class="red">Please separate tags with ,</sub></label>
                <input type="text" name="video_tags" value="{{ $video->tags }}" id="tags" class="form-control"
                    placeholder="Video Title">
            </div>


            <div class="col-md-6 mt-3">
                <label for="videoPlaylist">Video Playlist</label>

                {{-- {{ $video->playlists[0] }} --}}
                <div class="w-100" id="playlistCheck">
                    <input type="radio" name="playList" value="yes" id="playListYes"
                        onchange="showPlaylistSelect(this.value)">
                    Yes :
                    <input type="radio" name="playList" value="No" id="playListNo"
                        onchange="showPlaylistSelect(this.value)"> No
                    :
                </div>
                {{-- {{ sizeof($video->playlists) }} --}}
                <div class="w-100 d-none" id="playlistSelect">
                    <br>

                    @if (sizeof($video->playlists) > 0)
                        <select name="video_playlist" id="videoPlaylist" class="w-100 ">
                            @foreach ($playlists as $playlist)
                                <option value="{{ $playlist->id }}"
                                    {{ $video->playlists[0]->id == $playlist->id ? 'selected' : '' }}>
                                    {{ $playlist->playlist_name }}
                                </option>
                            @endforeach
                        </select>
                    @else
                        <select name="video_playlist" id="videoPlaylist" class="w-100 ">
                            <option value="" disabled selected>Select Playlist</option>
                            @foreach ($playlists as $playlist)
                                <option value="{{ $playlist->id }}"> {{ $playlist->playlist_name }} </option>
                            @endforeach
                        </select>
                    @endif
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <label class="d-block">Video Thumbnail</label>
                <img src="{{ $video->thumbnail }}>" id="preview-image"
                    class="img-thumbnail {{ $video->thumbnail == null ? 'd-none' : '' }} m-auto" alt="...">
                <input type='file' name="thumbnail" id="thumbnail" />

            </div>
            <div class="col-md-6 mt-4">
                <label class="d-block">Video</label>
                <video controls width='100%' height="250px" id="recommendedVideoPlayer{{ $video->id }}"
                    onclick="playVideo(this.id);">
                    <source src="{{ asset($video->video_path) }}">
                </video>
                <input type="file" name="video" id="video">
            </div>

            <div class="m-auto py-5">
                <div class="col-12">
                    <button class="btn btn-block btn-primary">
                        Update
                    </button>
                </div>
            </div>

        </div>

    </form>

@endsection
