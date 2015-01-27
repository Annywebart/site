<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SiteController@index');
Route::get('tseny', 'SiteController@prices');
Route::get('primery-rabot', 'SiteController@portfolio');
Route::get('karta-sajta', 'SiteController@sitemap');
Route::get('sitemap.xml', 'SiteController@sitemapXml');

Route::get('kontakty', 'SiteController@contact');
Route::post('contact_request','SiteController@contactPost');

Route::post('order_request','OrderSiteWidget@orderPost');

Route::get('{alias}', 'SiteController@page');
Route::get('{parentAlias}/{alias}', 'SiteController@subPage');