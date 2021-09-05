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
                                 style="background-image: url({{voyager::image(setting('site.media_background'))}});">
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
                                        <h5 class="page-active">{{__('home.media')}}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->

            <!-- img-slider-section -->
            <div class="img-slider-section section-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                <h3 class="section-title">{{__('home.images')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="img-slider">
                                @foreach($sliders as $sId => $slider)
                                       <div class="img-slider-item">
                                    <div class="js-tilt aos-init aos-animate" data-tilt-axis="x y"
                                         data-aos="zoom-in">
                                        <div class="c-example__tilt-inner">
                                            <a data-fancybox="gallery{{$sId}}"  href="{{ Voyager::image($slider->main_image)}}">
                                                <h5 class="slider-title"> {{$slider->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h5>
                                                <img src="{{ Voyager::image($slider->main_image)}}" style="height: 405px;" alt="" class="img-fluid" />
                                                <p class="prag"> {{$slider->getTranslatedAttribute('content', Config::get('app.locale') , 'fallbackLocale')}}</p>
                                            </a>
                                            <div class="photo_galleryList" style="display: none;">
                                                @foreach (json_decode($slider->image) as $image)
                                                    {{$i =1}}
                                                    <a href="{{ Voyager::image($image)}}" data-fancybox="gallery{{$sId}}" data-caption="{{$i}}">
                                                        <img src="{{ Voyager::image($image)}}"style="display: none;" />
                                                    </a>
                                                    <img src="{{ Voyager::image($image)}}">
                                                    {{$i++}}
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- img-slider-section -->


            <!-- video-section -->
            <div class="video-section section-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                <h3 class="section-title white-title">
                                    {{__('home.videos')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-10">
                            <div class="video-slider slider-dutos-style">

                            @foreach($videos as $vId =>$video)
                                <div class="video-slider-item">
                                    <a data-fancybox="video1"  href="{{$video->link}}">
                                        <div class="video-box" style="background-image: url('{{voyager::image($video->image)}}');">
                                            <h5 class="video-title"> {{$video->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h5>
                                            <span>
                                                    {{__('home.play_video')}}
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- video-section -->


            <!-- awards-section -->

            <div class="awards-section section-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                <h3 class="section-title">
                                    {{__('home.awards')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="awards-slider slider-dutos-style">
                                @foreach($awards as $k =>$award)
                                    <div class="awards-slider-item">
                                        <div class="fastJs-tilt aos-init aos-animate" data-tilt-axis="x y" data-aos="zoom-in">
                                            <div class="c-example__tilt-inner">
                                                <div class="award-box" data-toggle="modal" data-discription=" Appreciation Award" data-target="#exampleModal{{$award->id}}">
                                                    <img src="{{voyager::image($award->image)}}" alt="" class="img-fluid" />
                                                    <h5 class="award-title">
                                                        {{$award->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        @foreach($awards as $k =>$award)
                            <!-- awards-section -->
                            <div class="modal fade" id="exampleModal{{$award->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{$award->getTranslatedAttribute('content', Config::get('app.locale') , 'fallbackLocale')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- awards-section -->


            <!-- event-slider-section -->
            <div class="event-slider-section section-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                <h3 class="section-title">
                                    {{__('home.events')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="event-slider slider-dutos-style">

                            @foreach($events as $aId =>$event)
                                <div class="event-slider-item">
                                    <div class="js-tilt aos-init aos-animate" data-tilt-axis="x y"
                                         data-aos="zoom-in">
                                        <div class="c-example__tilt-inner">
                                            <a data-fancybox="event{{$aId}}"  href="{{voyager::image($event->main_image)}}">
                                                <img src="{{voyager::image($event->main_image)}}" style="height: 405px;" alt="" class="img-fluid" />
                                                <p class="prag">  {{$event->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</p>
                                            </a>
                                            <div class="photo_galleryList" style="display: none;">
                                                @foreach (json_decode($event->images) as $image)
                                                    <a data-fancybox="event{{$aId}}" href="{{ Voyager::image($image)}}">  </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- img-slider-section -->



            <!-- news-section -->

            <div class="news-section section-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-content aos-init aos-animate" data-aos="fade-up">
                                <h3 class="section-title">
                                    {{__('home.news')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="news-slider slider-dutos-style">

                                @foreach($news as $nId =>$new)
                                   <div class="news-slider-item">
                                    <div class="fastJs-tilt aos-init aos-animate" data-tilt-axis="x y" data-aos="zoom-in">
                                        <div class="c-example__tilt-inner">
                                            @php

                                                $file = json_decode($new->link);
                                                if(is_array($file) && !empty($file)){
                                                     $path=$file[0]->download_link;
                                                     $path=voyager::image($path);
                                                }else{
                                                $path="";
                                                }
                                            @endphp
                                            @if($path !="")
                                                 <a href="{{$path}}"  class="news-link">
                                                @endif
                                                <h5 class="news-title"> {{$new->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}} </h5>
                                                <img src="{{voyager::image($new->image)}}" alt="" class="img-fluid" />
                                              @if($path !="")
                                                 </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </div>
    <!--           end content-->
@endsection
