@extends('layout.layout')
@section('title', $title)
@section('description', 'Описание главной страницы')
@section('keywords', 'Ключевые поля для заполнения')
@section('image', 'Изображение')
@section('content')
<livewire:hero-section />
<section class="main__wrapperSection order" id="order">
	<div class="container order__container">
		<div class="order__wrapper tab-container">
			<div class="order__form">
				<div data-tab-target="tab1" class="order__tab-path">
					<form class="order__formWrapper">
						<div class="order__form-group">
							<div class="order__form-item">
								<label for="from-input" class="order__form-label">Местоположение</label>
								<input type="text" class="order__form-input" id="from-input" placeholder="Город, улица, дом" required />
							</div>
							<div class="order__form-item">
								<label for="name-input" class="order__form-label">Имя</label>
								<input type="text" class="order__form-input" id="name-input" placeholder="Укажите Ваше имя" required />
							</div>
							<div class="order__form-item">
								<label for="phone-input" class="order__form-label">Номер телефона</label>
								<input type="text" class="order__form-input phone-mask" id="phone-input-2" placeholder="Укажите номер телефона" required />
							</div>
							<div class="order__form-item">
								<button class="order__form-button button button--primary">Забронировать</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="main__wrapperSection auto-class">
	<div class="container auto-class__container">
		<div class="auto-class__rowContent">
			<div class="catalog__rowHead">
				<h2 class="catalog__rowHead-title headSection-title">Популярные классы авто</h2>
				<p class="catalog__rowHead-description headSection-description">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, eaque aut ratione, repellat nesciunt omnis dolores dolor veritatis at&#160;quas, nisi sunt beatae perferendis. Architecto asperiores repudiandae accusamus
					adipisci modi aspernatur delectus esse, distinctio accusantium sapiente magni expedita sunt nulla?
				</p>
			</div>
			<div class="auto-class__rowBody">
				<livewire:catalog-car />
			</div>
		</div>
	</div>
</section>
<section class="main__wrapperSection process-works" id="process-works">
	<div class="container process-works__container">
		<div class="process-works__rowContent">
			<div class="process-works__rowHead">
				<h2 class="process-works__rowHead-title headSection-title">Как мы&#160;работаем?</h2>
				<p class="process-works__rowHead-description headSection-description">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa blanditiis magnam fugiat, quasi at&#160;ex&#160;labore, dolorum fugit officia alias accusantium unde aut nulla!
				</p>
			</div>
			<div class="process-works__rowBody">
				<div class="process-works__col process-works__col--left">
					<ul class="process-works__stages">
						<li class="process-works__stages-item">
							<div class="process-works__stages-card">
								<div class="process-works__stages-icon">
									<i class="ri-search-line"></i>
								</div>
								<div class="process-works__stages-detail">
									<h3 class="process-works__stages-detailTitle">Lorem ipsum dolor sit amet consectetur.</h3>
									<p class="process-works__stages-detailText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, amet delectus. Delectus!</p>
								</div>
							</div>
						</li>
						<li class="process-works__stages-item">
							<div class="process-works__stages-card">
								<div class="process-works__stages-icon">
									<i class="ri-search-line"></i>
								</div>
								<div class="process-works__stages-detail">
									<h3 class="process-works__stages-detailTitle">Lorem ipsum dolor sit amet consectetur.</h3>
									<p class="process-works__stages-detailText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, amet delectus. Delectus!</p>
								</div>
							</div>
						</li>
						<li class="process-works__stages-item">
							<div class="process-works__stages-card">
								<div class="process-works__stages-icon">
									<i class="ri-search-line"></i>
								</div>
								<div class="process-works__stages-detail">
									<h3 class="process-works__stages-detailTitle">Lorem ipsum dolor sit amet consectetur.</h3>
									<p class="process-works__stages-detailText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, amet delectus. Delectus!</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="process-works__col process-works__col--right">
					<img loading="lazy" src="./img/works-img-1.png" alt="" class="process-works__image" />
				</div>
			</div>
		</div>
	</div>
</section>
<livewire:section.advantages-section />
<section class="main__wrapperSection about" id="about">
	<div class="container about__container">
		<div class="about__rowContent">
			<div class="about__rowHead">
				<h2 class="about__title headSection-title">О&#160;компании</h2>
				<p class="about__subtext headSection-description">Мы&#160;организовываем трансферы в&#160;120 странах мира&#160;&#8212; из&#160;аэропорта, с&#160;вокзала, для перемещения по&#160;городу или между городами.</p>
				<div class="about__text">
					<p>Работаем так, чтобы ваш путь был комфортным и&#160;безопасным, а&#160;заказ на&#160;сайте&#160;&#8212; понятным и&#160;быстрым.</p>
					<p>
						В&#160;отличие от&#160;такси, стоимость трансфера фиксирована&#160;&#8212; любой адрес в&#160;городе по&#160;одной цене. Вы&#160;не&#160;платите за&#160;встречу с&#160;табличкой и&#160;провоз багажа. Даже если рейс
						задержали, мы&#160;дождёмся вас бесплатно.
					</p>
					<p>Заказать поездку можно на&#160;этом сайте и&#160;автомобиль прибудет к&#160;запланированной минуте.</p>
					<p>Заказать поездку можно на&#160;этом сайте и&#160;автомобиль прибудет к&#160;запланированной минуте.</p>
				</div>
			</div>
			<div class="about__rowBody">
				<img loading="lazy" src="./img/about-img-1.jpg" alt="" class="about__rowBody-img" />
			</div>
		</div>
	</div>
</section>
<section class="main__wrapperSection articles" id="articles">
	<div class="container articles__container">
		<div class="articles__rowContent">
			<div class="articles__rowHead">
				<h2 class="articles__rowHead-title headSection-title">Наши статьи</h2>
				<p class="articles__rowHead-description headSection-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi debitis odit aut nostrum saepe autem.</p>
			</div>
			<div class="articles__rowBody">
				<ul class="articles__list">
					<li class="articles__item">
						<article class="articles__card">
							<div class="articles__card-preview">
								<img loading="lazy" src="./img/about-img-1.jpg" alt="" class="articles__card-previewImg" />
							</div>
							<div class="articles__card-detail">
								<a href="./single-article.html" class="articles__card-more">
									<h3 class="articles__card-name">Lorem ipsum dolor sit. <i class="ri-arrow-right-line"></i></h3>
								</a>
								<p class="articles__card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, quam!</p>
								<span class="articles__card-date">12.03.2024</span>
							</div>
						</article>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

@endsection