@extends('master')

@section('title')
    404 Error
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
@endsection

@section('content')
    <h3>Page not found!</h3>
@endsection