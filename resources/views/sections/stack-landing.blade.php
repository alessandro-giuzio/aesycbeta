<section id="stack">
    <div class="flex flex-col items-center p-0 bg-bg3">
        <div class="flex items-start py-24 px-4 md:px-[120px] gap-16">
            <div class="flex flex-col md:flex-row items-center p-0 gap-16 relative">
                {{-- text --}}
                <div class="flex flex-col items-start gap-4">
                    @include('partials.heading', ['text' => 'Our Stack of choice'])
                    <p class="text-base md:text-xl text-txSec font-normal md:leading-8 max-w-lg">
                        Accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                {{-- icons --}}
                <div class="flex flex-col items-start gap-12">
                    {{-- 1st row --}}
                    <div class="flex items-center gap-4">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack01.svg')" alt="">
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack02.svg')" alt="">
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack03.svg')" alt="">
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack04.svg')" alt="">
                        </div>
                    </div>
                    {{-- 2nd row --}}
                    <div class="flex items-center gap-4">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack05.svg')" alt="">
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack06.svg')" alt="">
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack07.svg')" alt="">
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="@asset('../../images/stack08.svg')" alt="">
                        </div>
                    </div>
                </div>
                <div class="stackOfChoice"></div>
            </div>
        </div>
    </div>
</section>
