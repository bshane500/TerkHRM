<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Candidate extends Model implements Transformable
{
    use TransformableTrait;

	protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'contact_no',
		'notes',
		'application_status',
		'vacancy_id',
		'resume'

	];
}
