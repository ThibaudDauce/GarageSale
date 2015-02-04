<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarageSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('garage-sales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');

			$table->datetime('registrations_begin');
			$table->datetime('registrations_end');
			$table->datetime('event_begin');
			$table->datetime('event_end');

			$table->boolean('zones');

			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('garage-sales');
	}

}
