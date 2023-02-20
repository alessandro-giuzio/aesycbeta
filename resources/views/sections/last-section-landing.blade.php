<section id="last">
    <div class="flex flex-col justify-center items-center pb-0 px-4 md:px-[120px] bg-bg3 gap-4 relative">
        <div class="flex flex-col items-start gap-4">

            <div class="flex flex-col justify-center items-center p-16 gap-8 rounded">
                {{-- heading container --}}
                <div class="flex flex-col items-center justify-center">
                    <p class="text-2xl leading-9 md:text-4xl text-txPri font-bold  text-center max-w-xl">Kann’s losgehen?
                        Wir sind bereit!
                        Kontaktiere uns noch heute.</p>
                </div>
                {{-- cta --}}
                @include('components.button', ['text' => 'Schreib uns', 'class' => 'btn-pry'])

                <img src="@asset('images/last-tinted.svg')" alt="prova" class="w-full  md:-translate-y-[88%] blur-[2px] absolute">
            </div>
        </div>
        <div class="lastSection"></div>
    </div>
</section>
