<section class="main__wrapperSection articles" id="articles">
	<div class="container articles__container">
		<div class="articles__rowContent">
			<div class="articles__rowHead">
				<h2 class="articles__rowHead-title headSection-title">{{ $title }}</h2>
				<p class="articles__rowHead-description headSection-description">{{ $description }}</p>
			</div>
			<div class="articles__rowBody">
				<livewire:articles-list />
			</div>
		</div>
	</div>
</section>