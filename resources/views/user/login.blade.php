<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Մուտք</title>
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">Մուտք</h2>
        <h2 class="inactive underlineHover"><a href="{{route('register.create')}}">Գրանցվել</a></h2>
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
                <input type="email" id="login" name="email" class="fadeIn second" placeholder="Էլ. փոստ*">
                <input type="password" id="password" name="password" class="fadeIn third" placeholder="Գաղտնաբառ*">
                <input type="submit" class="fadeIn fourth" value="Մուտք">
            </form>
        {{--        <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>--}}
    </div>
</div>
</body>
</html>
