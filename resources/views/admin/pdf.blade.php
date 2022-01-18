<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Արձանագրություն {{$decision->id}}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif;}
        p {margin: 8px; line-height: 14px; font-size: 12px;}
        .topDiv {text-align: center; font-size: 14px}
        .footer {margin-top: 50px; text-align: center;}
    </style>
</head>
<body>
<div>
    <div class="topDiv">
    <h4>Արձանագրություն {{$decision->id}}</h4>
    <h5>(Նիստը կայացել է {{\Carbon\Carbon::parse($decision->created_at)->format('d m Y')}})</h5>
    </div>
    <br>
{{--    Օրակարգում՝--}}
    <div>
        @foreach(json_decode($decision->text) as $item)
            <div>
                <p><b>{{$loop->iteration}}</b>. {{$item->heard}}</p>
                <p><b>Պատասխանեցին</b>. {{$item->reply}}</p>
                <p><b>Որոշեցին</b>. {{$item->decided}}</p>
            </div>
        @endforeach
    </div>
    <div class="footer">
        <p>Նախագահ՝ Է․ Հովհաննիսյան</p>
        <p>Քարտուղար՝ Ա․ Հարությունյան</p>
    </div>
{{--    <table>
        <tr>
            <th>{{$decision->id}}</th>
        </tr>
        @foreach(json_decode($decision->text) as $item)
            <tr>
                <td>Լսեցին {{$loop->iteration}}։ {{$item->heard}}</td>
                <td>Պատասխանեցին {{$item->reply}}</td>
                <td>Որոշեցին {{$item->decided}}</td>
                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d m Y')}}</td>
            </tr>
        @endforeach
    </table>--}}
</div>
</body>
</html>
