<?php

class MenuWidget {

    public function mainMenu()
    {
        $pages = Pages::whereParentId(0)
            ->where('published_at', '<', date('Y-m-d H:i:s'))
            ->where('is_published', 1)
            ->with('children')
            ->get(['id', 'published_at', 'is_published', 'alias', 'menu_title']);

        return (string) View::make('widgets.menu.top', compact('pages'))->render();
    }

    public function subMenu()
    {
        $pages = Pages::where('parent_id', '!=', 0)
            ->where('published_at', '<', date('Y-m-d H:i:s'))
            ->where('is_published', 1)
            ->get(['id', 'published_at', 'is_published', 'alias', 'menu_title']);

        return (string) View::make('widgets.menu.submenu', compact('pages'))->render();
    }

    public function bottomMenu()
    {
        $pages = Pages::where('published_at', '<', date('Y-m-d H:i:s'))
            ->where('is_published', 1)
            ->with('parent')
            ->get(['id', 'published_at', 'parent_id', 'is_published', 'alias', 'menu_title']);

        return (string) View::make('widgets.menu.bottom', compact('pages'))->render();
    }


}