@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 product">
            <div class="thumbnail">
                <img src="{{ $product->imagePath }}" alt="{{ $product->title }}" class="img-responsive">
                <div class="caption">
                    <h3 class="text-center">{{ $product->title }}</h3>
                    <p>{{ $product->description }}</p>
                    <a href="{{ route('sites.addToCart', $product->id) }}" class="btn btn-primary add" role="button">Add to Cart</a>
                    <span class="label label-success productLabel">${{ $product->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection

