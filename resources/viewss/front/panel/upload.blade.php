@extends('layout.studio-dashboard')
@section('title', 'Lance Master | Home Page')

@section('content')


    <section class="streamManager">
        <div class="heading">
            <h2>
                Upload Video
            </h2>
        </div>
        <div class="form">
            <form action="{{ route('user.storeVideo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="w-49">
                        <label for="videoTitle">Video title</label>
                        <input type="text" name="video_title" id="videoTitle" class="form-control" placeholder="Video Title"
                            required>
                    </div>

                    <div class="w-49 mt-4">
                        <input type="file" name="video" required>
                    </div>
                    <div class="w-100 mt-4">
                        <label for="description">Video Description</label>
                        <textarea name="video_description" id="description" class="form-control w-100" rows="10"></textarea>
                    </div>
                    <div class="w-49 mt-4">
                        <label for="videoCategory">Video Category</label>
                        <br>
                        <select name="video_category" id="videoCategory" class="w-100 " required>
                            <option value="" selected disabled>Please Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-49 mt-4">
                        <label for="videoPlaylist">Video Playlist</label>
                        <div class="w-100" id="playlistCheck">
                            <input type="radio" name="playList" value="yes" id="playListYes"
                                onchange="showPlaylistSelect(this.value)"> Yes :
                            <input type="radio" name="playList" value="No" id="playListNo"
                                onchange="showPlaylistSelect(this.value)"> No :
                        </div>
                        <div class="w-100 d-none" id="playlistSelect">
                            <br>
                            <select name="video_playlist" id="videoPlaylist" class="w-100 ">
                                <option value="0" selected disabled>Please Select Playlist</option>
                                @foreach ($playlists as $playlist)
                                    <option value="{{ $playlist->id }}">{{ $playlist->playlist_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-100 mt-4">
                        <label for="topic">Topic</label>
                        <input type="text" name="topic" id="topic" class="form-control" placeholder="Topic">
                    </div>
                    <div class="w-49 mt-4">
                        <label for="tags">Video Tags <sub class="red">Please separate tags with ,</sub></label>
                        <input type="text" name="video_tags" id="tags" class="form-control" placeholder="Video Title">
                    </div>

                    <div class="w-49 mt-4">
                        <label for="tags">Thumbnail</label>
                        <input type="file" name="thumbnail" class="d-block" required>
                    </div>

                    <div class="w-49 mt-4">
                        <button type="submit" class="btn btn-primary">Upload Video</button>
                    </div>

                </div>
            </form>
        </div>
    </section>


@endsection
