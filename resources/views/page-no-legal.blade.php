@extends('layouts.app')

@section('content')
    <div class="container flex flex-col pt-12 px-4 lg:px-[120px] pb-24 gap-12 h-screen">

        <div class="flex flex-col lg:flex-row items-start gap-24 p-0">
            <div class="max-w-[1200px] w-full my-0 mx-auto flex">
                {{-- card container --}}
                <div class="flex relative">
                    {{-- image container --}}
                    <div class="card-container w-full overflow-hidden">
                        <img src="@asset('/images/blog/blog-hero.png')" alt="">
                    </div>
                    {{-- body container --}}
                </div>
                <div class="flex flex-col flex-grow gap-4">
                    <div class="flex flex-col gap-4 z-heroHeading">
                        <!-- Heading Container -->
                        <div class="flex flex-col  p-0">
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
                            <p class="text-2xl text-txPri font-bold leading-10">
                                Featured Blog Post
                            </p>
                        </div>
                        <!-- Text -->
                        <p class="text-lg text-txSec font-normal leading-8 max-w-[368px]">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente hic eius beatae,
                            inventore enim cumque
                            ipsa quas! Dolorem doloribus quis, distinctio dolor quidem explicabo cum.
                        </p>

                        <!-- CTA -->
                        <div>@include('components.button', [
                            'text' => 'Gesamten Artikel lesen',
                            'class' => 'btn-pry',
                        ])</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
