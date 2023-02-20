<section id="office">
    <div class="flex flex-col py-24 px-4 md:px-[120px] gap-12 overflow-x-hidden">
        {{-- heading --}}
        <div class="flex flex-col items-start gap-2">
            @include('partials.heading', ['text' => 'Lorem lorem lorem'])
        </div>
        {{-- columns --}}
        <div class="flex flex-col md:flex-row items-center gap-4">


            @include('components.officeCols', [
                'title' => 'First Title',
                'body' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'class' => '',
                'img' => @asset('../images/officeFirst.svg'),
            ])
            @include('components.officeCols', [
                'title' => 'Second Title',
                'body' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'class' => 'md:pt-[240px] gap-8',
                'img' => @asset('../images/officeSec.svg'),
            ])
            @include('components.officeCols', [
                'title' => 'Third Title',
                'body' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'class' => 'md:pt-[240px] gap-4',
                'img' => @asset('../images/officeThi.svg'),
            ])
        </div>
    </div>
</section>
