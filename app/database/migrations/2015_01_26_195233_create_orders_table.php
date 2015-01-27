<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function ($table) {
			$table->increments('id');
			$table->string('ip', 20)->nullable();
			$table->string('name', 100);
			$table->string('email', 100);
			$table->string('phone', 50)->nullable();
			$table->integer('site_type');
			$table->text('message');
			$table->integer('status')->default(0);
			$table->timestamps();
			$table->timestamp('read_at');
		});
	}
	public function down()
	{
		Schema::drop('orders');
	}

}
