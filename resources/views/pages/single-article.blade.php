@extends('layout.layout')
@section('title', $article->title)
@section('description', $article->short_description)
@section('keywords', $article->keywords)
@section('image', url('storage', $article->image))
@section('content')
<section class="main__wrapperSection single-article" id="single-article">
    <div class="single-article__top">
        <div class="container single-article__continer">
            <div class="single-article__head-content">
                <h2 class="single-article__title">{{ $article->title }}</h2>
                <p class="headSection-description">{{ $article->short_description }}</p>
                <div class="single-article__preview">
                    <img loading="lazy" src="{{ url('storage', $article->image) }}" alt="Изображение статьи {{ $article->title }}" class="single-article__preview-img">
                </div>
            </div>
        </div>
    </div>
    <div class="single-article__bottom">
        <div class="container single-article__container">
            <div class="single-article__content">
                {!! $article->full_description !!}
            </div>
        </div>
    </div>
</section>
@endsection