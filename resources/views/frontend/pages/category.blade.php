@extends('frontend.home.index1')
@section('main')
<div class="banner-section">

    <h3 class="tittle">
        @foreach ($posts as $post_c )
        @if($post_c->category_name)
        All
        <span style="color:#e21737 ;">
            {{ $post_c->category_name }}
        </span>
        News
        <i class="glyphicon glyphicon-align-center"></i>
        @else
        <h1>News Found For this Category.</h1>
        @endif
        @break;
        @endforeach 
    </h3>



    <!-- New CARD -->

    <div class="recent-card">
        @foreach ($posts as $post)
        <div class="item-1">
            <a href="{{  route('postView',['id'=>$post->id]) }}" class="card-inside-recent">
                @foreach (json_decode($post->post_image) as $image)
                <div class="thumb" style="background-image: url('{{ asset($image) }}');"></div>
                @break;
                @endforeach
                <article>
                    <h1>{{ $post->post_title}}</h1>
                    <span>
                        {{ $post->short_description}}
                    </span>
                    <span>
                        On {{ $post->created_at}}
                        <span class="glyphicon glyphicon-comment"></span>0
                        <span class="glyphicon glyphicon-eye-open"></span>
                        {{$post->view_count}}
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>
                    </span>
                </article>
            </a>
        </div>
        @endforeach
    </div>

    <!-- New CARD -->
</div>
@endsection