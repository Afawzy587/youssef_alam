@extends('layouts.front')

@section('content')
    <!--           start content-->
    <div class="main-container">
        <main class="main wrapper">
            <!-- intro-section -->
            <div class="intro-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 padi-0">
                            <div class="intro-slider">
                                @foreach($sliders as $k => $slider)
                                <div class="intro-slider-item" style="background-image: url({{voyager::image($slider->image)}});">
                                    <div class="scrol-icon" data-scroll="scrol-section">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro-section -->

            <!-- products-section -->
            <div class="products-section" id="scrol-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 padi-0">
                            <div class="products-container">
                                @foreach($categories as $cId => $category)
                                    <div class="products-box" data-aos="fade-up" style="background-image: url({{voyager::image($category->image)}});">
                                        <div class="frist-box">
                                              <div class="front-box">
                                                <img src="{{voyager::image($category->icon)}}" alt="" class="img-fluid" />
                                                <h5 class="product-title">
                                                    {{$category->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                                </h5>
                                            </div>
                                              <div class="contentProduct">
                                                <h2 class="product-subTitle">{{$category->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h2>
                                                <p class="prag">
                                                    {{$category->getTranslatedAttribute('content', Config::get('app.locale') , 'fallbackLocale')}}
                                                </p>

                                               <!-- <a href="#" class="buttom-style">{{__('home.learn_more')}}</a>-->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- products-section -->

            <!-- about-section -->
            <div class="about-section logo-back">
                <div class="container">
                    @foreach($abouts as $aId => $about)
                        <div class="about-row-box" >
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="section-content" data-aos="fade-up"  style="margin: 0;">
                                        <h3 class="section-title"> {{$about->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h3>
                                    </div>
                                    <div class="section-content" data-aos="fade-up" @if($aId == 2)  style="max-height: 317px; margin: 0;" @else style="margin: 0;" @endif>
                                        <p class="prag">{!!  $about->getTranslatedAttribute('text', Config::get('app.locale') , 'fallbackLocale')!!}</p>
                                        @if($aId == 0)
                                            <div class="buttom-link"  style="margin: 0 20px;">
                                                <a href="{{route('ABOUT')}}">
                                                    {{__('home.learn_more')}}
                                                </a>
                                            </div>
                                        @else
                                            @if($about->images)
                                                <div class="buttom-link" style="margin: 0 20px;">
                                                    <a data-fancybox="{{$about->title}}" href=" {{voyager::image($about->image)}}">
                                                        {{__('home.see_more')}}
                                                    </a>

                                                    <div class="photo_galleryList" style="display: none;">
                                                        @foreach (json_decode($about->images) as $image)
                                                             <a data-fancybox="{{$about->title}}" href="{{voyager::image($image)}}"> </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 order-md">
                                    <div class="js-tilt" data-tilt-axis="x y" data-aos="zoom-in">
                                        <div class="c-example__tilt-inner">
                                            <img src="{{voyager::image($about->image)}}" alt="" class="img-fluid blue-border" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endforeach

                    <div class="team-group" style="background-image: url({{voyager::image(setting('site.b_g_home'))}});">
                        <div class="row">
                            @if ( Config::get('app.locale') == 'en')
                                 <div class="col-md-6"></div>
                            @endif
                            <div class="col-lg-6 col-md-12">
                                <div class="team-img">
                                    <img data-aos="zoom-out" src="{{voyager::image(setting('site.person_1'))}}" class="img-fluid" alt="" />
                                    <img data-aos="zoom-out" src="{{voyager::image(setting('site.person_2'))}}" class="img-fluid" alt="" />
                                    <img data-aos="zoom-out" src="{{voyager::image(setting('site.person_3'))}}"  class="img-fluid" alt="" />
                                </div>
                                <div class="team-ditales">
                                    <h3 class="section-title">
                                        {{__('home.y_A_group')}}
                                    </h3>
                                    <h6 class="date-title">
                                        {{__('home.from_y')}}
                                    </h6>
                                    <p class="prag">
                                        {{__('home.K_O_Paper')}}
                                        <span style="display: block;"></span>
                                        {{__('home.F_M_paper')}}
                                    </p>
                                    <div class="buttom-link">
                                        <a href="{{route('ABOUT')}}">
                                            {{__('home.learn_more')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                                    @if ( Config::get('app.locale') == 'en')
                                        <div class="col-md-6"></div>
                                        @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- about-section -->

{{--            <!-- our-clints -->--}}
{{--            <div class="our-clints">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="section-content aos-init aos-animate" data-aos="fade-up">--}}
{{--                                <h3 class="section-title">--}}
{{--                                    Our Partners--}}
{{--                                </h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="clint-slider">--}}
{{--                                <div class="clint-slider-item">--}}
{{--                                    <img src="assets/img/1.png" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <div class="clint-slider-item">--}}
{{--                                    <img src="assets/img/2.png" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <div class="clint-slider-item">--}}
{{--                                    <img src="assets/img/3.png" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <div class="clint-slider-item">--}}
{{--                                    <img src="assets/img/4.png" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <div class="clint-slider-item">--}}
{{--                                    <img src="assets/img/5.png" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <div class="clint-slider-item">--}}
{{--                                    <img src="assets/img/6.png" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <div class="clint-slider-item">--}}
{{--                                    <img src="assets/img/7.png" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- our-clints -->--}}
            <!-- contactus-section -->
            <div class="contactus-section" style="background-image: url({{voyager::image(setting('site.c_us_background'))}});">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content aos-init aos-animate" style="margin:10px 0 20px ;" data-aos="fade-up">
                                <h3 class="section-title white-title">
                                    Interest Form
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" class="contactus-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name"  class="form-control input-style" placeholder="Name"  aria-describedby="helpId" />
                                        </div>
                                        <div class="form-group">
                                            <select name="inquiries" class="select-option" id="opInquiries">
                                                <option value="inquiries">Inquiries</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="txtEmail" name="email" id="email"  class="form-control input-style" placeholder="Your Email" aria-describedby="helpId" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone"class="form-control input-style" placeholder="Your Phone" aria-describedby="helpId" />
                                        </div>
                                        <div class="form-group">
                                                <textarea class="form-control input-style" id="txtMessage"  placeholder="Enter The Message Here..."></textarea>
                                        </div>
                                        <div class="buttom-link">
                                            <button type="submit" class="submit-button">{{__('home.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contactus-section -->
        </main>
    </div>
    <!--           end content-->
@endsection
