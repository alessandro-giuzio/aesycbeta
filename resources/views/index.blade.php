@extends('layouts.app')

@section('content')
    {{-- main container --}}
    <div class="flex flex-col items-start gap-8   pt-12 px-4 lg:px-[120px] pb-24 bg-bg1">
        {{-- heading --}}
        @include('partials.heading', ['text' => 'Blog'])
        {{-- hero card --}}
        <div class="flex items-center">
            @include('partials.hero-blog-copy')
        </div>
        {{-- tabs --}}
        @include ('partials.tabs-blog-category')
        @if (!have_posts())
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        @endif

        {{-- blog posts cards --}}
        <div class="flex items-baseline justify-center   flex-wrap  space-x-8 space-y-24" style="flex-wrap:wrap">

            @while (have_posts())
                @php(the_post())
                @include('partials.blog-card')
            @endwhile
        </div>

        {{-- pagination --}}
        <?php
        if (function_exists('pagenavi')) {
            pagenavi();
        }
        ?>
        {{-- cta section --}}
    </div>

    @include('sections.cta-blog')
    </div>
@endsection
@section('sidebar')
    @include('sections.sidebar')
@endsection
