<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name','branch_code','region'];

    /**
     * Branch has many Users
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
