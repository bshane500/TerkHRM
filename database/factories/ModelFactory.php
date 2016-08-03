<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
	    'branch_id' => '1',
	    'department_id' => '2',
	    'date_of_birth' => $faker->date('Y-m-d'),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

