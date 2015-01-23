<ul class="nav">
    @foreach($pages as $page)
        <li>
            <a href="{{ URL::to($page->alias . '/' . $page->alias) }}">
                {{ $page->menu_title }}
            </a>
        </li>
    @endforeach
</ul>