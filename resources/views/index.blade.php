@extends('layout.main')
@section('content')
    <div class="scripts__wrapper main__wrap">
        @foreach($products as $product)
            <div class="script__item">
                <div class="script__image__wrapper">
                    <img src = '{{$product->image}}' class = "script__image">
                    <div class="script__price">{{$product->price}} руб.</div>
                </div>
                <div class="script__text">
                    <span class="script__header">{{$product->title}}</span>
                    <p class="script__paragraph">{{$product->description}}</p>
                </div>
                <a href="{{route('product', $product->id)}}" class="script__button">Подробнее</a>
            </div>
        @endforeach
    </div>
@endsection
