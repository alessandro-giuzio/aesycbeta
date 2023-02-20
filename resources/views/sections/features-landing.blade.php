<section id="features-1">
    <div class="flex flex-col justify-center items-center pt-16 px-2 md:px-[120px] pb-24 gap-[72px]">
        <div class="flex flex-col md:flex-row items-center justify-center p-0 md:gap-[72px] md:max-h-[456px]">
            {{-- img container --}}
            <div class="flex items-center rounded-2xl">
                <img src="@asset('../images/features.svg')" alt="">
            </div>
            {{-- text & select container --}}
            <div class="flex flex-col items-start gap-8">
                {{-- text --}}
                <div class="flex flex-col items-start gap-4">
                    <div class="flex flex-col items-start">
                        <h2 class="text-2xl md:text-4xl text-txPri font-bold md:leading-[56px] max-w-xl">Lorem <span
                                class="text-primary-0">Ipsum Dolor</span> Sit Amet at vero es et <span
                                class="text-primary-0">accusam justo</span>
                        </h2>
                    </div>
                    <p class="text-base md:text-xl text-txSec font-normal md:leading-8 max-w-xl">Accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Stet clita kasd gubergren, no sea takimata</p>
                </div>
                {{-- select --}}
                <div class="flex flex-col items-center md:items-start gap-4">
                    {{-- 1st row --}}
                    <div class="flex items-start gap-8 md:gap-4">
                        @include('components.featuresSectionCheck', ['title' => 'Lorem Ipsum Dolor'])
                        @include('components.featuresSectionCheck', ['title' => 'Lorem Ipsum Dolor'])
                    </div>
                    {{-- 2nd row --}}
                    <div class="flex items-start gap-8 md:gap-4">
                        @include('components.featuresSectionCheck', ['title' => 'Lorem Ipsum Dolor'])
                        @include('components.featuresSectionCheck', ['title' => 'Lorem Ipsum Dolor'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
