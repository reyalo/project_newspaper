@extends('frontend.home.index1')
@section('main')
<!--banner-section-->
        <div class="banner-section">
            <h3 class="tittle">{{ $post->post_name }} <i class="glyphicon glyphicon-file"></i></h3>
            <div class="single">
                @foreach (json_decode($post->post_image) as $image)
                <img src="{{ asset($image) }}" class="img-responsive" alt="" />
                @break
                @endforeach
                <div class="b-bottom">
                    <h5 class="top"><a href="#">{{ $post->post_title }}</a></h5>
                    <p class="sub">{{ $post->long_description }}</p>
                    <p>On {{ $post->created_at }} <a class="span_link" href="#"><span
                                class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span
                                class="glyphicon glyphicon-eye-open"></span>{{ $post->view_count }} </a></p>

                </div>
            </div>
            <div class="single-bottom">
                <div class="single-middle">
                    <ul class="social-share">
                        <li><span>SHARE</span></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i class="tin"> </i></a></li>
                        <li><a href="#"><i class="message"> </i></a></li>
                    </ul>
                    <a href="#"><i class="arrow"> </i></a>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="response">
                <h4>Responses</h4>
                <div class="media response-info">
                    {{-- <div class="media-left response-text-left"> --}}

                        @include('frontend.pages.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])



                        {{-- <a href="#">
                            <img class="media-object" src="{{ asset('') }}images/sin1.jpg" alt="" />
                        </a> --}}
                    {{-- </div> --}}
                    {{-- <div class="media-body response-text-right">
                        <h5><a href="#">Username</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
                            passages of Lorem Ipsum available,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li>Sep 21, 2015</li>
                            <li><a href="single.html">Reply</a></li>
                        </ul>
                        {{-- <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('') }}images/sin2.jpg" alt="" />
                                </a>
                                <h5><a href="#">Username</a></h5>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
                                    passages of Lorem Ipsum available,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li>July 17, 2015</li>
                                    <li><a href="single.html">Reply</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div> --}}
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="coment-form">

                {{-- @auth --}}
                <h4>Leave your comment:</h4>

                <form method="post" action="{{ route('comments.store'   ) }}">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="body"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" /> --}}
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Add Comment" />
                    </div>
                </form>
                {{-- @else
                <h3>Plese Sign-Up to leave your comment</h3>
                @endauth --}}


                {{-- <form>
                    <input type="text" value="Name " onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" value="Email" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
                    <input type="text" value="Website" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Website';}" required="">
                    <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}"
                        required="">Your Comment...</textarea>
                    <input type="submit" value="Submit Comment">
                </form> --}}
            </div>
            <div class="clearfix"></div>
        </div>
        <!--//banner-->
@endsection

