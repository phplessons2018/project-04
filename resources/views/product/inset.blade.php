@extends('layouts.app')

@section('content')
    <div class="content-top">
        <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
        <div class="image-container"><img src="/img/slider.png" alt="Image" class="image-main"></div>
    </div>
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">The Witcher 3: Wild Hunt в разделе action</div>
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
            <div class="product-container">
                <div class="product-container__image-wrap"><img src="/uploads/{{$product->image}}" class="image-wrap__image-product"></div>
                <div class="product-container__content-text">
                    <div class="product-container__content-text__title">{{$product->title}}</div>
                    <div class="product-container__content-text__price">
                        <div class="product-container__content-text__price__value">
                            Цена: <b>{{$product->price}}</b>
                            руб
                        </div><a href="#" class="btn btn-blue">Купить</a>
                    </div>
                    <div class="product-container__content-text__description">
                        <p>
                            {{$product->text}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-bottom">
        <div class="line"></div>
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
            </div>
        </div>
        <div class="content-main__container">
            <div class="products-columns">
                @foreach($products as $product)
                    <div class="products-category__list__item">
                        <div class="products-category__list__item__title-product"><a href="{{route('product.inset', [$product->id])}}">{{$product->title}}</a></div>
                        <div class="products-category__list__item__thumbnail"><a href="{{route('product.inset', [$product->id])}}" class="products-category__list__item__thumbnail__link"><img src="/uploads/{{$product->image}}" alt="Preview-image"></a></div>
                        <div class="products-category__list__item__description"><span class="products-price">{{$product->price}} руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
