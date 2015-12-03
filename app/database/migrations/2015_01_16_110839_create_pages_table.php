<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function ($table) {
			$table->increments('id');
			$table->integer('parent_id')->default(0);
			$table->boolean('is_published')->default(0);
			$table->tinyInteger('position')->default(0);
			$table->string('alias', 100);
			$table->string('menu_title', 100);
			$table->string('title', 200);
			$table->boolean('is_container')->default(0);
			$table->string('introtext', 1000)->nullable();
			$table->text('content');
			$table->timestamps();
			$table->timestamp('published_at');
			$table->string('meta_title', 500);
			$table->string('meta_desc', 500);
			$table->string('meta_key', 1000);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pages');
	}

}
