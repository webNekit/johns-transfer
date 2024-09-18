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
				<livewire:order-form :carClass="$service" />
			</div>
		</div>
	</div>
</section>
@endsection
