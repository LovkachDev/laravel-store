@extends('admin.layout.body')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Загрузить товар</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <form method="POST" action = "{{route('admin.goods')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID товара</label>
                        <input type="text" class="form-control" name = "product_id" placeholder="Введите id товара...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Товар</label>
                        <textarea type="text" class="form-control" name = "goods" placeholder="Введите товар который будет отправлен покуапателю..."></textarea>
                        <small class="form-text text-muted">Описание ограничено в 1000 символов.</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name = "checkbox" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Товар не ограничен в использовании</label>
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
