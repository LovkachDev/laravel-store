@extends('admin.layout.body')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="align-content-lg-start">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>0</h3>

                                <p>Покупок</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>0 <sup style="font-size: 20px">руб.</sup></h3>

                                <p>Покупок на сумму</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{$totalProducts}}</h3>

                                <p>Товаров</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
                <!-- Main row -->
            </div>
        </section>
        <section>
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Товары</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-content-lg-center">
                <table class="table table-striped table-light">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Помсмотреть</th>
                    </tr>
                    </thead>
                    @foreach($products as $product)
                        <tbody>
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <td><a href = "{{route('admin.edit.view', $product->id)}}" class="btn btn-primary"><i class = "fas fa-eye"></i></a></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </section>
@endsection
