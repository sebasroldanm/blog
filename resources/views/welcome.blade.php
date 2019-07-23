<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Blog Institucional</title>   

    <meta name="description" content="Insert Your Site Description" /> 

    <!-- Mobile Specifics -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>   

    <!-- Mobile Internet Explorer ClearType Technology -->
    <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

    <!-- Bootstrap -->
    <link href="{{ asset('_include/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('_include/css/main.css')}}" rel="stylesheet">

    <!-- Supersized -->
    <link href="{{ asset('_include/css/supersized.css')}}" rel="stylesheet">
    <link href="{{ asset('_include/css/supersized.shutter.css')}}" rel="stylesheet">

    <!-- FancyBox -->
    <link href="{{ asset('_include/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">

    <!-- Font Icons -->
    <link href="{{ asset('_include/css/fonts.css')}}" rel="stylesheet">

    <!-- Shortcodes -->
    <link href="{{ asset('_include/css/shortcodes.css')}}" rel="stylesheet">

    <!-- Responsive -->
    <link href="{{ asset('_include/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link href="{{ asset('_include/css/responsive.css')}}" rel="stylesheet">

    <!-- Supersized -->
    <link href="{{ asset('_include/css/supersized.css')}}" rel="stylesheet">
    <link href="{{ asset('_include/css/supersized.shutter.css')}}" rel="stylesheet">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="#">

    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">

    <!-- Modernizr -->
    <script src="{{ asset('_include/js/modernizr.js')}}"></script>

    <!-- Analytics -->
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'Insert Your Code']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<!-- End Analytics -->

</head>


<body>



    <!-- This section is for Splash Screen -->
    <div class="ole">
        <section id="jSplash">
            <div id="circle"></div>
        </section>
    </div>
    <!-- End of Splash Screen -->

    <!-- Header -->
    <header>
        <div class="sticky-nav">
            <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
            
            <div id="logo">
                <a id="goUp" href="#home-slider" title="Blog Institucional">Blog Institucional</a>
            </div>
            
            <nav id="menu">
                <ul id="menu-nav">
                    <li class="current"><a href="{{ url('/home') }}">Inicio</a></li>
                    <li><a href="{{ url('login') }}">Iniciar Sesión</a></li>
                    <!--<li><a href="#about">Sobre Mí</a></li>-->
                    <li><a href="{{ url('register') }}">Registrarse</a></li>
                    <!--<li><a href="shortcodes.html" class="external">Shortcodes</a></li>-->
                </ul>
            </nav>
            
        </div>
    </header>
    <!-- End Header -->

    <!-- Homepage Slider -->
    <div id="home-slider">  
        <div class="overlay"></div>

        <div class="slider-text">
            <div id="slidecaption"></div>
            {{-- <div id="slider-text"><h1>Blog Institucional</h1></div> --}}
        </div>   

        <div class="control-nav">
            <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
            <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
            <ul id="slide-list"></ul>

            <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
        </div>
    </div>
    <!-- End Homepage Slider -->

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="{{ asset('_include/js/bootstrap.min.js')}}"></script> <!-- Bootstrap -->
<script src="{{ asset('_include/js/supersized.3.2.7.min.js')}}"></script> <!-- Slider -->
<script src="{{ asset('_include/js/waypoints.js')}}"></script> <!-- WayPoints -->
<script src="{{ asset('_include/js/waypoints-sticky.js')}}"></script> <!-- Waypoints for Header -->
<script src="{{ asset('_include/js/jquery.isotope.js')}}"></script> <!-- Isotope Filter -->
<script src="{{ asset('_include/js/jquery.fancybox.pack.js')}}"></script> <!-- Fancybox -->
<script src="{{ asset('_include/js/jquery.fancybox-media.js')}}"></script> <!-- Fancybox for Media -->
<script src="{{ asset('_include/js/jquery.tweet.js')}}"></script> <!-- Tweet -->
<script src="{{ asset('_include/js/plugins.js')}}"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="{{ asset('_include/js/main.js')}}"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>