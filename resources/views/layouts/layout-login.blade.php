<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scoda. - Multipurpose One Page HTML5 Template</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <!--=== Wrapper Start ======-->
    <div class="wrapper">
        <!--=== Section Start ======-->
        <div>@yield('content')</div>
        <!--=== Section End ======-->
    </div>
    <!--=== Javascript Plugins ======-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
    <script src="{{ asset('js/bootsnav.js') }}"></script>
    <!--=== Javascript Plugins End ======-->
</body>

</html>
