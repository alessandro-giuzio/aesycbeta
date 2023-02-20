@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        {{-- @include('partials.page-header') --}}
        @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
    <h1 class="text-red-800 uppercase">Lorem ipsum dolor sit.</h1>
@endsection
