@extends('layout.main')
@section('content')
    <div class="scripts__wrapper">
        <img src = "{{$product->image}}" class = "product__image">
    </div>
    <h1 class="product__title">{{$product->title}}</h1>
    <p class="product__content">{{$product->description}}</p>
    @if(session()->has('admin'))
        <a href="" class="login__button">Изменить</a>
    @endif
@endsection
