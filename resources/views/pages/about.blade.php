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
                            @if ( Config::get('app.locale') == 'en')
                                <div class="intro-back" style="background-image: url('{{voyager::image(setting('site.about_back_ground'))}}');"></div>
                            @elseif ( Config::get('app.locale') == 'ar' )
                                <div class="intro-back" style="background-image: url('{{voyager::image(setting('site.about_back_ground_ar'))}}');"></div>
                              @endif
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
                                              {{__('home.about_us')}}
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->
            @foreach($abouts as $aid => $about)
            <!-- about-section -->
                @if($aid == 0)
                     <div class="about-section about-section-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="js-tilt" data-tilt-axis="x y" data-aos="zoom-in">
                                        <div class="c-example__tilt-inner">
                                            <img src="{{voyager::image($about->image)}}" width="100%" height="100%" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="section-content no-marg" data-aos="fade-up">
                                        <h3 class="section-title">
                                            {{$about->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                        </h3>
                                        <p class="prag">
                                            {{$about->getTranslatedAttribute('text', Config::get('app.locale') , 'fallbackLocale')}}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                <!-- chairmanMaessage-section -->
                    <div class="chairmanMaessage-section"   style="background-image: url('{{voyager::image($about->background)}}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-content">
                                        <h3 class="section-title white-title">
                                            {{$about->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="js-tilt" data-tilt-axis="x y" data-aos="flip-up">
                                        <div class="c-example__tilt-inner">
                                            <img src="{{voyager::image($about->image)}}" width="100%" height="100%" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="section-content section-contenttext width-prag-100" data-aos="fade-up">
                                        <p class="prag">
                                        {{$about->getTranslatedAttribute('text', Config::get('app.locale') , 'fallbackLocale')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- chairmanMaessage-section -->
                @endif
            @endforeach

            <!-- about-section -->
            <!-- visionandmision-section -->
            <div class="visionandmision-section" style="background-image: url('{{voyager::image(setting('site.m_v_background'))}}');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content width-prag-100" data-aos="fade-up">
                                <h3 class="section-title white-title">
                                    {{__('home.mission')}}
                                </h3>
                                <p class="prag">
                                    {{setting('site.mission_'.Config::get('app.locale'))}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content width-prag-100" data-aos="fade-up">
                                <h3 class="section-title white-title">
                                     {{__('home.vision')}}
                                </h3>
                                <p class="prag">
                                    {{setting('site.vision_'.Config::get('app.locale'))}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- visionandmision-section -->

            <!-- values-section -->
            <div class="values-section logo-back"  >
                <div class="container">
                    <div class="row">

                        @foreach($values as $vId => $value)
                            @if($vId == 0)
                                <div class="col-lg-6 col-md-12">
                                    <div class="section-content" data-aos="fade-up">
                                        <h2 class="section-title2">
                                            {{__('home.our_values')}}
                                        </h2>
                                        <h3 class="section-title blue-title">
                                            {{$value->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}

                                        </h3>
                                        <p class="prag">
                                            {{$value->getTranslatedAttribute('text', Config::get('app.locale') , 'fallbackLocale')}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="js-tilt" data-tilt-axis="x y" data-aos="zoom-in">
                                        <div class="c-example__tilt-inner">
                                            <img src="{{voyager::image(setting('site.v_image'))}}" width="100%" height="100%" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                        @else
                            <div class="col-lg-6 col-md-12">
                                <div class="section-content" data-aos="fade-up">
                                    <h3 class="section-title blue-title">
                                        {{$value->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                    </h3>
                                    <p class="prag">
                                        {{$value->getTranslatedAttribute('text', Config::get('app.locale') , 'fallbackLocale')}}
                                    </p>
                                </div>
                             </div>
                         @endif
                        @endforeach
                    </div>
                    <div class="pop-up-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="fastJs-tilt" data-tilt-axis="x y">
                                    <div class="c-example__tilt-inner pop-up-opner" data-aos="zoom-in" data-opne="history-popUp">
                                        <img src="{{voyager::image(setting('site.h_m_image'))}}" alt="" class="img-fluid" />
                                        <h4 class="pop-up-title">
                                            {{__('home.HIS_MILE')}}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="fastJs-tilt" data-tilt-axis="x y">
                                    <div class="c-example__tilt-inner pop-up-opner" data-aos="zoom-in" data-opne="mang-popUp">
                                        <img src="{{voyager::image(setting('site.t_member'))}}" alt="" class="img-fluid" />
                                        <h4 class="pop-up-title whitle-title">
                                            {{__('home.t_members')}}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- values-section -->

            <!-- pop-up-box -->
            <div class="pop-up-box pop-box-1" id="history-popUp">
                <div class="closePop-icon">
                    <i class="fas fa-times"></i>
                </div>
                <div class="pop-box">
                    <div class="title-box">
                        <h3 class="title">{{__('home.history_mil')}}</h3>
                        <p class="prag">{{__('home.history_mil_1')}}  </p>
                        <p class="prag">  {{__('home.history_mil_2')}} </p>
                    </div>
                    <ul class="pop-up-ul list-unstyled">
                        @foreach($histories as $hid => $history)
                                <li>
                                    <div class="pop-box-li">
                                        <img src="{{voyager::image($history->image)}}" class="img-fluid" alt="" />
                                        <p class="prag">
                                            {{$history->getTranslatedAttribute('text', Config::get('app.locale') , 'fallbackLocale')}}
                                        </p>
                                    </div>
                                    <div class="years-box">
                                        {{$history->getTranslatedAttribute('year', Config::get('app.locale') , 'fallbackLocale')}}
                                    </div>
                                </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- pop-up-box -->

            <!-- pop-up-box -->
            <div class="pop-up-box pop-box-2" id="mang-popUp">
                <div class="closePop-icon">
                    <i class="fas fa-times"></i>
                </div>
                <div class="pop-box">
                    <h3 class="pop-title">
                        <span>   {{__('home.our')}} </span>
                        <span>  {{__('home.team')}} </span>
                        <span>{{__('home.members')}}</span>
                    </h3>
                    <ul class="list-unstyled mang-ul">
                        @foreach($team as $tid => $t)
                            <li>
                                <div class="mang-img">
                                    <img src="{{voyager::image($t->image)}}" alt="" class="img-fluid" />
                                </div>
                                <div class="mang-disc">
                                    <h2 class="mang-name"> {{$t->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}} </h2>
                                    <span class="mang-title"> {{$t->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}  </span>
                                </div>
                            </li>
                     @endforeach
                    </ul>
                </div>
            </div>
            <!-- pop-up-box -->
        </main>
    </div>
    <!--           end content-->
@endsection
