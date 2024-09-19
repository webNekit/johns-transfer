<section class="main__wrapperSection about" id="about">
	<div class="container about__container">
		<div class="about__rowContent">
			<div class="about__rowHead">
				<h2 class="about__title headSection-title">{{ $title }}</h2>
				<p class="about__subtext headSection-description">{{ $description }}</p>
			</div>
			<div class="about__rowBody">
				<img loading="lazy" src="{{ url('storage', $image) }}" alt="" class="about__rowBody-img" />
			</div>
		</div>
	</div>
</section>