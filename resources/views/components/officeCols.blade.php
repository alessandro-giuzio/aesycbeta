<div class="{{ $class }} flex flex-col gap-8 md:w-1/3">
    {{-- img --}}
    <img src="{{ $img }}" alt="">
    {{-- tex container --}}
    <div class="flex flex-col items-start gap-2">
        <h3 class="text-2xl md:text-4xl text-txPri font-bold md:leading-10">{{ $title }}</h3>
        <p class="text-base md:text-xl text-txSec font-normal md:leading-8 max-w-md">{{ $body }}</p>
    </div>
</div>
