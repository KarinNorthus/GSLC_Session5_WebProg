@extends('template')

@section('title', 'GSLC - 2440062086 - Karin Northus | Home Page')

@section('content')

<div class="container-fluid">
    <div class="container">
        <h1 class="text-center">Welcome to Foodie !</h1>
        <h2 class="text-center">Our Food Menu</h2>
        <div class="row">
            @foreach ($items as $item )
                <div class="col-md-4">
                    <div class="card mb-5">
                        <img src={{$item->image}} class="card-img-top shadow p-3" alt="..." width="100" height="250">
                        <div class="card-body" style="height: 20rem; width: auto;">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <p class="card-text">{{$item->description}}</p>
                            <p class="card-price">IDR {{$item->price}}</p>
                            @if ($item->type === "Main-Course")
                                <span class="badge text-bg-success">{{$item->type}}</span>
                            @elseif ($item->type === "Appetizer")
                                <span class="badge text-bg-warning">{{$item->type}}</span>
                            @else
                                <span class="badge text-bg-danger">{{$item->type}}</span>
                            @endif

                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
</div>


@endsection
