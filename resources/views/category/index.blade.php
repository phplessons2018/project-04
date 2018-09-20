@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="card-header">Post List</h1>
                    <a href="{{route('category.create')}}" class="btn">Добавить категорию</a>
                    <br><br>
                    <div class="card-body">
                        <table class="table mt-5" style="border: 1px solid">
                            @foreach($categories as $category)
                                <tr>
                                    <td style="border: 1px solid; padding: 10px">{{$category->id}} </td>
                                    <td style="border: 1px solid; padding: 10px">{{$category->category}}</td>

                                    <td><a href="{{route('category.update', [$category->id])}}">Изменить</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
