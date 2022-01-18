<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <title>Admin</title>
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
<p class="logout"><a href="{{route('logout')}}">Ելք</a></p>
<div class="wrapper fadeInDown">
    <div id="formContent" style="max-width:100%; min-height:500px">
        <h2 class="inactive underlineHover"><a href="{{route('admin.index')}}">Օգտագործող</a></h2>
        <h2 class="active">Ավելացնել որոշում</h2>
        <div class="fadeIn first">
            <div class="container">
                <div class="table-responsive">
                    <form method="post" id="dynamic_form">
                        <span id="result"></span>
                        <br>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option value="" selected>Ընտրել խորհուրդ</option>
                            <option value="1">Մանկավարժական խորհուրդ</option>
                            <option value="2">Կառավարման խորհուրդ</option>
                            <option value="3">Ծնողական խորհուրդ</option>
                            <option value="4">Աշակերտական խորհուրդ</option>
                            <option value="5">Մեթոդմիավորում</option>
                            <option value="6">Դասղեկներ</option>
                        </select>
                        <table class="table table-bordered table-striped" id="user_table">
                            <thead>
                            <tr>
                                <th>Լսեցին</th>
                                <th>Պատասխանեցին</th>
                                <th>Որոշեցին</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3" align="right">&nbsp;</td>
                                <td>
                                    @csrf
                                    <input type="submit" name="save" id="save" class="btn btn-primary" value="Հաստատել"/>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
                <div class="fullInfo">
                    @foreach($decision as $value)
                        @foreach(json_decode($value->text) as $item)
                            <div class="inf">
                                {{--                            <p>{{$item->heard}}</p>--}}
                                {{--                            <p>{{$item->reply}}</p>--}}
                                {{--                            <p>{{$item->decided}}</p>--}}
                                <span>{{\Carbon\Carbon::parse($item->created_at)->format('d m Y')}}</span>
                                <a href="{{url('decisions/pdfexport/' . $value->id)}}" target="_blank"><img
                                        src="{{asset('assets/images/pdf-file.png')}}" alt="" width="15"></a>
                                <a href="{{url('admin/decisions/delete/' . $value->id)}}"
                                   onclick="return confirm('Ուզում եք ջնջել ?')"><img
                                        src="{{asset('assets/images/close.png')}}" width="15"></a>
                            </div>
                            @break
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function () {
        var count = 1;
        dynamic_field(count);

        function dynamic_field(number) {
            html = '<tr>';
            html += '<td><textarea type="text" name="heard[]" class="form-control"></textarea></td>';
            html += '<td><textarea type="text" name="reply[]" class="form-control"></textarea></td>';
            html += '<td><textarea type="text" name="decided[]" class="form-control"></textarea></td>';
            if (number > 1) {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Ջնջել</button></td></tr>';
                $('tbody').append(html);
            } else {
                html += '<td><button type="button" name="add" id="add" class="btn btn-success">Ավելացնել</button></td></tr>';
                $('tbody').html(html);
            }
        }

        $(document).on('click', '#add', function () {
            count++;
            dynamic_field(count);
        });

        $(document).on('click', '.remove', function () {
            count--;
            $(this).closest("tr").remove();
        });

        $('#dynamic_form').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{ route("decisions.insert") }}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    $('#save').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.error) {
                        var error_html = '';
                        for (var count = 0; count < data.error.length; count++) {
                            error_html += '<p>' + data.error[count] + '</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                    } else {
                        dynamic_field(1);
                        $('#result').html('<div class="alert alert-success">' + data.success + '</div>');
                        location.reload();
                    }
                    $('#save').attr('disabled', false);
                }
            })
        });
    });
</script>
