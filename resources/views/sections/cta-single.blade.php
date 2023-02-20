<section id="cta">
    <!-- CTA Main Container -->
    <div class="flex flex-col lg:flex-row  p-0 gap-8">
        <!-- Background Container -->
        <div class="basis-1/2 flex flex-col gap-8">
            <img src="@asset('../images/cta.png')" alt="">
        </div>
        <!-- Heading & CTA button Container -->
        <div class="basis-1/2 flex flex-col items-start gap-8 py-32 px-4">
            <!-- Text -->
            <div class="flex flex-col items-start gap-2 p-0">
                <h4 class="text-4xl text-txPri font-bold leading-[56px]">Can’t resist the CTA</h4>
                <p class="text-xl text-txSec font-normal leading-8 max-w-lg">At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- Button -->
            @include('components.button', ['text' => 'Some CTA text here', 'class' => 'btn-pry'])
        </div>
    </div>
</section>
