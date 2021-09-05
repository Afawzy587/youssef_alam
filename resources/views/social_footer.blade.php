
    @foreach($items as $menu_item)
            <a href="{{ $menu_item->link()}}" target="_blank" class="{{ $menu_item->title}}">
                <i class="{{ $menu_item->icon_class}}"></i>
            </a>
            <div class="scrol-box">
                <i class="fas fa-angle-up"></i>
            </div>
    @endforeach

