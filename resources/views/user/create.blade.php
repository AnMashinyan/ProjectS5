<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Գրանցվել</title>
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="inactive underlineHover"><a href="{{route('login.create')}}">Մուտք</a></h2>
        <h2 class="active">Գրանցվել</h2>
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
            <form action="{{route('register.store')}}" method="post">
                @csrf
                <select class="form-select fadeIn second" name="advice">
                    <option value="" selected>Ընտրել խորհուրդը*</option>
                    <option value="1">Մանկավարժական խորհուրդ</option>
                    <option value="2">Կառավարման խորհուրդ</option>
                    <option value="3">Ծնողական խորհուրդ</option>
                    <option value="4">Աշակերտական խորհուրդ</option>
                </select>
                <input type="text" name="name" class="fadeIn second" placeholder="Անուն*" value="{{old('name')}}">
                <input type="text" name="surname" class="fadeIn third" placeholder="Ազգանուն*" value="{{old('surname')}}">
                <input type="email" id="login" name="email" class="fadeIn second" placeholder="Էլ. փոստ*" value="{{old('email')}}">
                <input type="password" id="password" name="password" class="fadeIn third" placeholder="Գաղտնաբառ*">
                <input type="password" name="password_confirmation" class="fadeIn second" placeholder="Կրկնել գաղտնաբառը*">
                <input type="submit" class="fadeIn fourth" value="Մուտք">
            </form>
        {{--        <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>--}}
    </div>
</div>
</body>
</html>

