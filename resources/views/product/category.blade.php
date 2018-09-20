@extends('layouts.app')

@section('content')
    <div class="content-top">
        <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
        <div class="slider"><img src="/img/slider.png" alt="Image" class="image-main"></div>
    </div>
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Игры в разделе action</div>
            </div>
            <div class="content-head__search-block">
                <div class="search-container">
                    <form class="search-container__form">
                        <input type="text" class="search-container__form__input">
                        <button class="search-container__form__btn">search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-main__container">
            <div class="products-category__list">
                @foreach($products as $product)
                <div class="products-category__list__item">
                    <div class="products-category__list__item__title-product"><a href="{{route('product.inset', [$product->id])}}">{{$product->title}}</a></div>
                    <div class="products-category__list__item__thumbnail"><a href="{{route('product.inset', [$product->id])}}" class="products-category__list__item__thumbnail__link"><img src="/uploads/{{$product->image}}" alt="Preview-image"></a></div>
                    <div class="products-category__list__item__description"><span class="products-price">{{$product->price}} руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="content-footer__container">
            <ul class="page-nav">
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="content-bottom"></div>
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">Post List</div>--}}
                    {{--<a href="{{route('product.create')}}" class="btn">Добавить товар</a>--}}
                    {{--<div class="card-body">--}}
                        {{--<table class="table">--}}

                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
