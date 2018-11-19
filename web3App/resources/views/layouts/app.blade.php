<?php
/**
 * Created by PhpStorm.
 * User: IVAN PC
 * Date: 11/19/2018
 * Time: 5:17 PM
 */
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hello</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class = "container">
        @if(Request::is('/'))
        @include('inc.showcase')
        @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')

        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
    </div>

<footer id="footer" class="text-center">
    <p>Copyright 2019 &copy; YALLA !</p>
</footer>
</body>
</html>
