@foreach($comments as $comment)
{{-- <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->body }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('comments.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="body" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </form>
    @include('posts.commentsDisplay', ['comments' => $comment->replies])
</div> --}}


<div class="media-body response-text-right" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <h5><a href="#"><strong>{{ $comment->user->name }}</strong></a></h5>
    <p>{{ $comment->body }}</p>
    <ul>
        {{-- <li>{{ date('H:i d-m-Y',strtotime($comment->created_at)) }}</li> --}}
        <li>{{\Carbon\Carbon::parse($comment->created_at)->format('d M y H:i')}}</li>
        <li><button type="button" class="btn btn-sm" data-toggle="collapse" data-target="#reply{{ $comment->id }}" >Reply</button></li>
    </ul>


    <form method="post" class="collapse" id="reply{{ $comment->id }}" action="{{ route('comments.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="body" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" /> --}}
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </form>
    @include('frontend.pages.commentsDisplay', ['comments' => $comment->replies])
</div>

@endforeach
