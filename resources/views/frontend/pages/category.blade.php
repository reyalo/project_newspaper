@extends('frontend.home.index1')
@section('main')
<div class="banner-section">

    <h3 class="tittle">
        @foreach ($posts as $post_c )
        @if($post_c->category_name)
        All
        "{{ $post_c->category_name }}"
        News
        @else
            <h1>News Found For this Category.</h1>
        @endif
        @break;
        @endforeach
         <i class="glyphicon glyphicon-picture"></i>
    </h3>



    <!--/top-news-->
    <div class="top-news">

        <div class="top-inner second">
            @foreach ($posts as $post)
            <div class="col-md-6 top-text two">
                <a href="{{  route('postView',['id'=>$post->id]) }}">

                    @foreach (json_decode($post->post_image) as $image)
                    <img src="{{ asset($image) }}" height="10" class="img-responsive" alt="IMage Here">
                    @break;
                    @endforeach
                </a>
                <h5 class="top">
                    <a href="{{  route('postView',['id'=>$post->id]) }}">{{ $post->post_title}}</a>
                </h5>
                <p>
                    {{ $post->short_description}}
                </p>
                <p>
                    On {{ $post->created_at}}
                    <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a
                        class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span> {{
                        $post->view_count}}
                    </a><a class="span_link" href="{{  route('postView',['id'=>$post->id]) }}"><span
                            class="glyphicon glyphicon-circle-arrow-right"></span></a>
                </p>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
    <!--//top-news-->
</div>
@endsection
