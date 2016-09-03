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
        'email',
        'phone_number',
        'note',
        'application_status',
        'vacancy_id',
    ];

    public function vacancy()
    {
        return $this->hasOne(Vacancy::class,'id','vacancy_id');
    }
}
