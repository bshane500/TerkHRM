<?php

	namespace App\Models;

	use App\User;
	use Zizaco\Entrust\EntrustRole;

	/**
	 * Class Role
	 * @package App\models
	 */
	class Role extends EntrustRole
	{
		protected $with = ['perms'];
		protected $fillable = ['name', 'display_name', 'description'];

		public function users()
		{
			return $this->belongsToMany(User::class);
		}

	}

