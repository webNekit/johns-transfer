@extends('layout.layout')
@section('title', $title)
@section('description', 'Описание главной страницы')
@section('keywords', 'Ключевые поля для заполнения')
@section('image', 'Изображение')
@section('content')
<section class="main__wrapperSection auto-class">
	<div class="container auto-class__container">
		<div class="auto-class__rowContent">
			<livewire:section.catalog-car />
			<div class="auto-class__rowBody">
				<livewire:catalog-car />
			</div>
		</div>
	</div>
</section>
@endsection