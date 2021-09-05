<ul class="list-unstyled">
    @foreach($items as $menu_item)
    <li>
        <a href="{{ route($menu_item->route) }}"   @if( Request::path() === $menu_item->title) class="active" @elseif( Request::path() === 'ABOUT' && $menu_item->title === 'ABOUT US') class="active" @elseif( Request::path() === 'PRINT_MEDIA_ACADEMY' && $menu_item->title === 'PRINT MEDIA ACADEMY') class="active" @elseif( Request::path() === 'GET_IN_TOUCH' && $menu_item->title === 'GET IN TOUCH') class="active" @endif>
            @if ( Config::get('app.locale') == 'en')
                {{ $menu_item->getTranslatedAttribute('title', 'en', 'ar') }}
            @elseif ( Config::get('app.locale') == 'ar' )
                {{ $menu_item->getTranslatedAttribute('title', 'ar', 'en') }}
            @endif
        </a>
    </li>
    @endforeach
</ul>
