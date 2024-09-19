@extends('layout.layout')
@section('title', $title)
@section('description', 'Описание главной страницы')
@section('keywords', 'Ключевые поля для заполнения')
@section('image', 'Изображение')
@section('content')
<section class="main__wrapperSection cooperation" id="cooperation">
    <div class="container cooperation__container">
        <div class="cooperation__rowContent">
            <livewire:cooperation-form />
            <div class="cooperation__right">
                <livewire:section.cooperation-section />
            </div>
        </div>
    </div>
</section>
@endsection