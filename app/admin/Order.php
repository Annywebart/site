<?php

Admin::model(\Order::class)->title('Заказы сайтов')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Имя');
	Column::string('email', 'Email');
	Column::string('phone', 'Телефон');
	Column::string('site_type', 'Тип сайта');
	Column::string('status', 'Статус');
	Column::date('created_at', 'Дата создания')->format('medium', 'short');
// Column::date('updated_at', 'Дата обновления')->format('medium', 'short');
	Column::date('read_at', 'Дата прочтения')->format('medium', 'short');
})->form(function ()
{
	FormItem::text('name', 'Имя');
	FormItem::text('email', 'Email');
	FormItem::text('phone', 'Телефон');
	FormItem::text('site_type', 'Тип сайта');
	FormItem::text('status', 'Статус');
	FormItem::ckeditor('message', 'Комментарий');
});