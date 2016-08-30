<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidates', function(Blueprint $table) {
            $table->increments('id');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('phone_number');
			$table->text('note');
			$table->integer('vacancy_id')->unsigned()->nullable();
			$table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('set null');
			$table->string('application_status');
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
		Schema::drop('candidates');
	}

}
