<!DOCTYPE html>
<html>

<head>
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <link href="{{ asset('') }}css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic" rel="stylesheet" type="text/css" />
  <!--Custom-Theme-files-->
  <link href="{{ asset('') }}css/style.css" rel="stylesheet" type="text/css" />
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
  <script src="{{ asset('') }}js/jquery.min.js"></script>

  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--/script-->
  <script type="text/javascript" src="{{ asset('') }}js/move-top.js"></script>
  <script type="text/javascript" src="{{ asset('') }}js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $("html,body").animate({
          scrollTop: $(this.hash).offset().top
        }, 900);
      });
    });
  </script>
</head>

<body>
  <!-- header-section-starts -->
  @include('frontend.includes.header')


  @yield('content')
  <!--//footer-->
  @include('frontend.includes.footer')
  <!--start-smooth-scrolling-->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

      $().UItoTop({
        easingType: "easeOutQuart"
      });
    });
  </script>
  <a href="#home" id="toTop" class="scroll" style="display: block">
    <span id="toTopHover" style="opacity: 1"> </span></a>
</body>

</html>