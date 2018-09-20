@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Добавить</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="{{route('product')}}" class="btn">Товары</a>
                        <a href="{{route('category.index')}}" class="btn">Категории</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
