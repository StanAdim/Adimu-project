<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','testProject')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
@include('layout.nav')
<div class="container-fluid" id="main">
    <div class="container py-2" id="part">
        @yield('section')
    </div>
</div>

</body>
<script src="{{asset('js/app.js')}}"></script>
</html>