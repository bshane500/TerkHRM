<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['name','test_name'];

    /*protected $casts = [
        'name' => 'array',
        'test_name' => 'array'
    ];*/

    public function setNameAttribute($value)
    {
        $this->attributes['name']=json_encode($value);
    }

    public function getNameAttribute(){
        return json_decode($this->attributes['name']);
    }

    public function setTestNameAttribute($value)
    {
        $this->attributes['test_name']=json_encode($value);
    }

    public function getTestNameAttribute(){
        return json_decode($this->attributes['test_name']);
    }
}
