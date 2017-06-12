@extends('adminMaster')

@section('title')
    Admin Panel
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/adminProducts.css') }}">
@endsection

@section('content')

    <div class="row" id="btnAddNewProduct">
        <a href="{{route('admin.getAddProduct')}}" class="btn btn-success" role="button">Add New Product</a>
    </div>
    <div id="produkti" class="produktiSite">
        @foreach($products->chunk(5) as $productChuck)

            @foreach($productChuck as $product)
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" id="produktCel">
                    <div id="produkt" class="thumbnail">
                        <img src="{{ URL::to($product->imageUrl) }}"  class="img-responsive">
                        <div class="caption">
                            <span>{{ $product->name }}</span>
                            <p class="description">{{ $product->description }}</p>
                            <p class="price" id="pricePTag">${{ $product->price }}</p>
                            <div class="clearfix">

                                <a id="btnEdit" href="{{route('admin.getEditProduct',['id'=>$product->id])}}" class="btn btn-success pull-left" role="button">Edit</a>
                                <a id="btnDelete" href="{{route('admin.getDeleteProduct',['id'=>$product->id])}}" class="btn btn-success pull-right" role="button">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @endforeach
    </div>

    <div class="text-center">
        {!! $products->links() !!}
    </div>
@endsection
