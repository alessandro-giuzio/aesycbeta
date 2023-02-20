<div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
    <div class="carousel-indicators absolute right-0 -bottom-[4rem] left-0 flex justify-center p-0 mb-4">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1">1</button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner relative w-full overflow-hidden">
        <div class="carousel-item active relative float-left">
            @include('components.testimonialCarousel')
        </div>
        <div class="carousel-item relative float-left">
            @include('components.testimonialCarousel-1')
        </div>
        <div class="carousel-item relative float-left">
            @include('components.testimonialCarousel')
        </div>
    </div>
</div>
