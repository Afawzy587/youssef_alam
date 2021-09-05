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
                            <div class="intro-back" style="background-image: url({{voyager::image(setting('site.services_image'))}});"> </div>
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
                                        <h5 class="page-active">{{__('home.service')}}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->


            <!-- service-section -->

            <div class="service-section">
                <div class="container">
                    <div class="row">
                        @foreach($services as $sId =>$service)
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="service-box" data-aos="zoom-in">
                                <a href="{{$service->link}}">
                                    {{$service->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- service-section -->

            <!-- new-section -->

            <div class="new-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{voyager::image(setting('site.se_s_image'))}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="section-content" data-aos="fade-up">
                                {!! setting('site.se_s_content_'.Config::get('app.locale') ) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- new-section -->

    </div>
@endsection
