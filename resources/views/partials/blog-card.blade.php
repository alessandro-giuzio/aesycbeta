<div class="blog-card">
    <!-- Image Container -->
    <div class="max-w-sm">
        <img src="@asset('images/blog/blog-card-1.png')" alt="prova">
    </div>
    <!-- Heading Container -->
    <div class="flex flex-col p-0">
        <!-- Category & Date Container -->
        <div class="flex justify-between py-2 px-0 ">
            <p class="text-sm text-primary-50 font-bold leading-4  uppercase">
                @if (!get_the_tags())
                    <a href="{{ get_permalink() }}" class="text-primary-50">
                        {{ __('Alle Kategorien') }}
                    </a>
                @else
                    @foreach (get_the_tags() as $tag)
                        <a href="{{ get_tag_link($tag->term_id) }}" class="text-primary-50">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                @endif
            </p>
            <p class="text-sm text-txSec font-normal leading-4 ">
                <time class="updated" datetime="{{ get_post_time('c', true) }}">
                    {{ get_the_date() }}
                </time>
            </p>
        </div>
        <h2 class="text-2xl text-txPri font-bold leading-10">
            <a href="{{ get_permalink() }}">
                {{ get_the_title() }}
            </a>
        </h2>
    </div>
    <!-- Text -->
    <div class="entry-content text-lg text-txSec font-normal leading-8 max-w-[368px]">
        @php(the_excerpt())
    </div>

    <footer>
        {!! wp_link_pages([
            'echo' => 0,
            'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
            'after' => '</p></nav>',
        ]) !!}
    </footer>

    @php(comments_template())
    <!-- CTA -->
    <div class="btn-pry">@include('components.button', ['text' => 'Gesamten Artikel lesen'])</div>
</div>
