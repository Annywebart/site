<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillPagesTable extends Migration {

	public function up()
	{
		DB::table('pages')->insert([
			[
				'id' => '1',
				'parent_id' => '0',
				'is_published' => '1',
				'position' => '1',
				'alias' => '/',
				'menu_title' => 'Main',
				'title' => 'Main',
				'is_container' => '0',
				'introtext' => '',
				'content' => '',
				'published_at' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
			],
			[
				'id' => '2',
				'parent_id' => '0',
				'is_published' => '1',
				'position' => '2',
				'alias' => 'o-nas',
				'menu_title' => 'About',
				'title' => 'About',
				'is_container' => '0',
				'introtext' => '',
				'content' => '',
				'published_at' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
			],
			[
				'id' => '3',
				'parent_id' => '0',
				'is_published' => '1',
				'position' => '3',
				'alias' => 'uslugi',
				'menu_title' => 'Services',
				'title' => 'Services',
				'is_container' => '0',
				'introtext' => '',
				'content' => '',
				'published_at' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
			],
			[
				'id' => '4',
				'parent_id' => '0',
				'is_published' => '1',
				'position' => '4',
				'alias' => 'tseny',
				'menu_title' => 'Prices',
				'title' => 'Prices',
				'is_container' => '0',
				'introtext' => '',
				'content' => '',
				'published_at' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
			],
			[
				'id' => '5',
				'parent_id' => '0',
				'is_published' => '1',
				'position' => '5',
				'alias' => 'primery-rabot',
				'menu_title' => 'Portfolio',
				'title' => 'Portfolio',
				'is_container' => '0',
				'introtext' => '',
				'content' => '',
				'published_at' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
			],
			[
				'id' => '6',
				'parent_id' => '0',
				'is_published' => '1',
				'position' => '6',
				'alias' => 'kontakty',
				'menu_title' => 'Contact',
				'title' => 'Contact',
				'is_container' => '0',
				'introtext' => '',
				'content' => '',
				'published_at' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
			],
			[
				'id' => '7',
				'parent_id' => '0',
				'is_published' => '1',
				'position' => '7',
				'alias' => 'karta-sajta',
				'menu_title' => 'Sitemap',
				'title' => 'Sitemap',
				'is_container' => '0',
				'introtext' => '',
				'content' => '',
				'published_at' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
			],
		]);
	}

	public function down()
	{
		DB::table('pages')->whereIn('id', range(1, 7))->delete();
	}

}
