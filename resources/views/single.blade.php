@extends('layouts.layoutSingle')

@section('content')
    @include('sections.hero-single-post')
    @include('partials.content-single')
    @include('components.3CardsSection', ['heading' => 'Entdecke witere Artikel'])
    @include('sections.cta-single')
@endsection
