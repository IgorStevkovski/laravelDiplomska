@extends('adminMaster')

@section('title')
    Admin Panel
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/editProduct.css') }}">
@endsection

{{--col-sm-8 col-md-8--}}
@section('content')
    <div class="" id="divForma">
        <div class="thumbnail">
            <form action="{{ route('admin.getEditProduct',['id'=>$product->id]) }}" method="post" id="edit-form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required name="name" value="{{$product->name}}">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" id="price" class="form-control" required name="price" value="{{$product->price}}">
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" class="form-control" required name="description" value="{{$product->description}}">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <img src="{{ URL::to($product->imageUrl) }}" width="100px" height="100px" class="img-responsive">
                            <input type="file" name="file">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender">
                                @if($product->gender == 0)
                                    <option value="0" selected>Kids</option>
                                @else
                                    <option value="0">Kids</option>
                                @endif

                                @if($product->gender == 1)
                                    <option value="1" selected>Mens</option>
                                @else
                                    <option value="1">Mens</option>
                                @endif
                                @if($product->gender == 2)
                                    <option value="2" selected>Womens</option>
                                @else
                                    <option value="2">Womens</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="brandName">Brand Name</label>
                            <select name="brandName">
                                @if($product->brandName == "Casio")
                                    <option value="Casio" selected>Casio</option>
                                @else
                                    <option value="Casio">Casio</option>
                                @endif

                                @if($product->brandName == "Esprit")
                                    <option value="Esprit" selected>Esprit</option>
                                @else
                                    <option value="Esprit">Esprit</option>
                                @endif
                                @if($product->gender == "Fossil")
                                    <option value="Fossil" selected>Fossil</option>
                                @else
                                    <option value="Fossil">Fossil</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" id="btnUpdate" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection