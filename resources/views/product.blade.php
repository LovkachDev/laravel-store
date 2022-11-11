@extends('layout.main')
@section('content')
    <div class="scripts__wrapper dark-bg flex flx-dir-row">
        <div class="product__wrap flex flx-dir-row">
            <div class="product__details flex flx-dir-col">
                <img src = "{{$product->image}}" class = "product__image">
                <div class="product__buttons flex flx-dir-row">
                    <div class="login__button flex jcc w-33">Купить</div>
                    @if(session()->has('admin'))
                        <a href = "{{route('admin.edit.view', $product->id)}}" class="login__button ml-10 flex jcc">Изменить</a>
                    @endif
                </div>
            </div>
            <div class="product__content flex flx-dir-col">
                <h1 class="product__title">{{$product->title}}</h1>
                <p class="product__text">{{$product->description}}</p>
            </div>
        </div>
    </div>
@endsection
