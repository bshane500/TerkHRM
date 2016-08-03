<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;

	class JobTitle extends Model
	{
		public $fillable = [
			'job_title',
			'job_description',
			'job_specification'
		];
	}
