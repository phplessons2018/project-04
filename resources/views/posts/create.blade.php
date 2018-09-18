@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>
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
                        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="">
                                <input type="text" name="title" value="{{old('title')}}"><br>
                                
                            </label>
                            <label for="">
                                <textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea><br>
                            </label>
                            <input type="file" name="image">
                            <input type="submit" value="send">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
