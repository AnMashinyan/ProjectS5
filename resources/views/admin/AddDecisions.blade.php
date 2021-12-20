<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>asdasd</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br/>
    <h3 align="center">wqeqw</h3>
    <br/>
    <div class="table-responsive">
        <form method="post" id="dynamic_form">
            <span id="result"></span>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option value="" selected>Ընտրել</option>
                <option value="1">Մանկավարժական խորհուրդ</option>
                <option value="2">Կառավարման խորհուրդ</option>
                <option value="3">Ծնողական խորհուրդ</option>
                <option value="4">Աշակերտական խորհուրդ</option>
            </select>
            <table class="table table-bordered table-striped" id="user_table">
                <thead>
                <tr>
                    <th width="30%">heard</th>
                    <th width="30%">reply</th>
                    <th width="30%">decided</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3" align="right">&nbsp;</td>
                    <td>
                        @csrf
                        <input type="submit" name="save" id="save" class="btn btn-primary" value="Save"/>
                    </td>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>
    @foreach($decision as $value)

        {{--        @dd($deci)--}}
        {{--        @dump(json_decode($deci->text))--}}
        @foreach(json_decode($value->text) as $item)

            <tr>
                {{--            <th scope="row">{{$deci->category_id}}</th>--}}
                <td>{{$item->heard}}</td>
                <td>{{$item->reply}}</td>
                <td>{{$item->decided}}</td>
                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d m Y')}}</td>
                <td><a href="{{url('decisions/pdfexport/' . $value->id)}}">pdf</a></td>
                <td><a href="{{url('admin/decisions/delete/' . $value->id)}}">delete</a></td>
            </tr>
            <br>
            @break
        @endforeach
    @endforeach
</div>
</body>
</html>
<script>
    $(document).ready(function () {
        var count = 1;
        dynamic_field(count);

        function dynamic_field(number) {
            html = '<tr>';
            html += '<td><input type="text" name="heard[]" class="form-control" /></td>';
            html += '<td><input type="text" name="reply[]" class="form-control" /></td>';
            html += '<td><input type="text" name="decided[]" class="form-control" /></td>';
            if (number > 1) {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                $('tbody').append(html);
            } else {
                html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
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
                    }
                    $('#save').attr('disabled', false);
                }
            })
        });
    });
</script>
