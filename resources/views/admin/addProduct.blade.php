@extends('adminMaster')

@section('title')
    Admin Panel
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/addProduct.css') }}">
@endsection

@section('content')
    <div id="divForma">
        <div class="thumbnail">
            <form action="{{ route('admin.getAddProduct') }}" method="post" id="addProduct-form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required name="name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" id="price" class="form-control" required name="price">
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" class="form-control" required name="description">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="file" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender">
                                    <option value="0">Kids</option>
                                    <option value="1">Mens</option>
                                    <option value="2">Womens</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="brandName">Brand Name</label>
                            <select name="brandName">
                                    <option value="Casio">Casio</option>
                                    <option value="Esprit">Esprit</option>
                                    <option value="Fossil">Fossil</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button id="btnAddProduct" type="submit" class="btn btn-success">Add Product!</button>
            </form>
        </div>
    </div>
@endsection