<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('other_name')->nullabe();
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('branch_id')->unsigned();
            $table->date('date_of_birth');
            $table->integer('department_id')->unsigned()->nullabe();
            $table->integer('job_title_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('branch_id')->references('id')->on('branches')
                ->onUpdate('cascade')->onDelete('set null');
            $table->foreign('department_id')->references('id')->on('departments')
                ->onUpdate('cascade')->onDelete('set null');
            $table->foreign('job_title_id')->references('id')->on('job_titles')
                ->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
