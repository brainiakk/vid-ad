@foreach ($comments as $comment)
    <div class="display-comments mt-2 mb-2 text-left qcomment-div" @if ($comment->parent_id != null) style="margin-left:40px" @endif>

        <h6>{{ $comment->user->name }}</h6>
        <p>{{ $comment->body }}</p>

        <a href="" id="reply"></a>

        <form action="{{ route('comments.store') }}" method="POST" class="col-md-4">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control">
                <input type="hidden" name="video_id" value="{{ $video_id }}">
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            </div>

            <button type="submit" class="btn btn-primary">Reply</button>
        </form>

        @isset($comment->likes)

            @if(in_array(auth()->id(), $comment->likes->pluck('user_id')->toArray()))
                <form action="{{ route('comments.dislike') }}" method="POST" class="m-2">
                    @csrf
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                    <button type="submit" class="btn btn-link">Dislike</button>
                </form>
            @else
                <form action="{{ route('comments.like') }}" method="POST" class="m-2">
                    @csrf
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                    <button type="submit" class="btn btn-link">Like</button>
                </form>
            @endif

        @else

            <form action="{{ route('comments.like') }}" method="POST" class="m-2">
                @csrf
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <button type="submit" class="btn btn-link">Like</button>
            </form>

        @endisset

        @if($comment->replies->count())

            <a href="" class="view-replies">View Replies<i class="fa fa-dropdown ml-2"></i></a>
            <div class="replies d-none">
                @include('front.videos.commentsDisplay', ['comments' => $comment->replies] )
            </div>

        @endif

    </div>
@endforeach
