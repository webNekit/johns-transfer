@extends('layout.layout') 
@section('title', $service->name) 
@section('description', $service->short_info) 
@section('keywords', $service->keywords) 
@section('image', url('storage', $service->image)) 
@section('content')
<section class="main__wrapperSection services" id="services">
	<div class="container services__container">
		<div class="services__rowContent">
			<div class="services__headRow">
				<h2 class="services__title">{{ $service->name }}</h2>
				<p class="services__text">{{ $service->short_info }}</p>
			</div>
			<div class="services__preview">
				<img loading="lazy" src="{{ url('storage', $service->image) }}" alt="" class="services__preview-img" />
			</div>
			<div class="services__bodyRow">
				<div class="services__bodyRow-text">
					{!! $service->full_info !!}
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
					@foreach($service->cars as $car) 
                    @php
                        $carInfo = \App\Models\Car::find($car['car_id']); 
                    @endphp
					<li class="cars-list__item">
						<div class="cars-list__card">
							<div class="cars-list__card-col">{{ $carInfo->brand }} {{ $carInfo->model }} {{ $carInfo->year }}</div>
							<div class="cars-list__card-col">от {{ $car['price_one'] }} тг.</div>
							<div class="cars-list__card-col">от {{ $car['price_two'] }} тг.</div>
							<div class="cars-list__card-col">от {{ $car['price_three'] }} тг.</div>
						</div>
					</li>
					@endforeach
				</ul>
				<livewire:order-form :carClass="$service" />
			</div>
		</div>
	</div>
</section>
@endsection
