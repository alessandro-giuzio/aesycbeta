<section id="cta-landing">
    <div class="bg-bg3 flex flex-col items-center py-16 px-2 md:px-[120px] gap-4">
        <div class="flex flex-col items-center gap-4">
            <div class="flex flex-col items-start sm:items-center gap-12 border-2 border-green-600">
                {{-- text container --}}
                <div class="flex flex-col items-center gap-4">
                    <h2 class="text-2xl md:text-4xl text-txPri font-bold md:leading-[56px] text-center">Can’t resist the
                        CTA</h2>
                    <p class="text-xl md:text-2xl text-txSec font-normal md:leading-10 text-center max-w-lg">Lorem ipsum
                        dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                </div>
                {{-- cta container --}}
                <div class="flex items-center gap-8">
                    @include('components.button', [
                        'text' => 'Let’s start to automate your business today',
                        'class' => 'btn-pry',
                    ])
                </div>
            </div>
        </div>
    </div>
</section>
