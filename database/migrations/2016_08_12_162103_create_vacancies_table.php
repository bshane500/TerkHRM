<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vacancies', function(Blueprint $table) {
            $table->increments('id');
			$table->string('vacancy_name')->index();
			$table->integer('job_title_id')->unsigned();
			$table->text('description');
			$table->integer('no_of_positions');
			$table->integer('hiring_manager');
			$table->integer('status')->unsigned();
			$table->boolean('published');
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
		Schema::drop('vacancies');
	}

}
