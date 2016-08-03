<?php

	namespace App\Models;

	use App\User;
	use Illuminate\Database\Eloquent\Model;


	class BankDetail extends Model
	{

		//protected $with=['users'];
		protected $fillable = [
			'user_id',
			'account_name',
			'account_number',
			'bank_name',
			'branch',
			'country',
			'swift_code'
		];

		/**
		 * Bank Account Belongs to A User
		 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
		 */
		public function users()
		{
			return $this->belongsTo(User::class, 'id');
		}

	}
