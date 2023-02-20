<section id="tech">
    <div class="bg-bg3 flex flex-col items-center py-24 px-4  gap-[144px]">
        {{-- heading --}}
        <div class="flex flex-col items-center py-0 lg:px-[220px]">
            <h4 class="text-2xl md:text-4xl text-txPri font-normal md:leading-[56px] text-center max-w-lg">Lorem ipsum
                dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod
            </h4>
        </div>
        {{-- tech cards container --}}
        <div class="flex flex-col lg:flex-row items-center p-0 gap-4">
            @include('components.techCard', [
                'title' => 'First Card',
                'body' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'img' => '/public/images/testimonial.svg',
                'class' => 'hover:bg-bg2 duration-150',
            ])
            @include('components.techCard', [
                'title' => 'Second Card',
                'body' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'img' => '../public/images/testimonial-1.svg',
                'class' => 'hover:bg-bg2 duration-150',
            ])
            @include('components.techCard', [
                'title' => 'Third Card',
                'body' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'img' => '../public/images/testimonial-2.svg',
                'class' => 'hover:bg-bg2 duration-150',
            ])
            @include('components.techCard', [
                'title' => 'Fourth Card',
                'body' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'img' => '../public/images/testimonial-3.svg',
                'class' => 'hover:bg-bg2 duration-150',
            ])
        </div>
    </div>
</section>
