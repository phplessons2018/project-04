@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
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
                        <form action="{{route('category.edit', ['id' => $categories2->id])}}" method="post">
                            @csrf
                            <label for="">
                                <h5>Название товара</h5>
                                <input type="text" name="category" value="{{$categories2->category}}">
                            </label>
                            <br><br><br>
                            <input type="submit" value="send" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
