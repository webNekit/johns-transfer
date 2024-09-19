<section class="main__wrapperSection requirement" id="requirement">
    <div class="container requirement__container">
        <div class="requirement__rowContent">
            <div class="requirement__rowHead">
                <h2 class="requirement__rowHead-title headSection-title">Требования к водителям</h2>
                <p class="requirement__rowHead-ddescription headSection-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate tempore hic vitae alias fugiat?</p>
            </div>
            <div class="requirement__rowBody">
                <ul class="requirement__grid">
                    @foreach ($items as $item)
                        <li class="requirement__item">
                            <div class="requirement__card">
                                <div class="requirement__card-icon">
                                    <i class="ri-check-line"></i>
                                </div>
                                <div class="requirement__card-info">
                                    <h3 class="requirement__card-infoName">{{ $item['name'] }}</h3>
                                    <p class="requirement__card-infoText">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>