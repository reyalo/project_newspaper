<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title')</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Spin Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
    </script>
    <!-- //Meta-Tags -->
    <!-- Stylesheets -->
    <link href="{{ asset('') }}css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('') }}css/style_login.css" rel='stylesheet' type='text/css' />
    <!--// Stylesheets -->
    <!--fonts-->
    <link
        href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!--//fonts-->
</head>

<body>
    <h1>RUET-PEDIA</h1>
    <div class="clear-loading spinner">
        <span></span>
    </div>
    <div class="w3ls-login box box--big">

        <!-- form starts here -->
        @yield('content')
        <!-- //form ends here -->
    </div>
    <!--copyright-->
    <div class="copy-wthree">
        <p>© 2022 All Rights Reserved
            <a href="http://ruet.ac.bad/" target="_blank">R U E T</a>
        </p>
    </div>
    <!--//copyright-->
</body>

</html>
