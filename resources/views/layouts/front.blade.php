<!DOCTYPE html>
@if ( Config::get('app.locale') == 'en')
    <html lang="en" dir="ltr">
 @elseif ( Config::get('app.locale') == 'ar' )
     <html lang="ar" dir="rtl">
 @endif

@include('container.head')
<body>
<div id="page" class="hfeed site">
    @include('container.header_container')
         @yield('content')
    @include('container.footer_container')
    <div class="chat-head">
        <i class="fas fa-phone-alt"></i>
    </div>
</div>
</body>
@include('container.foot')
 @yield('footer')
</html>
