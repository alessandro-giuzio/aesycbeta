<section id="hero-landing">
    @include('partials.backgroundHome')
    <div class="flex flex-col items-center justify-center pt-4 md:pt-24 px-4 lg:px-[120px] pb-12  hero-pattern">
        <div class="flex flex-col-reverse md:flex-row items-center justify-center gap-[72px]">
            <div class="flex flex-col items-start gap-12">
                {{-- text container --}}
                <div class="flex flex-col items-start max-w-xl gap-4">
                    <h1 class="text-2xl md:text-4xl text-txPri font-bold md:leading-[64px]">Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam nonumy eirmod</h1>
                    <p class="text-xl md:text-2xl text-txSec font-normal md:leading-10">Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                </div>
                {{-- cta container --}}
                <div class="flex flex-col  items-start gap-2 relative">
                    @include('components.button', ['text' => 'Primary CTA', 'class' => 'btn-pry'])
                    @include('components.button', ['text' => 'Another CTA', 'class' => 'btn-sec'])
                </div>
                {{-- text & logo  --}}
                <div class="flex flex-col items-start gap-2">
                    <p class="text-xs text-txSec font-medium leading-6 text-center">Brands love to work with us</p>
                    {{-- logos --}}
                    <div class="flex items-center gap-8">
                        <img src="@asset('../images/logo-partner.svg')" alt="">
                        <img src="@asset('../images/logo-partner-1.svg')" alt="">
                    </div>
                </div>
            </div>
            {{-- town image container --}}
            <div class="relative">
                <img src="@asset('../images/town.svg')" alt="" class="">
            </div>
        </div>
    </div>
</section>
