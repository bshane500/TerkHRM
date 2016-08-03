<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;

	class LeaveType extends Model
	{
		protected $fillable = ['name', 'description'];

		/**
		 * A Leave Category has many Leave Requests
		 * @return \Illuminate\Database\Eloquent\Relations\HasMany
		 */
		public function leaveRequest()
		{
			return $this->hasMany(Leave::class);
		}
	}
