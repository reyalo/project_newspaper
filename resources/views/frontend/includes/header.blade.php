<div class="h-top" id="home">
    <div class="top-header">
        <div class="m-auto"><a href="{{route('home')}}" class="logo-head">RUET PEDIA</a></div>
        <div class="login-regi">
            <ul class="cl-effect-16 top-nag2">



                @if (Route::has('login'))
                @auth

                {{-- <li>
                            <a href="{{route('logout')}}" data-hover="logout" class="btn btn-primary">logout</a>
                </li> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><a href="#" onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
                    </li>
                </form>
                @else
                <li>
                    <a href="{{route('login')}}" data-hover="Login">Login</a>
                </li>

                @if (Route::has('register'))
                <li>
                    <a href="{{route('register')}}" data-hover="Sign-up">sign-up</a>
                </li>
                @endif
                @endauth
        </div>
        @endif






        </ul>
    </div>

    <div class="clearfix"></div>
</div>
<div class="top-header">
    <ul class="cl-effect-16 top-nag">
        @foreach ($categories as $category)
        <li><a href="{{  route('categoryView',['id'=>$category->id]) }}" data-hover="{{ $category->category_name }}">{{ $category->category_name }}</a></li>
        @endforeach
    </ul>
    <div class="search-box">
        <div class="b-search">
            <form>
                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" />
                <input type="submit" value="" />
            </form>
        </div>
    </div>

    <div class="clearfix"></div>
</div>
</div>