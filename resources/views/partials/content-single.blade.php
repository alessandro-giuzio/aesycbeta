<article @php(post_class())>
    <header>
        {{--  <h1 class="entry-title uppercase text-red-500">
      {!! $title !!}
    </h1> --}}
    </header>

    <div class="entry-content prose lg:prose-xl mx-auto items-center pt-12 pb-24">
        <div class="flex items-center w-full justify-between">
            @php(the_category())
            {{-- post date --}}
            <time class="updated" datetime="{{ get_post_time('c', true) }}">
                {{ get_the_date() }}
            </time>
        </div>
        @php(the_content())
    </div>

    <footer>
        {!! wp_link_pages([
            'echo' => 0,
            'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
            'after' => '</p></nav>',
        ]) !!}
    </footer>

    {{-- @php(comments_template()) --}}
</article>
