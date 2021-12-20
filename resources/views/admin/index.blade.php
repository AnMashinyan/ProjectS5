<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            width: 300px;
            margin: 10px;
            background-color: white;
            border-radius: 10px;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: lightblue;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: white;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }

        .userDiv {
            display: flex;
            flex-wrap: wrap;
        }

        html {
            background-color: #008196;
        }
    </style>
    <title>Users</title>
</head>
<body>
<a href="{{route('logout')}}">Ելք</a>
<h2 style="text-align:center">User</h2>
<div class="userDiv">
@foreach ($users as $user)
    <div class="card">
       {{--    <img src="/w3images/team2.jpg" alt="John" style="width:100%">--}}
       <h1>{{$user->name}} {{$user->surname}}</h1>
       <p class="title">{{$user->advice}}</p>
       <p>{{$user->email}}</p>
       {{--<div style="margin: 24px 0;">
           <a href="#"><i class="fa fa-dribbble"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
           <a href="#"><i class="fa fa-linkedin"></i></a>
           <a href="#"><i class="fa fa-facebook"></i></a>
       </div>--}}
       <p><button><a href="{{url('admin/confirm/' . $user->id)}}">Հաստատել</a></button></p>
       <p><button style="background: red"><a href="{{url('admin/confirm/' . $user->id)}}">Ջնջել</a></button></p>
   </div>
@endforeach
</div>


</body>
</html>
