<ul class="list-unstyled sochile-ul">
    @foreach($items as $menu_item)
        <li>
            <a href="{{ $menu_item->link()}}" target="_blank" class="{{ $menu_item->title}}">
                <i class="{{ $menu_item->icon_class}}"></i>
            </a>
        </li>
    @endforeach
</ul>
