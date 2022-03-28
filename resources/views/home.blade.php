@extends('layouts.base')

@section('pageTitle', 'Home')

@section('content')
    <img src="{{$thumb}}" alt="product thumbnail">
    <h1>{{$price}}</h1>
    <h1>{{$series}}</h1>
    <h1>{{$type}}</h1>
@endsection('content')