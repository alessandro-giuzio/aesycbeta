@extends('layouts.app')

@section('content')
    @include('partials.hero-404')
    @include('components.3CardsSection', ['heading' => 'Entdecke unseren Blog'])

    @if (!have_posts())
        <x-alert type="warning">
            {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif
@endsection
