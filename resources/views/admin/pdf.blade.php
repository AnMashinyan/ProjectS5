<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Որոշում {{$decision->category_id}}</title>
</head>
<body>
<div>
    <table>
        <tr>
            <th>{{$decision->id}}</th>
        </tr>
        @foreach(json_decode($decision->text) as $item)
            <tr>
                <td>{{$item->heard}}</td>
                <td>{{$item->reply}}</td>
                <td>{{$item->decided}}</td>
                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d m Y')}}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
