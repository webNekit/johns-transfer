@extends('layout.layout')
@section('title', $title)
@section('description', 'Описание главной страницы')
@section('keywords', 'Ключевые поля для заполнения')
@section('image', 'Изображение')
@section('content')
<section class="main__wrapperSection questions" id="questions">
    <div class="container questions__container">
        <div class="questions__rowContent">
            <livewire:question-section />
            <div class="questions__rowBody">
                <livewire:question-list />
            </div>
        </div>
    </div>
</section>
@endsection