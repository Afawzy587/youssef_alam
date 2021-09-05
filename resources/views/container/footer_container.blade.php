<!--           start footer-->
<div class="footer-container">
    <footer class="wrapper">
        <!-- footer-section -->
        <div class="footer-section">
            <div class="container">
                <div class="row" style="justify-content: space-between;">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="footer-title">
                            {{__('home.about_us')}}
                        </h3>
                        <p class="prag">
                            @if ( Config::get('app.locale') == 'en')
                                {{setting('site.about_us')}}
                            @elseif ( Config::get('app.locale') == 'ar' )
                                {{setting('site.about_us_ar')}}
                            @endif
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="footer-title">
                            {{__('home.main_menu')}}
                        </h3>
                        {{menu('front', 'sidebar')}}
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="footer-title">
                            {{__('home.join_us')}}
                        </h3>
                        <div class="buttom-link">
                                    <span>
                                    {{__('home.subscribe')}}
                                    </span>
                            <div class="footer-form-box">
                                <form action="">
                                    <button type="submit"> {{__('home.send')}}</button>
                                    <input type="search" name="footer-search" id="footer-search" placeholder="{{__('home.mail')}}" />
                                    <i class="fas fa-times"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-section -->
        <!-- sochile-footer -->
        <div class="sochile-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="socialIcon">
                            {{menu('social_media', 'social_footer')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sochile-footer -->
    </footer>
</div>
<!--           end footer-->
