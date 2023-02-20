<div id="features">
    <div class="bg-bg1 flex flex-col items-center justify-center pt-0 px-4 lg:px-[120px] pb-24 gap-8">
        {{-- heading --}}
        <div class="flex flex-col items-start">
            <p class="text-3xl text-txPri font-bold leading-10">Entdecke unseren Blog</p>
        </div>
        {{-- card container --}}
        <div class="flex flex-col md:flex-row items-start gap-12">
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

</div>
