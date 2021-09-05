@extends('layouts.front')

@section('content')
    <!--           start content-->
    <div class="main-container">
        <main class="main wrapper">
            <!-- intro-innerPage -->

            <div class="intro-innerPage">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 padi-0">
                            <div class="intro-back"
                                 style="background-image: url({{voyager::image(setting('site.c_image'))}});">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- intro-innerPage -->

            <!-- page-ul-section -->
            <div class="page-ul-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-ul">
                                <ul class="list-unstyled" data-aos="fade-up">
                                    <li>
                                        <a href="{{route('HOME')}}">
                                            {{__('home.home')}}
                                        </a>
                                    </li>
                                    <li>
                                        <h5 class="page-active">
                                             {{__('home.contact_us')}}
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->




            <!-- contact-section -->
            <div class="contact-section">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-10">
                            <div class="row">

                                @foreach($branches as $bId => $branch)
                                <div class="col-md-6 contact-show-box">
                                    <div class="js-tilt" data-tilt-axis="x y" data-aos="zoom-in">
                                        <div class="c-example__tilt-inner">
                                            <div class="contact-box">
                                                <h5 class="adress-title">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    {{$branch->getTranslatedAttribute('header', Config::get('app.locale') , 'fallbackLocale')}}
                                                </h5>
                                                @if($branch->title)
                                                <h5 class="adress-title">
                                                    {{$branch->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                                </h5>
                                                @endif
                                                <p class="prag">
                                                    {{$branch->getTranslatedAttribute('address', Config::get('app.locale') , 'fallbackLocale')}}
                                                </p>
                                                @if($branch->phone)
                                                <h4 class="contact-ditales">
                                                        <span>
                                                             {{__('home.tel')}}:
                                                        </span>
                                                    {{$branch->phone}}
                                                </h4>
                                                @endif
                                                @if($branch->fax)
                                                <h4 class="contact-ditales">
                                                        <span>
                                                            {{__('home.fax')}}:
                                                        </span>
                                                    {{$branch->fax}}
                                                </h4>
                                                @endif
                                                @if($branch->email)
                                                <h4 class="contact-ditales">
                                                        <span>
                                                            {{__('home.email')}}:
                                                        </span>
                                                    {{$branch->email}}
                                                </h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="more-bottom">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-section -->
            <section class="section-map ">
                <iframe src="{{setting('site.location')}}" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen=""  aria-hidden="false" tabindex="0" marginheight="0" marginwidth="0"></iframe>
            </section>
        </main>
    </div>
    <!--           end content-->
@endsection
