<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('title')

<!-- Favicon -->
    <link rel="shortcut icon"
          href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/img/favicon.ico')}}"
          type="image/x-icon">

    <!-- Font awesome -->
    <link
        href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/css/font-awesome.css')}}"
        rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/css/bootstrap.css')}}"
          rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/css/slick.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet"
          href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/css/jquery.fancybox.css')}}"
          type="text/css" media="screen"/>
    <!-- Theme color -->
    <link id="switcher"
          href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/css/theme-color/default-theme.css')}}"
          rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/css/style.css')}}"
          rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet'
          type='text/css'>

@yield('header-css')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header-js')

</head>
<body>
<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header  -->
@include('layouts.frontend.varsity._partials.header')
<!-- End header  -->
<!-- Start menu -->
@include('layouts.frontend.varsity._partials.menu')
<!-- End menu -->
<!-- Start search box -->
@yield('search-box')
<!-- End search box -->
<!-- Page breadcrumb -->
@yield('breadcrumb')
<!-- End breadcrumb -->
<!-- Start Content  -->
@yield('content')
<!-- End Content  -->


<!-- Start footer -->
@include('layouts.frontend.varsity._partials.footer')
<!-- End footer -->


<!-- jQuery library -->
<script
    src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script
    src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/bootstrap.js')}}"></script>
<!-- Slick slider -->
<script type="text/javascript"
        src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/slick.js')}}"></script>
<!-- Counter -->
<script type="text/javascript"
        src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/waypoints.js')}}"></script>
<script type="text/javascript"
        src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/jquery.counterup.js')}}"></script>
<!-- Mixit slider -->
<script type="text/javascript"
        src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/jquery.mixitup.js')}}"></script>
<!-- Add fancyBox -->
<script type="text/javascript"
        src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/jquery.fancybox.pack.js')}}"></script>

<!-- Custom js -->
<script
    src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/js/custom.js')}}"></script>

@yield('footer-js')

</body>
</html>
