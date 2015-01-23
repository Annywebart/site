<?php
Admin::model(\Pages::class)->title('Страницы')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('id', 'ID');
	Column::string('menu_title', 'Заголовок меню');
	Column::string('title', 'Заголовок');
	Column::string('is_published', 'Статус публикации');
	Column::date('created_at', 'Дата создания')->format('medium', 'short');
	Column::date('updated_at', 'Дата обновления')->format('medium', 'short');
	Column::date('published_at', 'Дата публикации')->format('medium', 'short');
})->form(function ()
{
//	FormItem::select('parent_id', 'Родитель')->enum(Pages::whereIsContainer(1)->lists('menu_title', 'id'));
	FormItem::text('parent_id', 'Родитель');
	FormItem::checkbox('is_published', 'Опубликовано');
	FormItem::checkbox('is_container', 'Может быть родителем');
	//FormItem::text('position', 'Позиция в меню');
	FormItem::text('alias', 'Алиас');
	FormItem::text('menu_title', 'Заголовок меню');
	FormItem::text('title', 'Заголовок');
	FormItem::timestamp('published_at', 'Дата публикации');//->seconds(true);
	FormItem::textarea('meta_title', 'Мета-тег Title')->attributes(['rows' => 4]);
	FormItem::textarea('meta_desc', 'Мета-тег Description')->attributes(['rows' => 4]);
	FormItem::textarea('meta_key', 'Мета-тег Keywords')->attributes(['rows' => 4]);
	FormItem::ckeditor('introtext', 'Краткое описание');
	FormItem::ckeditor('content', 'Контент');
});