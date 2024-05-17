<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->
<link rel="icon" href="{{asset('assets/frontend')}}/favicon.ico" type="image/x-icon" />
<title>@yield('title')</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/revslider.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/blogmate.css">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,500,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="{{ isset($bodyclass) ? $bodyclass : 'cms-index-index cms-home-page' }}">
    <div id="page">
        <!-- Header -->
        @include('frontend.includes.header')
        <!-- End Header -->

        <!-- Navigation -->
        @include('frontend.includes.navigation')
        <!-- End Navigation -->
        @yield('content')

        <!-- Footer -->
        @include('frontend.includes.footer')
        <!-- End Footer -->
    </div>
    <!-- mobile menu -->
    @include('frontend.includes.mobile-menu')
    <!-- end mobile menu -->

    <!-- JavaScript -->
    @include('frontend.includes.script')
</body>
</html>
