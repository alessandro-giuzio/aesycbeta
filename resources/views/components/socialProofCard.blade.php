<div
    class="relative flex flex-col items-center pt-16 px-8 pb-4 gap-12 bg-bg2 max-w-[288px]  min-h-[340px] max-h-[360px]">
    <p class="absolute top-0 left-2 text-2xl text-mono font-normal font-mono leading-10">{{ $number }}</p>
    {{-- text --}}
    <div class="flex flex-col items-center gap-8">
        <div class="flex flex-col justify-between items-center gap-4">
            <p class="text-sans text-2xl text-txPri font-bold leading-10 max-w-xs">{{ $title }}</p>
            <p class="text-sans text-base text-txPri font-normal leading-6 max-w-xs">
                {{ $body }}
            </p>

        </div>
    </div>
    {{-- divider --}}
    <div class="bg-primary-50 border-[4px] border-primary-50 h-0 w-2/3 "></div>
</div>
