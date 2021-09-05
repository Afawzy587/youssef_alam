<!--       start header-->
<div class="header-container">
    <header class="wrapper">
        <!-- nav bar -->
        <div class="nav-bar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="logo-img frist-logo">
                            <a href="{{route('HOME')}}" class="logo-link"> <img src="{{voyager::image(setting('site.logo'))}}" alt=""  class="img-fluid" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-12 padi-0" style="text-align: end;">
                        <div class="sochile-box">
                            {{menu('social_media', 'social_media')}}
                            <div class="nav-boxSide">
                                <div class="lang-box">
                                    <a href="{{route('locale',['locale'=>'en'])}}"  @if ( Config::get('app.locale') == 'en') class="active" @endif>
                                        EN
                                    </a>
                                    <a href="{{route('locale',['locale'=>'ar'])}}" @if ( Config::get('app.locale') == 'ar') class="active" @endif>
                                        AR
                                    </a>
                                </div>
                                <a href="{{route('career')}}" class="career-link">
                                     {{__('home.careers')}}
                                </a>
                                <div class="open-search-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <div class="menu-icon">
                            <div class="logo-img scound-logo">
                                <a href="{{route('HOME')}}" class="logo-link"> <img src="{{voyager::image(setting('site.logo'))}}" alt=""  class="img-fluid" /></a>
                            </div>
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="nav-ul">
                            <div class="close-icon">
                                <i class="fas fa-times"></i>
                            </div>
                            {{menu('front', 'sidebar')}}
                            <div class="sochile-box">
                                {{menu('social_media', 'social_media')}}
                            </div>
                        </div>
                        <div class="search-box">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="search-form">
                                            <form class="d-flex justify-content-between align-items-center align-content-center h-100"  novalidate="">
                                                <input type="submit" value="" class="submit-buttom" />
                                                <input type="text" placeholder="{{__('home.search')}}" required="required" class="search-input" />
                                                <div class="closeSearch">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav bar -->
    </header>
</div>
<!--       end header-->
