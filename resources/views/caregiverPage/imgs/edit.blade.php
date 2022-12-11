@extends('caregiverPage.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit: {{$img->title}}</h1>
                    <h1>Edit:</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('caregiverIndex')}}">Main</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <form action="{{route('imgs.update',$img->id)}}" method="post" role="form" enctype="multipart/form-data">


            @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               id="title"
                               value="{{$img->title}}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <input type="text" name="content" class="form-control @error('description') is-invalid @enderror"
                               id="content"
                               value="{{$img->description}}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Choose picture</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Picture</label>
                            </div>
                        </div>
                        <div>
                            <img src="{{$img->getImage()}}" alt="" width="20%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="book">Choose document</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="book" class="custom-file-input" id="book">
                                <label class="custom-file-label" for="book">Choose</label>
                            </div>
                        </div>
                        <a href="{{$img->getImg()}}" style="font-size:100px">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    <button type="reset" class="btn btn-primary">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection
