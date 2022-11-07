@extends('admin.layout.body')

@section('content')
{{--    <div class = 'login__area aic jcc'>--}}
{{--        <div class="login__block flex jcc aic flx-dir-col">--}}
{{--            <form action = "{{route('admin.create')}}" method = "POST" class = "flex jcc flx-dir-col container-80">--}}
{{--                <div class="login__title">Создать товар</div>--}}
{{--                <div class="flex aic flx-dir-col">--}}
{{--                    @csrf--}}
{{--                    <input placeholder="Title"  type = "text" name = 'title' class = "login__input">--}}
{{--                    <input placeholder="Description"  type = "text" name = 'description' class = "login__input">--}}
{{--                    <input placeholder="Image ( url )"  type = "url" name = 'image' class = "login__input">--}}
{{--                    <input placeholder="Price"  type = "number" name = 'price' class = "login__input">--}}
{{--                    <button type = "submit" class = "login__button">Создать</button>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <div class = "flex jcc aic error">{{$error}}</div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создать товар</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <form method="POST" action = "{{route('admin.create')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input type="text" class="form-control" name = "title" placeholder="Введите название товара...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Описание</label>
                        <textarea type="text" class="form-control" name = "description" placeholder="Введите описание нового товара..."></textarea>
                        <small class="form-text text-muted">Описание ограничено в 1000 символов.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Изображение</label>
                        <input type="url" class="form-control" name = "image" placeholder="https://picture.com/monkey.jpg">
                        <small class="form-text text-muted">Это поле принимает изображение в виде ссылки.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Цена</label>
                        <input type="number" class="form-control" name = "price" placeholder="101">
                    </div>
                    <button type="submit" class="btn btn-success">Создать</button>
                </form>
                @foreach ($errors->all() as $error)
                    <div class = "flex jcc aic error" style = "max-width: 300px;">{{$error}}</div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
