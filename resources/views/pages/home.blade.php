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
<livewire:hero-section />
<section class="main__wrapperSection order" id="order">
	<div class="container order__container">
		<div class="order__wrapper tab-container">
			<div class="order__form">
				<div data-tab-target="tab1" class="order__tab-path">
					<livewire:main-order-form />
				</div>
			</div>
		</div>
	</div>
</section>
<livewire:section.process-section />
<livewire:section.advantages-section />
<livewire:section.about-section />
<livewire:section.articles-section />

@endsection