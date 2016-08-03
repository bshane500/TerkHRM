<?php
	/**
	 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
	 * Package: TerkHRM
	 *  Author : Owen Jubilant
	 *  EmergencyContact.php
	 *
	 */

	namespace App\Models;

	use App\User;
	use Illuminate\Database\Eloquent\Model;

	class EmergencyContact extends Model
	{
		protected $fillable = ['e_name','e_relationship','e_phone_number', 'user_id'];
		//protected $casts = ['emergency_contact' => 'array'];

		public function users()
		{
			return $this->belongsTo(User::class,'user_id');
		}

	}
