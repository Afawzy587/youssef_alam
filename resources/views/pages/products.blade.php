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
                                 style="background-image: url({{voyager::image(setting('site.product_image'))}});">
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
                                        <h5 class="page-active">
                                            {{__('home.products')}}
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->
            <!-- product-section -->
            <div class="product-section">
                <div class="container">
                    <div class="row">
                        @foreach($categories as $cid =>$category)
                        <div class="col-lg-6 col-md-6">
                            <div class="prodact-box">
                                <div class="js-tilt" data-tilt-axis="x y">
                                    <div class="c-example__tilt-inner">
                                        <div class="img-box"><img src="{{voyager::image($category->image)}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="title-box">
                                    <h3 class="project-title" data-projet="project-{{$category->id}}">
                                        {{$category->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                    </h3>
                                    <div class="productInner_Items " id="project-{{$category->id}}">
                                        @foreach($category->sub_categoris as $sId =>$sub)
                                            <a href="{{route('sub_products',['id' => $sub->id])}}" class="menu-item "> {{$sub->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- product-section -->
        </main>
    </div>
    <!--           end content-->
@endsection
