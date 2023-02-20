@extends('layouts.app')

@section('content')
    <div class="container mx-auto pt-24 pb-32">
        <div class="max-w-6xl mx-auto md:px-6 flex flex-col space-y-8 md:flex-row md:space-y-0 items-center md:space-x-36">
            <!-- Image Container -->
            <div class="md:basis-1/2 mx-auto relative">
                <img src="@asset('images/contact/alex-starnes.png')" alt="prova">
                <div class="-translate-y-[150px] translate-x-[110px]   flex space-x-20 ">
                    <div class="hidden xl:flex flex-col space-y-10.4 items-center gap-8">
                        <div class=" py-2 px-4 rounded-lg flex self-start  bg-primary-0">
                            <p class="text-base text-bg1 font-bold leading-8">
                                Dein Ansprechpartner
                            </p>
                        </div>
                        <div class="bg-primary-0 py-2 px-4 rounded-xl flex self-start items-center justify-center">
                            <div class="h-6 w-6">
                                <img src="@asset('images/contact/phone.svg')" alt="">
                            </div>
                            <div>
                                <a href="tel:+123456678" class="text-base text-bg1 font-semibold leading-4 md:leading-6">
                                    +123456789-0
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden xl:flex flex-col space-y-10.4 items-center gap-8">
                        <div class="rounded-lg bg-primary-0  px-4 py-2 flex gap-2">
                            <div>
                                <div>
                                    <p class="text-lg text-bg1 font-bold leading-6">
                                        Jan-Eric Schober
                                    </p>
                                </div>
                                <div>
                                    <p class="text-base text-bg1 font-normal leading-6">
                                        Geschäftsführer
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-primary-0 px-4 py-2 flex items-center gap-2">
                            <div class="h-6 w-6">
                                <img src="@asset('images/contact/mail.svg')" alt="" />
                            </div>
                            <div>
                                <a href="mailto:je@aesyc.systems" class="text-lg text-bg1 font-bold leading-6">
                                    je@aesyc.systems
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Container -->
            <div class="md:basis-1/2 mx-auto flex items-center">
                <div class="form-container">
                    <div class="form-header flex flex-col gap-6">
                        @include('partials.heading', ['text' => 'Lass’ uns quatschen!'])
                        <!-- Social Container -->
                        <div class="flex gap-6">
                            <a href="#"><img src="@asset('/images/contact/twitter.png')" alt="" /></a>

                            <a href="#"><img src="@asset('/images/contact/fb.png')" alt="" /></a>
                            <a href="#"><img src="@asset('/images/contact/insta.png')" alt="" /></a>
                            <a href="#"><img src="@asset('/images/contact/ics.png')" alt="" /></a>
                            <a href="#"><img src="@asset('/images/contact/icy.png')" alt="" /></a>
                            <a href="#"><img src="@asset('/images/contact/git.png')" alt="" /></a>
                        </div>
                    </div>
                    <!-- Form -->
                    <div class="form">
                        <form action="">
                            <div class="input-animated">
                                <label for="name" class="w-full label-name"><span
                                        class="content-name w-full text-xs text-txSec font-bold leading-4">Dein
                                        Name</span></label>
                                <input type="text" id="name" name="name" required="" pattern="\S+.*"
                                    placeholder=""
                                    class="w-full border border-[#41413a] px-3 py-2 focus:outline-none bg-bg2" />
                            </div>
                            <div class="input-animated">
                                <label for="email" class="w-full label-name"><span
                                        class="content-name w-full text-xs text-txSec font-bold leading-4">Deine E-Mail
                                        Adresse</span></label>
                                <input type="text" id="email" name="email" pattern="\S+.*" placeholder=""
                                    class="w-full border border-[#41413a] px-3 py-2 focus:outline-none bg-bg2" />
                            </div>
                            <div class="mt-2">
                                <span class="content-name w-full text-xs text-txSec font-bold leading-4">Deine Nachricht an
                                    uns</span>
                                <textarea name="question" id="question" cols="35" rows="6" minlength="10" maxlength="100" required=""
                                    class="w-full border border-[#41413a] px-3 py-2 focus:outline-none bg-bg2"></textarea>
                            </div>
                        </form>
                        <div class="input-animated">
                            <input type="checkbox" name="checkbox" id="" class="checked:bg-primary-0" />
                            <label for="checkbox" class="text-base text-txSec font-normal leading-5">Ich akzeptiere die
                                <span class="text-primary-0 font-bold">Datenschutzerklärung</span> und bin mit der
                                Verarbeitung meiner Daten zwecks Kontaktaufnahme einverstanden.</label>
                        </div>
                        @include('components.button', ['text' => 'Nachricht senden', 'class' => 'btn-pry'])
                        {{--  <button
            type="submit"
            id="submit-button"
            class="text-white w-full bg-primary-0 border border-primary-600 focus:ring-4 text-sm px-5 py-2.5 text-center mr-2 mb-2"
          >
            Send message
          </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center">
        @include('components.3CardsSection', ['heading' => 'Entdecke unseren Blog'])
    </div>
@endsection
