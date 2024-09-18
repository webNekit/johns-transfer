<section class="main__wrapperSection advantages" id="advantages">
	<div class="container advantages__container">
		<div class="advantages__rowContent">
			<div class="advantages__rowHead">
				<h2 class="advantages__rowHead-title headSection-title">{{ $title }}</h2>
				<p class="advantages__rowHead-description headSection-description">{{ $description }}</p>
			</div>
			<div class="advantages__rowBody">
				<ul class="advantages__list">
                    @foreach ($items as $item)
                    <li class="advantages__list-item">
						<div class="advantages__list-card">
							<div class="advantages__list-cardIcon">
								<i class="ri-bard-fill"></i>
							</div>
							<h3 class="advantages__list-cardName">{{ $item['name'] }}</h3>
							<p class="advantages__list-cardText">{{ $item['description'] }}</p>
						</div>
					</li>
                    @endforeach
				</ul>
			</div>
		</div>
	</div>
</section>