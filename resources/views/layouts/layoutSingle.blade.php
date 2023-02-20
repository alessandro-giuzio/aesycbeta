<a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
</a>


<main id="main" class="main bg-bg1 px-2 lg:px-[120px]">
    @include('sections.header')
    @yield('content')
    @hasSection('sidebar')
        <aside class="sidebar">
            @yield('sidebar')
        </aside>
    @endif

    @include('sections.footer')
</main>
