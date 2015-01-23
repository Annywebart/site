<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function ($table) {
			$table->increments('id');
			$table->string('ip', 20)->nullable();
			$table->string('name', 100);
			$table->string('email', 100);
			$table->string('phone', 50)->nullable();
			$table->text('message');
			$table->timestamps();
			$table->timestamp('read_at');
		});
	}
	public function down()
	{
		Schema::drop('contacts');
	}

}
