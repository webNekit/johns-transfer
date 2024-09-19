@extends('layout.layout') 
@section('title', $carClass->name) 
@section('description', $carClass->short_info) 
@section('keywords', $carClass->keywords) 
@section('image', url('storage', $carClass->image)) 
@section('content')
<section class="main__wrapperSection services" id="services">
	<div class="container services__container">
		<div class="services__rowContent">
			<div class="services__headRow">
				<h2 class="services__title">{{ $carClass->name }}</h2>
				<p class="services__text">{{ $carClass->short_info }}</p>
			</div>
			<div class="services__preview">
				<img loading="lazy" src="{{ url('storage', $carClass->image) }}" alt="" class="services__preview-img" />
			</div>
			<div class="services__bodyRow">
				<div class="services__bodyRow-text">
					{!! $carClass->full_info !!}
				</div>
				<ul class="services__cars cars-list">
					<li class="cars-list__item cars-list__item--first">
						<div class="cars-list__card">
							<div class="cars-list__card-col">Марка и модель</div>
							<div class="cars-list__card-col">За 1 час</div>
							<div class="cars-list__card-col">За 12 часов</div>
							<div class="cars-list__card-col">Трансфер</div>
						</div>
					</li>
					@foreach($carClass->cars as $car) 
                    @php
                        $carInfo = \App\Models\Car::find($car['car_id']); 
                    @endphp
					<li class="cars-list__item">
						<div class="cars-list__card">
							<div class="cars-list__card-col">{{ $carInfo->brand }} {{ $carInfo->model }}</div>
							<div class="cars-list__card-col">от {{ $car['price_one'] }} тг.</div>
							<div class="cars-list__card-col">от {{ $car['price_two'] }} тг.</div>
							<div class="cars-list__card-col">от {{ $car['price_three'] }} тг.</div>
						</div>
					</li>
					@endforeach
				</ul>
				<livewire:order-form :carClass="$carClass" />
			</div>
		</div>
	</div>
</section>
@endsection
