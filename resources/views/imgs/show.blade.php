@extends('layouts.category_layout')
@section('content')
    <div class="row tm-row">
        @if($imgs->count())
            @foreach ($imgs as $img)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <div class="card text-center">
                        <img class="card-img-top" src="{{$img->getImage()}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$img->title}}</h5>
                            <p class="card-text">{{$img->description}}</p>
                            <a href="{{$img->getImage()}}" class="mb-2 tm-btn tm-btn-primary">View</a>
                            <a href="{{$img->getImage()}}" class="mb-2 tm-btn tm-btn-primary" download>Download</a>
                        </div>
                    </div>
                </article>
            @endforeach
        @else
            <p>No Image</p>
        @endif
    </div>
@endsection
