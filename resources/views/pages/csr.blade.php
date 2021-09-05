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
                            <div class="intro-back" style="background-image: url({{voyager::image(setting('site.csr_image'))}});">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="page-title">
                                                {{__('home.csr')}}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
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
                                        <a href="{{route('HOME')}}">{{__('home.home')}}</a>
                                    </li>
                                    <li>
                                        <h5 class="page-active">{{__('home.csr')}}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->

            <!-- about-section -->
            <div class="about-section about-section-2 csr-mian-sction">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content title-box" data-aos="fade-up">
                                <h3 class="section-title ">
                                    {{setting('site.s_csr_title_'.Config::get('app.locale') )}}
                                </h3>
                            </div>
                            <div class="section-content content-m0" data-aos="fade-up">
                                <p class="prag blue-color">
                                    {{setting('site.s_csr_content_'.Config::get('app.locale') )}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contant-img" data-aos="zoom-in">
                                <img src="{{voyager::image(setting('site.s_c_image'))}}" width="100%" height="100%" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- about-section -->

            <!-- corporate-section  -->
            <div class="corporate-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                <h3 class="section-title">
                                    {{__('home.c_s_r')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="corporate-slider">
                                @foreach($csrs as $cId =>$csr)
                                <div class="corporate-slider-item">
                                    <div class="js-tilt aos-init aos-animate" data-tilt-axis="x y" data-aos="zoom-in" style="will-change: transform; transform: perspective(800px) rotateX(0deg) rotateY(0deg);">
                                        <div class="c-example__tilt-inner">
                                            <img src="{{ Voyager::image($csr->image)}}" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                        <h3 class="section-title">
                                            {{$csr->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                        </h3>
                                        <p class="prag blue-color">
                                            {{$csr->getTranslatedAttribute('content', Config::get('app.locale') , 'fallbackLocale')}}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- corporate-section  -->
        </main>
    </div>
    <!--           end content-->
@endsection
