@extends('layouts.base')

@section('pageTitle', 'Home')

@section('content')
    <div class="container">
        <button id="top"><a href="#">CURRENT SERIES</a></button>
        <div class="product-cards-container">
            <div class="product-cards">
                @foreach($items as $item)
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{$item['thumb']}}" alt="product thumbnail">
                        </div>
                        <div class="product-series">
                            <h1>{{$item['series']}}</h1>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
        <button id="bottom"><a href="#">LOAD MORE</a></button>

    </div>
@endsection('content')
