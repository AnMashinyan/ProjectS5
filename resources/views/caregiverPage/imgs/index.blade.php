@extends('caregiverPage.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Main Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('imgs.index')}}">Main Page</a></li>

                        <li class="breadcrumb-item active">Image</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{route('imgs.create')}}" class="btn btn-primary mb-3">Add</a>



                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if (count($imgs))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Image Name</th>
                                <th>Description</th>
                                <th>Slug</th>
                                <th style="width: 50px">Tools</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($imgs as $img)
                                <tr>
                                    <td>{{$img->id}}</td>
                                    <td>{{$img->title}}</td>
                                    <td>{{$img->description}}</td>
                                    <td>{{$img->slug}}</td>
                                    <td>
                                        <a href="{{route('imgs.edit',$img->id)}}"

                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{route('imgs.destroy',$img->id)}}" method="post">
                                        <form  method="post"

                                              class="float-left">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Do you want to delete?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>No image</p>
                @endif
            </div>
            <div class="card-footer clearfix">
                {{$imgs->links()}}
            </div>
        </div>
    </section>
@endsection



