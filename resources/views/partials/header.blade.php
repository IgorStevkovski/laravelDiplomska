<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('product.index')}}">Watch Store</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('product.shoppingCart')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li><p id="userEmailMeni">{{Auth::user()->email}}</p></li>
                            <li><a href="{{route('user.profile')}}"> User Profile</a></li>
                            <li><a href="{{route('user.logout')}}"> Logout</a></li>
                        @else
                            <li><a href="{{route('user.signup')}}"> Signup</a></li>
                            <li><a href="{{route('user.signin')}}"> Signin</a></li>
                            <li role="separator" class="divider"></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Vrteleska --}}
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ URL::to('images/naslovna_sat5_1400_210.jpg') }}" id="slika">
        </div>
        <div class="item">
            <img src="{{ URL::to('images/naslovna_saat9_1400_210.jpg') }}"  id="slika">
        </div>

        <div class="item">
            <img src="{{ URL::to('images/naslovna_saat11_1400_210.jpg') }}" id="slika">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{-- Dolno meni --}}
<nav class="nav navbar-default">
    <div class="container-fluid">
        <div>
            <ul class="nav navbar-nav" id="mens">
                <li><a href="{{route('product.mens')}}">Mens</a></li>
                <li><a href="{{route('product.womens')}}">Womens</a></li>
                <li><a href="{{route('product.kids')}}">Kids</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('product.getBrandProduct',['name'=>'Casio']) }}">Casio</a></li>
                        <li><a href="{{ route('product.getBrandProduct',['name'=>'Festina']) }}">Festina</a></li>
                        <li><a href="{{ route('product.getBrandProduct',['name'=>'Rolex']) }}">Rolex</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav navbar-nav navbar-right">
                {{--<form method="post" action="#" >--}}
                    <span class="glyphicon glyphicon-search"></span>
                    <input type="text" name="search" id="search" placeholder="Search">
                {{--</form>--}}
                <div id="back_result">

                </div>
            </div>
        </div>
    </div>
</nav>