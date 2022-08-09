@extends('frontend.master')
@section('title')
RUET-PEDIa Home page
@endsection
@section('content')
<div class="full">

    <div class="main">
        <!--banner-section-->
        @yield('main')

        <!--//Side view section-->
        <div class="banner-right-text">
            <h3 class="tittle">
                Trending <i class="glyphicon glyphicon-facetime-video"></i>
            </h3>
            <!--/general-news-->
            <div class="general-news">
                <div class="general-inner">

                    <div class="edit-pics">
                        @foreach ($posts_trending as $trending)
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                {{-- <img src="images/f4.jpg" class="img-responsive" alt="" /> --}}
                                @foreach (json_decode($trending->post_image) as $image2)
                                    <img src="{{ asset($image2) }}" class="img-responsive" alt="IMage Here">
                                @break
                                @endforeach
                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two">
                                    <a href="{{  route('postView',['id'=>$trending->id]) }}">{{ $trending->post_title}}</a>
                                </h5>
                                <div class="td-post-date two">
                                    <i class="glyphicon glyphicon-time"></i>{{ $trending->created_at}}
                                    <a href="#"><i class="glyphicon glyphicon-comment"></i>0
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endforeach

                    </div>
                    <div class="media">
                        <h3 class="tittle media">
                            Media <i class="glyphicon glyphicon-floppy-disk"></i>
                        </h3>
                        <div class="general-text two">
                            <a href=""><img src="images/gen3.jpg" class="img-responsive" alt="" /></a>
                            <h5 class="top">
                                <a href="">Consetetur sadipscing elit</a>
                            </h5>
                            <p>
                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt labore dolore magna aliquyam eratsed diam justo duo
                                dolores rebum.
                            </p>
                            <p>
                                On Jun 27
                                <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0
                                </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56
                                </a><a class="span_link" href=""><span
                                        class="glyphicon glyphicon-circle-arrow-right"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="general-text two">
                        <a href=""><img src="images/gen2.jpg" class="img-responsive" alt="" /></a>
                        <h5 class="top">
                            <a href="">Consetetur sadipscing elit</a>
                        </h5>
                        <p>
                            Consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt labore dolore magna aliquyam eratsed diam justo duo
                            dolores rebum.
                        </p>
                        <p>
                            On Jun 27
                            <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a
                                class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56
                            </a><a class="span_link" href=""><span
                                    class="glyphicon glyphicon-circle-arrow-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <!--//general-news-->
            <!--/news-->
            <!--/news-->
        </div>
        <div class="clearfix"></div>
        <!--/footer-->

        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
