@extends('caregiverPage.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('imgs.index')}}">Main Page</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <form action="{{route('imgs.store')}}" method="post" role="form" enctype="multipart/form-data">

            <form  method="post" role="form" enctype="multipart/form-data">

            @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image Name</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               id="title"
                               placeholder="Image Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                               id="description"
                               placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Choose the image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Choose</label>
                            </div>
                        </div>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="img">Choose img</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="custom-file">--}}
{{--                                <input type="file" name="img" class="custom-file-input" id="img">--}}
{{--                                <label class="custom-file-label" for="img">Choose</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    <button type="reset" class="btn btn-primary">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection
