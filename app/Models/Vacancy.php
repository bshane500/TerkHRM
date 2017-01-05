<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Vacancy extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'vacancy_name',
	    'job_title_id',
        'minimum_qualification',
	    'no_of_positions',
	    'description',
	    'status',
	    'published'
    ];

	/**
	 * Each Job Title has a job title listed
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function job_title()
	{
		return $this->hasOne(JobTitle::class,'id','job_title_id');
	}

}
