@extends('master')

@section('title')
    Watch Store
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
@endsection

@section('scriptsHeader')
    <script src="{{ URL::to('js/jquery-ui.js') }}"></script>
    <script type="text/javascript">
//        function sliderChange(val){
//            document.getElementById('sliderStatus').innerHTML = val;
//        }

        $(document).ready(function(){
            var outputSpan = $('#spanOutput');
            var sliderElement = $('#slider');

            $('#slider').slider({
                range:true,
                min:0,
                max:1000,
                values: [0, 1000],
                slide: function(event, ui){
                    outputSpan.html(ui.values[0] +' - '+ ui.values[1]+' $');
                    $('#txtMinPrice').val(ui.values[0]);
                    $('#txtMaxPrice').val(ui.values[1]);
                }
            });

            outputSpan.html(sliderElement.slider('values',0) + ' - ' + sliderElement.slider('values',1) + ' $');
            $('#txtMinPrice').val(sliderElement.slider('values',0));
            $('#txtMaxPrice').val(sliderElement.slider('values',1));
        });
    </script>
@endsection

@section('content')
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
    <button id="btnFilterHide">Filter + </button>

    <div class="izgledForme removeDisplay" id="izgledFormeID">
        {{--action="sorted-products"--}}
        <form method="post" action="{{ action('ProductController@postSortedProducts') }}" id="izgledFormeFormTag">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {{--Obicen slider bar--}}
            {{--<input type="range"  min="0" max="1000" value="1000" step="10" onchange="sliderChange(this.value)">--}}
            {{--<br>--}}
            {{--Slider value = <span id="sliderStatus">1000</span>--}}

            <div id="divFilter">
                {{--Jquery slider--}}
                <p id="pricePTag">Price:</p>
                <div id="slider"></div>
                <br>
                <span id="spanOutput"></span>
                <br><br>
                <input type="hidden" id="txtMinPrice" name="txtMinPrice">
                <input type="hidden" id="txtMaxPrice" name="txtMaxPrice">
            </div>

            <div id="divFilter">

                <p id="sortByPTag">Sort by:</p>
                <p>
                    <select name="sortOptions">
                        <option value="price asc">Price: Lower to Higher</option>
                        <option value="price dsc">Price: Higher to Lower</option>
                        <option value="id dsc">Newest First</option>
                        <option value="id asc">Oldest First</option>
                    </select>
                </p>
            </div>
            {{--<br>--}}
            {{--<div id="divFilter">--}}
                {{--<p>Price:</p>--}}
                {{--<span>From:<br> <input type="number" min="0" name="priceFrom" max="10000" value="0"></span>--}}
                {{--<br>--}}
                {{--<span>To:<br> <input type="number" name="priceTo" min="0" max="10000" value="100"></span>--}}
            {{--</div>--}}
            <br><br>
            {{--<div id="divFilter">--}}
                {{--<p>Choose brand:</p>--}}
                {{--<p>--}}
                    {{--<select name="brandOptions">--}}
                        {{--<option value="%">All</option>--}}
                        {{--<option value="Casio">Casio</option>--}}
                        {{--<option value="Festina">Festina</option>--}}
                        {{--<option value="Rolex">Rolex</option>--}}
                    {{--</select>--}}
                {{--</p>--}}
            {{--</div>--}}
            <div id="divFilter">
                <p id="chooseBrandPTag">Choose brand:</p>
                <input type="checkbox" name="casio" value="Casio"> Casio<br>
                <input type="checkbox" name="esprit" value="Esprit"> Esprit<br>
                <input type="checkbox" name="fossil" value="Fossil"> Fossil<br>
            </div>

            <br>
            <div id="divFilter">
                <p id="chooseGenderPTag">Choose gender:</p>
                <p>
                    <select name="genderOptions">
                        <option value="%">All</option>
                        <option value="0">Kids</option>
                        {{--@if(Session::has('gender') && Session::get('gender')=="1")--}}
                        {{--<option value="1" selected>Mens</option>--}}
                        {{--@else--}}
                        <option value="1">Mens</option>
                        {{--@endif--}}

                        {{--@if(Session::has('gender') && Session::get('gender')=="2")--}}
                        {{--<option value="2" selected>Womens</option>--}}
                        {{--@else--}}
                        <option value="2">Womens</option>
                        {{--@endif--}}
                    </select>
                </p>
            </div>
            <br>
            <button type="submit" id="btnFilter">Filter!</button>
        </form>
    </div>

    <div class="produktiDesno">
        @foreach($products->chunk(3) as $productChuck)


            @foreach($productChuck as $product)
                <div class="col-xs-6 col-sm-4 col-md-3" id="produkt">
                    <div class="thumbnail">
                        <a href="{{route('product.oneProduct',['id'=>$product->id])}}">
                            <img src="{{ URL::to($product->imageUrl) }}"  class="img-responsive">
                        </a>
                        <div class="caption">
                            <span id="imeProdukt">{{ $product->name }}</span>
                            <hr>
                            {{--<p class="description">{{ $product->description }}</p>--}}
                            {{--<div class="clearfix">--}}
                                {{--<div class="pull-left price">--}}
                                    {{--${{ $product->price }}--}}
                                {{--</div>--}}
                                {{--<a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>--}}
                            {{--</div>--}}
                            <div id="priceCena">
                                    {{ $product->price }}.00$
                            </div>
                            <div id="priceDiv">
                                <a id="priceATag" href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-success" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @endforeach
    </div>

    {{--@if(Session::has('sortOptions'))--}}
        {{--<p>Sorted by: {!! Session::get('sortOptions') !!}</p>--}}
        {{--<p>Price: {!! Session::get('priceFrom') !!} to {!! Session::get('priceTo') !!}</p>--}}
        {{--@if(Session::has('brandCasio'))--}}
            {{--<p>Brand: {!! Session::get('brandCasio') !!}</p>--}}
        {{--@endif--}}
        {{--@if(Session::has('brandEsprit'))--}}
            {{--<p>Brand: {!! Session::get('brandEsprit') !!}</p>--}}
        {{--@endif--}}
        {{--@if(Session::has('brandFossil'))--}}
            {{--<p>Brand: {!! Session::get('brandFossil') !!}</p>--}}
        {{--@endif--}}
        {{--<p>Gender: {!! Session::get('gender') !!}</p>--}}
    {{--@endif--}}

    @if($products!=null)
        <div class="text-center">
        {!! $products->links() !!}
        </div>
    @else
        <p>Nema produkti</p>
    @endif


@endsection

{{--@section('scripts')--}}
{{--<script type="text/javascript" src="{{URL::to('js/ajax_searchBox.js')}}"></script>--}}
{{--@endsection--}}