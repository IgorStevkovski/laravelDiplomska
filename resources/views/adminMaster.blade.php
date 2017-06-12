<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    {{--So cel da pri renderiranje na pomal ekran da se promeni izgledot so bootstrap, bez ova dole ke se renderira isto ko na golem ekran i trebas zumirat--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    @yield('styles')
</head>
<body>
<div id="kontejner">
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
    <div class="container">
        @yield('content')
    </div>

    <div id="footer">
        <span id="footerOznaka">Whatch Store 2017 &copy;</span>
    </div>
    <!-- JQuery skripta -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    @yield('scripts')
</div>
</body>
</html>
