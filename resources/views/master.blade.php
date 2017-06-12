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
    <!-- Css za master osnovnata strana -->
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    {{--Obicno jquery--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    @yield('styles')
    @yield('scriptsHeader')
</head>
<body>
<div id="kontejner">
    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>

    <!-- JQuery skripta - ne smees dvapati da ja loadas skriptata -->
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>--}}

    <div id="footer">
        <span id="footerOznaka">Whatch Store 2017 &copy;</span>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{--Ajax search-box    --}}
    <script type="text/javascript" src="{{URL::to('js/ajax_searchBox.js')}}"></script>
    {{--App.js osnovni javascripti   --}}
    <script type="text/javascript" src="{{URL::to('js/app.js')}}"></script>
    @yield('scripts')
</div>
</body>
</html>
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--</head>--}}

{{--<body>--}}
{{--<div>--}}
{{--<ul>--}}
{{--<li><a>Watch Store</a></li>--}}
{{--</ul>--}}
{{--<ul>--}}
{{--<li><a>Shopping Cart</a></li>--}}
{{--@if(Auth::check())--}}
{{--<li><a> User Profile</a></li>--}}
{{--<li><a> Logout</a></li>--}}
{{--@else--}}
{{--<li><a> Signup</a></li>--}}
{{--<li><a > Signin</a></li>--}}

{{--@endif--}}
{{--</ul>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}