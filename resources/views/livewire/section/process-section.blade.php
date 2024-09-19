<section class="main__wrapperSection process-works" id="process-works">
	<div class="container process-works__container">
		<div class="process-works__rowContent">
			<div class="process-works__rowHead">
				<h2 class="process-works__rowHead-title headSection-title">{{ $title }}</h2>
				<p class="process-works__rowHead-description headSection-description">{{ $description }}</p>
			</div>
			<div class="process-works__rowBody">
				<div class="process-works__col process-works__col--left">
					<ul class="process-works__stages">
                        @foreach ($items as $item)
                            <li class="process-works__stages-item">
                                <div class="process-works__stages-card">
                                    <div class="process-works__stages-icon">
                                        <i class="ri-check-double-line"></i>
                                    </div>
                                    <div class="process-works__stages-detail">
                                        <h3 class="process-works__stages-detailTitle">{{ $item['name'] }}</h3>
                                        <p class="process-works__stages-detailText">{{ $item['description'] }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
					</ul>
				</div>
				<div class="process-works__col process-works__col--right">
					<img loading="lazy" src="{{ asset('assets/img/works-img-1.png') }}" alt="" class="process-works__image" />
				</div>
			</div>
		</div>
	</div>
</section>