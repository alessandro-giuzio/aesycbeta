<section id="social-proof">
    <div class="flex flex-col lg:flex-row justify-center items-center  px-4  pt-16 pb-16 gap-4">
        @include('components.socialProofCard', [
            'number' => '1',
            'title' => 'some title title',
            'body' =>
                'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        ])
        @include('components.socialProofCard', [
            'number' => '2',
            'title' => 'some title title',
            'body' =>
                'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        ])
        @include('components.socialProofCard', [
            'number' => '3',
            'title' => 'some title title',
            'body' =>
                'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        ])
        @include('components.socialProofCard', [
            'number' => '4',
            'title' => 'some title title',
            'body' =>
                'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        ])

    </div>
</section>
