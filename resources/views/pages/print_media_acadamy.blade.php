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
                            <div class="intro-back" style="background-image: url({{voyager::image(setting('site.pmcd_background'))}});">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="page-title">
                                                {{__('home.pmac')}}
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
                                        <h5 class="page-active"> {{__('home.pmac')}}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->

            <!-- about-section -->
            <div class="about-section about-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 d-flex" style="align-items: flex-end;">
                            <div class="section-content" data-aos="fade-up">
                                <h3 class="section-title">
                                   {{setting('site.s_PMAC_t_'.Config::get('app.locale'))}}
                                </h3>
                                <p class="prag">
                                    {{setting('site.s_PMAC_c_'.Config::get('app.locale'))}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contant-img" data-aos="zoom-in">
                                <img src="{{voyager::image(setting('site.s_PMAC_image'))}}" width="100%" height="100%" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- about-section -->
            <!-- pmacCourses-section -->
            <div class="interestedPmacCourses">
                <div class="pmacCourses-section"  style="background-image: url({{voyager::image(setting('site.s_course_image'))}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                    <h3 class="section-title">
                                       {{__('home.courses')}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pmacCourses-slider">
                                    @foreach($courses as $cId => $course)
                                        <div class="pmacCourses-slider-item">
                                            <div class="img-popUp" data-toggle="modal" data-target="#exampleModal_{{$cId}}" style="background-image: url({{voyager::image($course->image)}});">
                                                <h3 class="pmacCourses-title">{{$course->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h3>
                                                <p class="prag">
                                                    <span>
                                                    {{Str::limit($course->getTranslatedAttribute('paragraph', Config::get('app.locale') , 'fallbackLocale'))}}
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="opne-rist-section"><span>{{__('home.interested_in_course')}}</span></div>
                                        </div>


                                    @endforeach
                                </div>
                            </div>




                            <div class="col-md-12">
                                <div class="slider-arrow-box">
                                    <div class="left-arrow slider-arrow">
                                        <i id="pmacCourses-slider-left" class="fas fa-arrow-left"></i>
                                    </div>
                                    <div class="left-arrow slider-arrow">
                                        <i id="pmacCourses-slider-right" class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="interested-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                    <h3 class="section-title white-title">
                                        {{__('home.interested_in_course')}}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <form action="" class="interested-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name"
                                                       class="form-control input-style" placeholder="Name"
                                                       aria-describedby="helpId" style="  background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==');
                                                                background-repeat: no-repeat;
                                                                background-attachment: scroll;
                                                                background-size: 16px 18px;
                                                                background-position: 98% 50%;
                                                            " />
                                            </div>
                                            <div class="form-group">
                                                <input type="Phone" name="Phone" id="Phone" class="form-control input-style" placeholder="{{__('home.Phone')}}" aria-describedby="helpId" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="Email" id="Email" class="form-control input-style" placeholder="{{__('home.y_Email')}}l" aria-describedby="helpId" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name=" course name" id=" course name" class="form-control input-style" placeholder="{{__('home.course_name')}}" aria-describedby="helpId" />
                                            </div>
                                            <div class="buttom-link">
                                                <button type="submit" class="submit-button">{{__('home.send')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pmacCourses-section -->

            <!-- gallery-section -->

            <div class="gallery-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content aos-init aos-animate" style="margin-top: 20px;"
                                 data-aos="fade-up">
                                <h3 class="section-title">
                                   {{__('home.image_gallery')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gallery-slider">

                                    @foreach($galleries as $gId => $gallery)
                                    <div class="gallery-slider-item">
                                            <div class="gallery-img-box">
                                                <a data-fancybox="galleryBox{{$gId}}" href="{{voyager::image($gallery->main_image)}}" tabindex="">
                                                    <div class="fastJs-tilt" data-tilt-axis="x y">
                                                        <div class="c-example__tilt-inner">
                                                            <img src="{{voyager::image($gallery->main_image)}}"  alt="" class="img-fluid" />
                                                        </div>
                                                    </div>
                                                    <h3 class="gallery-img-title"> {{$gallery->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h3>
                                                </a>
                                            </div>
                                            <!-- gallery-img-box -->
                                            <div class="gallery-img-box">
                                                <a data-fancybox="galleryBox{{$gId}}" href="{{ Voyager::image($gallery->main_image)}}" tabindex="0"></a>
                                                @if($gallery->images)
                                                    @foreach (json_decode($gallery->images) as $image)
                                                        <a data-fancybox="galleryBox{{$gId}}" href="{{ Voyager::image($image)}}" tabindex="0"></a>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <!-- gallery-img-box -->
                                    </div>
                                        @endforeach


                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="slider-arrow-box">
                                <div class="left-arrow slider-arrow">
                                    <i id="gallery-slider-left" class="fas fa-arrow-left slick-arrow slick-disabled" aria-disabled="true"></i>
                                </div>
                                <div class="left-arrow slider-arrow">
                                    <i id="gallery-slider-right" class="fas fa-arrow-right slick-arrow" aria-disabled="false"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </main>
    </div>
    <!--           end content-->
    <!-- Modal -->
    @foreach($courses as $cId => $course)
        <div class="modal fade" id="exampleModal_{{$cId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$cId}}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{$cId}}">{{$course->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >{!! $course->getTranslatedAttribute('content', Config::get('app.locale') , 'fallbackLocale') !!} </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
