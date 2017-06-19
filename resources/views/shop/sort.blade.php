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



        //document.write(minPrice);
        //document.write(maxPrice);

        $(document).ready(function(){
            var outputSpan = $('#spanOutput');
            var sliderElement = $('#slider');

            var minPrice = 0;
            var maxPrice = 1000;

            var kolacinja = document.cookie; //vrakja: "cookie1=value; cookie2=value; cookie3=value;"
            var niza = kolacinja.split("; ");
            for(i=0; i<niza.length; i++){
                var niza2 = niza[i].split("=");
                if(niza2[0] == "minPrice2"){
                    minPrice = niza2[1];
                }
                if(niza2[0] == "maxPrice2"){
                    maxPrice = niza2[1]; //opcija
                }
            }

            $('#slider').slider({
                range:true,
                min: 0,
                max: 1000,
                values: [minPrice, maxPrice],
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

        <form method="post" action="{{ action('ProductController@postSortedProducts') }}" id="izgledFormeFormTag">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div id="divFilter">
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
                        @if(Session::has('sortOptions') && Session::get('sortOptions')=="Price: Higher to Lower")
                            <option value="price dsc" selected>Price: Higher to Lower</option>
                        @else
                            <option value="price dsc">Price: Higher to Lower</option>
                        @endif

                        @if(Session::has('sortOptions') && Session::get('sortOptions')=="Price: Lower to Higher")
                            <option value="price asc" selected>Price: Lower to Higher</option>
                        @else
                            <option value="price asc">Price: Lower to Higher</option>
                        @endif

                        @if(Session::has('sortOptions') && Session::get('sortOptions')=="Newest First")
                            <option value="id dsc" selected>Newest First</option>
                        @else
                            <option value="id dsc">Newest First</option>
                        @endif

                        @if(Session::has('sortOptions') && Session::get('sortOptions')=="Oldest First")
                            <option value="id asc" selected>Oldest First</option>
                        @else
                            <option value="id asc">Oldest First</option>
                        @endif
                    </select>
                </p>
            </div>
            {{--<br>--}}
            {{--<div id="divFilter">--}}
                {{--<p>Price:</p>--}}
                {{--@if(Session::has('priceFrom'))--}}
                    {{--<span>From:<br> <input type="number" name="priceFrom" min="0" max="10000" value={!! Session::get('priceFrom') !!}></span>--}}
                {{--@else--}}
                    {{--<span>From:<br> <input type="number" name="priceFrom" min="0" max="10000" value="0"></span>--}}
                {{--@endif--}}

                {{--<br>--}}
                {{--@if(Session::has('priceTo'))--}}
                    {{--<span>To: <input type="number" name="priceTo" min="0" max="10000" value={!! Session::get('priceTo') !!}></span>--}}
                {{--@else--}}
                    {{--<span>To: <input type="number" name="priceTo" min="0" max="10000" value="100"></span>--}}
                {{--@endif--}}
            {{--</div>--}}
            <br><br>
            {{--<div id="divFilter">--}}
                {{--<p>Choose brand:</p>--}}
                {{--<p>--}}
                    {{--<select name="brandOptions">--}}
                        {{--@if(Session::has('brandName') && Session::get('brandName')=="All Brands")--}}
                            {{--<option value="%" selected>All</option>--}}
                        {{--@else--}}
                            {{--<option value="%">All</option>--}}
                        {{--@endif--}}

                        {{--@if(Session::has('brandName') && Session::get('brandName')=="Casio")--}}
                            {{--<option value="Casio" selected>Casio</option>--}}
                        {{--@else--}}
                            {{--<option value="Casio">Casio</option>--}}
                        {{--@endif--}}

                        {{--@if(Session::has('brandName') && Session::get('brandName')=="Festina")--}}
                            {{--<option value="Festina" selected>Festina</option>--}}
                        {{--@else--}}
                            {{--<option value="Festina">Festina</option>--}}
                        {{--@endif--}}

                        {{--@if(Session::has('brandName') && Session::get('brandName')=="Rolex")--}}
                            {{--<option value="Rolex" selected>Rolex</option>--}}
                        {{--@else--}}
                            {{--<option value="Rolex">Rolex</option>--}}
                        {{--@endif--}}
                    {{--</select>--}}
                {{--</p>--}}
            {{--</div>--}}
            <div id="divFilter">
                <p id="chooseBrandPTag">Choose brand:</p>
                <p></p>
                @if(Session::has('brandCasio') && Session::get('brandCasio')=="Casio")
                    <input type="checkbox" name="casio" value="Casio" checked> Casio<br>
                @else
                    <input type="checkbox" name="casio" value="Casio"> Casio<br>
                @endif

                @if(Session::has('brandEsprit') && Session::get('brandEsprit')=="Esprit")
                    <input type="checkbox" name="esprit" value="Esprit" checked> Esprit<br>
                @else
                    <input type="checkbox" name="esprit" value="Esprit"> Esprit<br>
                @endif

                @if(Session::has('brandFossil') && Session::get('brandFossil')=="Fossil")
                    <input type="checkbox" name="fossil" value="Fossil" checked> Fossil<br>
                @else
                    <input type="checkbox" name="fossil" value="Fossil"> Fossil<br>
                @endif
            </div>
            <br>

            <div id="divFilter">
                <p id="chooseGenderPTag">Choose gender:</p>
                <p>
                    <select name="genderOptions">
                        @if(Session::has('gender') && Session::get('gender')=="All Genders")
                            <option value="%" selected>All</option>
                        @else
                            <option value="%">All</option>
                        @endif

                        @if(Session::has('gender') && Session::get('gender')=="0")
                            <option value="0" selected>Children's</option>
                        @else
                            <option value="0">Children's</option>
                        @endif

                        @if(Session::has('gender') && Session::get('gender')=="1")
                            <option value="1" selected>Men's</option>
                        @else
                            <option value="1">Men's</option>
                        @endif

                        @if(Session::has('gender') && Session::get('gender')=="2")
                            <option value="2" selected>Women's</option>
                        @else
                            <option value="2">Women's</option>
                        @endif
                    </select>
                </p>
            </div>
            <br>

            <button type="submit" id="btnFilter">Filter!</button>
        </form>

    </div>
    <div class="produktiDesno">
        @if($products!=null)
            @foreach($products->chunk(3) as $productChuck)

                {{--col-xs-6 col-sm-6 col-md-4--}}
                @foreach($productChuck as $product)
                    <div class="col-xs-6 col-sm-4 col-md-3" id="produkt">
                        <div class="thumbnail">
                            <a href="{{route('product.oneProduct',['id'=>$product->id])}}">
                                <img src="{{ URL::to($product->imageUrl) }}"  class="img-responsive">
                            </a>
                            <div class="caption">
                                <span id="imeProdukt">{{ $product->name }}</span>
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
        @endif
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
        {{--<p>By: {!! Session::get('by') !!}</p>--}}
        {{--<p>Order: {!! Session::get('order') !!}</p>--}}
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
{{--<script type="text/javascript" src="{{URL::to('js/sorting.js')}}"></script>--}}
{{--@endsection--}}