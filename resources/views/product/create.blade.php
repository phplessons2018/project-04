@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="card">
                    <h1>Создание товара</h1>
                    <div class="">
                        <ul>
                            @if ($errors)
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="card-body">
                        <form action="{{route('product.list')}}" method="post" >
                            @csrf
                            <label for="">
                                <h5>Название товара</h5>
                                <input type="text" name="title" value="{{old('title')}}">
                            </label>
                            <br>
                            <label for="">
                                <h5>Категория товара</h5>
                                <input type="text" name="category" value="{{old('category')}}">
                            </label>
                            <br>
                            <label for="">
                                <h5>Цена товара</h5>
                                <input type="text" name="price" value="{{old('price')}}">
                            </label>
                            <br>
                            <label for="">
                                <h5>Описание товара</h5>
                                <textarea name="text" id="" cols="30" rows="10">{{old('text')}}</textarea><br>
                            </label>
                            <h5 class="mb-1 pb-1">Фото товара</h5>
                            {{--<input type="file" name="photo" >--}}
                            <br><br><br>
                            <input type="submit" value="send" class="btn btn-primary">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
