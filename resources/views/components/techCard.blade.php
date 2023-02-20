<div class="{{ $class }} flex flex-col items-start p-8 gap-16 max-w-[288px]">
    <img src="{{ $img }}" alt="" class="border-2 border-yellow-100">
    <div class="flex flex-col items-start p-0 gap-8">
        <div class="flex flex-col items-start gap-4">
            <p class="text-3xl text-txPri font-bold leading-10">{{ $title }}</p>
            <p class="text-xl text-txSec font-normal leading-8 max-w-md">{{ $body }}</p>
        </div>
        {{-- link --}}
        <div class="flex flex-col justify-center items-start gap-4">
            @include('components.learnMore')
        </div>
    </div>
</div>
