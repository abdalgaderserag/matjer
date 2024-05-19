@extends('component.header')
@extends('component.slide')
@extends('component.footer')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','mat\'jer')</title>
    @section('style')
        <link rel="stylesheet" href="{{ url('dist/css/app.css') }}">
    @show
</head>
<body>
@include('component.header')
<div id="main">
    <div class="section"></div>
    @yield('main')
    @include('component.slide')
</div>
@include('component.footer')
</body>
@section('script')
@show
</html>
