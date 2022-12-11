<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/imgs/logo.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LogIn</title>
    <style>
        html{
            background: #D3D3D3;
        }
    </style>
</head>
<body>
<div>
    <i style="font-size: 40px" class="fa fa-home" aria-hidden="true"></i>
   <a  style="font-size: 40px" href="{{route('indexPage')}}">Home
    </a>
</div>
    <div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">LogIn</h2>
        <h2 class="inactive underlineHover"><a href="{{route('register.create')}}">Register</a></h2>
            <div class="fadeIn first">
                @if ($errors->any())
                    <div>
                        <ul class="check-list">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                @endif
                {{--            <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />--}}
            </div>
            <form action="{{route('login')}}" method="post">
                @csrf
                <input type="email" id="login" name="email" class="fadeIn second" placeholder="email*">
                <input type="password" id="password" name="password" class="fadeIn third" placeholder="password*">
                <input type="submit" class="fadeIn fourth" value="LogIn">
            </form>

    </div>
</div>
</body>
</html>
