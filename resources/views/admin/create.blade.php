@extends('admin.layout.main')

@section('admin')
    <div class = 'login__area aic jcc'>
        <div class="login__block flex jcc aic flx-dir-col">
            <form action = "{{route('admin.create')}}" method = "POST" class = "flex jcc flx-dir-col container-80">
                <div class="login__title">Создать товар</div>
                <div class="flex aic flx-dir-col">
                    @csrf
                    <input placeholder="Title"  type = "text" name = 'title' class = "login__input">
                    <input placeholder="Description"  type = "text" name = 'description' class = "login__input">
                    <input placeholder="Image ( url )"  type = "url" name = 'image' class = "login__input">
                    <input placeholder="Price"  type = "number" name = 'price' class = "login__input">
                    <button type = "submit" class = "login__button">Создать</button>
                    @foreach ($errors->all() as $error)
                        <div class = "flex jcc aic error">{{$error}}</div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
@endsection
