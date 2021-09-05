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
                                            {{$category->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-ul-section -->
            <!-- back-button -->
            <div class="back-button-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="button-box">
                                <a href="{{ url()->previous() }}" class="back-buttom">
                                    <i class="fas fa-long-arrow-alt-left px-2"></i>
                                    {{__('home.go_back')}}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- back-button -->
            <!-- product-section -->
            <div class="product-section">
                <div class="container">
                    <div class="row">
                        @foreach($category->subcategories as $cid =>$cat)
                        <div class="col-lg-6 col-md-6">
                            <div class="prodact-box">
                                <div class="js-tilt" data-tilt-axis="x y">
                                    <div class="c-example__tilt-inner">
                                        <div class="img-box"><img src="{{voyager::image($cat->image)}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="title-box">
                                    <h3 class="project-title" data-projet="project-{{$cat->id}}">
                                        {{$cat->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                    </h3>
                                    <div class="productInner_Items " id="project-{{$cat->id}}">
                                        @foreach($cat->sub_categories as $sId =>$sub)
                                            <a href="{{route('sub2_products',['id' => $sub->id])}}" class="menu-item "> {{$sub->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}</a>
                                        @endforeach
                                        @foreach($cat->products as $sId =>$product)
                                                <a href="#" class="menu-item " data-toggle="modal"  data-target="#project{{$product->id}}">{{$product->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</a>



                                            @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                            @foreach($cat->products as $sId =>$product)
                            <!-- Modal -->
                                <div class="modal fade custom-modle" id="project{{$product->id}}" tabindex="-1" aria-labelledby="project1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"> {{$product->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="img-box">
                                                    <img src="{{voyager::image($product->image)}}" alt="" class="img-fluid">
                                                </div>
                                                <div class="section-content " data-aos="fade-up">
                                                    @if($product->overview)
                                                        <h3 class="section-title">
                                                            {{__('home.overview')}}
                                                        </h3>
                                                        <p class="prag">
                                                            {!! $product->getTranslatedAttribute('overview', Config::get('app.locale') , 'fallbackLocale') !!}
                                                        </p>
                                                    @endif
                                                    @if($product->pdf !='[]')
                                                        <h3 class="section-title downlode-title">
                                                            {{__('home.download_pdf')}}
                                                        </h3>
                                                        @php
                                                             $file = json_decode($product->pdf);
                                                        @endphp
                                                        <a href="{{voyager::image($file[0]->download_link)}}" class="downlode-link" download>
                                                            {{$product->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- product-section -->
        </main>
    </div>
    <!--           end content-->
@endsection
