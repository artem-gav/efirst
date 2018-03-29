<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>
        {{ isset($title) ? $title.' :: '.config('backpack.base.project_name').' Admin' : config('backpack.base.project_name').' Admin' }}
    </title>

    @yield('before_styles')

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('vendor/production/') }}/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('vendor/production/') }}/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/production/') }}/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('vendor/production/') }}/css/custom.css" rel="stylesheet">
    <link href="{{ asset('vendor/production/') }}/css/icheck/flat/green.css" rel="stylesheet">

    @yield('after_styles')

    <script src="{{ asset('vendor/production/') }}/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('vendor/production/') }}/assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:#F7F7F7;">

<div id="wrapper">
    @yield('content')
</div>

</body>

</html>