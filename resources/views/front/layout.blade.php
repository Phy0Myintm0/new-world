<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>新世界 - New World</title>
<!-- load stylesheets -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
<!-- Google web font "Open Sans" -->
<link rel="stylesheet" href="{{ asset('vendor/font-awesome-4.5.0/css/font-awesome.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css') }}">
<!-- Bootstrap style -->
<link rel="stylesheet" href="{{ asset('vendor/css/magnific-popup.css') }}">
<!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
<link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
@stack('styles')
</head>

<body>
<!-- Header gallery -->
<div class="container-fluid">
    <!-- navbar -->
    @include('front.navbar')

    <!-- content -->
    @yield('content')

    <!-- footer -->
    @include('front.footer')
</div>
<!-- Placed at the end of the document so the pages load faster -->
@include('front.scripts')
</body>
</html>