@extends('admin.layout.body')

@section('content')
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
                <form method="post" action = "{{route('admin.update', $product->id)}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <input value = "{{$product->title}}" type="text" class="form-control" name = "title" placeholder="Введите название товара...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Описание</label>
                        <textarea type="text" class="form-control" name = "description" placeholder="Введите описание нового товара...">{{$product->description}}</textarea>
                        <small class="form-text text-muted">Описание ограничено в 1000 символов.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Изображение</label>
                        <input value = "{{$product->image}}" type="url" class="form-control" name = "image" placeholder="https://picture.com/monkey.jpg">
                        <small class="form-text text-muted">Это поле принимает изображение в виде ссылки.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Цена</label>
                        <input value = "{{$product->price}}" type="number" class="form-control" name = "price" placeholder="101">
                    </div>
                    <button type="submit" class="btn btn-primary">Изменить</button>
                </form>
                <form method="get" action="{{route('admin.delete', $product->id)}}">
                    @csrf
                    <button type="submit" class="mt-2 btn btn-danger">Удалить</button>
                </form>
                @foreach ($errors->all() as $error)
                    <div class = "flex jcc aic error" style = "max-width: 300px;">{{$error}}</div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
