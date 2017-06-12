@extends('master')

@section('title')
    {{$product->name}}
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/oneProduct.css') }}">
@endsection

{{--col-sm-8 col-md-8--}}
@section('content')
    <div class="" id="oneProdukt">
        <div class="" id="divImage">
            <img src="{{ URL::to($product->imageUrl) }}"  class="img-responsive">
        </div>
        <div class="" id="dataForProduct">
            <span id="imeProdukt">{{ $product->name }}</span>
            <p id="opisProdukt" class="description">{{ $product->description }}</p>
            <div class="price">
                ${{ $product->price }}
            </div>
            <a id="btnAddToCart" href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-success" role="button">Add to Cart</a>
        </div>
    </div>
@endsection