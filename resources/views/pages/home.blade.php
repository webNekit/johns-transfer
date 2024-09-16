@extends('layout.layout')
@section('title', $title)
@section('description', 'Описание главной страницы')
@section('keywords', 'Ключевые поля для заполнения')
@section('image', 'Изображение')
@section('content')
<section class="main__wrapperSection hero" id="hero">
	<div class="container hero__container">
		<div class="hero__contentWrapper">
			<div class="hero__rowHead">
				<h1 class="hero__superTitle">{{ __('intro.introTitle') }}</h1>
			</div>
			<div class="hero__rowBody">
				<div class="hero__banner">
					<img loading="lazy" src="./img/hero-img-2.png" alt="" class="hero__bannerImg" />
				</div>
			</div>
		</div>
	</div>
</section>
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
				<ul class="auto-class__grid">
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Комфорт</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Бизнесс</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Бизнесс</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Кабриолет</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Комфорт</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Комфорт</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Бизнесс</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Бизнесс</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Кабриолет</h3>
								</div>
							</a>
						</div>
					</li>
					<li class="auto-class__item">
						<div class="auto-class__card">
							<a href="#!" class="auto-class__card-link">
								<div class="auto-class__card-wrapper">
									<img loading="lazy" src="./img/auto-class.webp" alt="" class="auto-class__card-img" />
									<h3 class="auto-class__card-name">Комфорт</h3>
								</div>
							</a>
						</div>
					</li>
				</ul>
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
<section class="main__wrapperSection advantages" id="advantages">
	<div class="container advantages__container">
		<div class="advantages__rowContent">
			<div class="advantages__rowHead">
				<h2 class="advantages__rowHead-title headSection-title">Наши преимущества</h2>
				<p class="advantages__rowHead-description headSection-description">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sint labore ut&#160;hic autem quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sint labore ut&#160;hic autem quasi.
				</p>
			</div>
			<div class="advantages__rowBody">
				<ul class="advantages__list">
					<li class="advantages__list-item">
						<div class="advantages__list-card">
							<div class="advantages__list-cardIcon">
								<i class="ri-bard-fill"></i>
							</div>
							<h3 class="advantages__list-cardName">Lorem ipsum dolor sit.</h3>
							<p class="advantages__list-cardText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, expedita? A, aspernatur.</p>
						</div>
					</li>
					<li class="advantages__list-item">
						<div class="advantages__list-card">
							<div class="advantages__list-cardIcon">
								<i class="ri-bard-fill"></i>
							</div>
							<h3 class="advantages__list-cardName">Lorem ipsum dolor sit.</h3>
							<p class="advantages__list-cardText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, expedita? A, aspernatur.</p>
						</div>
					</li>
					<li class="advantages__list-item">
						<div class="advantages__list-card">
							<div class="advantages__list-cardIcon">
								<i class="ri-bard-fill"></i>
							</div>
							<h3 class="advantages__list-cardName">Lorem ipsum dolor sit.</h3>
							<p class="advantages__list-cardText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, expedita? A, aspernatur.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
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