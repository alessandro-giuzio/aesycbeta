<div class="bg-bg1 flex flex-col items-center justify-center pt-0 px-4 lg:px-[120px] pb-24 gap-8">
    {{-- heading --}}
    <div class="flex justify-between w-full">
        <p class="text-3xl text-txPri font-bold leading-10">{{ $heading }}</p>
        <div class="flex flex-col items-center justify-center gap-3">
            <a href="/blog" class="text-base text-primary-0 font-normal leading-6">Alle Beiträge ansehen →</a>
        </div>
    </div>
    {{-- cards container --}}
    <div class="flex flex-col md:flex-row items-center justify-center gap-12">
        {{-- loop on the posts and show the first three blog post --}}
        @php
            
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'date',
            ];
            query_posts($args);
            
        @endphp
        @while (have_posts())
            @php(the_post())
            @include('partials.blog-card')
        @endwhile
    </div>
</div>
