@extends('admin.layout.main')
@section('admin')
    <div class = 'login__area aic jcc'>
        <div class="login__block flex jcc aic flx-dir-col">
            <form action = "{{route('admin.login')}}" method = "POST" class = "flex jcc flx-dir-col container-80">
                <div class="login__title">Вход</div>
                <div class="flex aic flx-dir-col">
                    @csrf
                    <input placeholder="Login"  type = "text" name = 'login' class = "login__input">
                    <input placeholder="Password"  type = "password" name = 'password' class = "login__input">
                    <button type = "submit" class = "login__button">Войти</button>
                    @foreach ($errors->all() as $error)
                        <div class = "flex jcc aic error">{{$error}}</div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
@endsection
