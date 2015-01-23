<div class="span3 nav-box">
    <h3>О нас</h3>
    <nav>
        <ul>
            @foreach($pages as $page)
                @if(0 == $page->parent_id)
                <li>
                    <a href="{{ URL::to($page->alias) }}">
                        {{ $page->menu_title }}
                    </a>
                </li>
                @endif
            @endforeach
        </ul>
    </nav>
</div>
<div class="span3 nav-box">
    <h3>Мы творим</h3>
    <nav>
        <ul class="nav">
            @foreach($pages as $page)
                @if(0 != $page->parent_id)
                <li>
                    <a href="{{ URL::to($page->parent->alias . '/' . $page->alias) }}">
                        {{ $page->menu_title }}
                    </a>
                </li>
                @endif
            @endforeach
        </ul>
    </nav>
</div>