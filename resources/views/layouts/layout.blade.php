<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{asset('assets/caregiverPage/img/logo.png')}}">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{asset('assets/user/css/all.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/user/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/user/css/styles.css')}}?time={{now()}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    @if (session()->has('success'))
        <p style="color: #55ca59; text-align: end;">{{session('success')}}</p>
    @endif
    <main class="tm-main">
        @include('layouts.navbar')
        @yield('header')
        @yield('content')
        <footer class="row tm-row">
            <hr class="col-12">
            <div class="col-md-6 col-12 tm-color-gray">

            </div>

        </footer>
    </main>
</div>
<script src="{{asset('assets/user/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/user/js/templatemo-script.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $('.tm-nav-item a').each(function () {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname
        let link = this.href
        if (link === location) {
            $(this).addClass('active')
            $(this).closest('.tm-nav-item').addClass('active')
        }
    })
</script>
</body>
</html>
