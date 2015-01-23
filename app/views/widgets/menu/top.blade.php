<ul class="nav">
    @foreach($pages as $page)
        <li class="{{ !count($page->children) ? '' : 'parent'}}{{ (URL::current() != URL::to($page->alias)) ? '' : ' active'}}">
            <a href="{{ URL::to($page->alias) }}">{{ $page->menu_title }}</a>
            @if(count($page->children))
                <ul class="sub">
                    @foreach($page->children as $child)
                        <li>
                            <a href="{{ URL::to($page->alias . '/' . $child->alias) }}">
                                {{ $child->menu_title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
    <li class="color">
        <a href="#">Заказать сайт</a>
    </li>
</ul>