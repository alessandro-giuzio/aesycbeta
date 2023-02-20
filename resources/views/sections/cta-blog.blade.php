<section>
    <div class="flex flex-col justify-center items-center py-0 px-4 lg:px-[120px] gap-[10px] bg-bg2">
        <div class="flex flex-col justify-center items-center gap-[10px]">
            {{-- content --}}
            <div
                class="flex flex-col xl:flex-row items-center p-16 space-y-5 xl:space-y-0 xl:gap-16   bg-bg2 rounded-[4px]">
                {{-- heading --}}
                <div class="flex flex-col items-start  p-0">
                    <p class="text-4xl text-txPri font-bold leading-[56px] text-left">Lorem ipsum dolor sit</p>
                    <p class="text-xl text-txSec font-normal leading-8">Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor invidunt.</p>
                </div>
                {{-- cta --}}
                @include('components.button', ['text' => 'Some text here', 'class' => 'btn-pry'])

            </div>
        </div>
    </div>
</section>
