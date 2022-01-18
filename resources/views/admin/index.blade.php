<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Admin</title>
</head>
<body>
<p class="logout"><a href="{{route('logout')}}">Ելք</a></p>
<div class="wrapper fadeInDown">
    <div id="formContent" style="max-width:100%; min-height:500px">
        <h2 class="active">Օգտագործող</h2>
        <h2 class="inactive underlineHover"><a href="{{route('admin.decisions')}}">Ավելացնել որոշում</a></h2>
        <div class="fadeIn first">
            <h3>Հաստատել կամ մերժել նոր օգտագործողին</h3>
            @if(count($users) > 0)
            <div class="userDiv">
                @foreach ($users as $user)
                    <div class="card">
                        {{--<img src="1.jpg" alt="John" style="width:100%">--}}
                        <h1>{{$user->name}} {{$user->surname}}</h1>
                        <p>{{$user->email}}</p>
                        <p class="title">{{$user->category[0]->title}}</p>
                        {{--<div style="margin: 24px 0;">
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>--}}
                        <button><a href="{{url('admin/confirm/' . $user->id)}}">Հաստատել</a></button>
                        <button style="background: #bf5656"><a href="{{url('admin/confirm/' . $user->id)}}">Մերժել</a>
                        </button>
                    </div>
                @endforeach
            </div>
                @else
                <br>
            <p>Այս պահին նոր օգտագործողներ չկան</p>
            @endif
        </div>
    </div>
</div>
</body>
</html>
