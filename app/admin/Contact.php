<?php
Admin::model(\Contact::class)->title('Почта')->with()->filters(function ()
{
})->columns(function ()
{
    Column::string('ip', 'Ip');
    Column::string('name', 'Имя');
    Column::string('email', 'Email');
    Column::string('phone', 'Телефон');
    Column::date('created_at', 'Дата создания')->format('medium', 'short');
// Column::date('updated_at', 'Дата обновления')->format('medium', 'short');
    Column::date('read_at', 'Дата прочтения')->format('medium', 'short');
})->form(function ()
{
    FormItem::text('name', 'Имя');
    FormItem::text('email', 'Email');
    FormItem::text('phone', 'Телефон');
    FormItem::ckeditor('message', 'Текст письма');
});

