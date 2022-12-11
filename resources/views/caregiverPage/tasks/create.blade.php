@extends('caregiverPage.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Task</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('caregiverIndex')}}">Main Page</a></li>
                        <li class="breadcrumb-item active">Add Task</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <form action="{{route('tasks.store')}}" method="post" role="form">

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               id="title"
                               placeholder="Write the Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" name="content" class="form-control @error('content') is-invalid @enderror"
                               id="content"
                               placeholder="Write the description">
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
