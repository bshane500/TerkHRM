<?php

	use App\User;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);


	    Model::unguard();
	    //User::truncate();

		factory(User::class,500)->create();

	    Model::reguard();
    }
}
