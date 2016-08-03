<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Class PayGrade
     * @package App\models
     */
    class PayGrade extends Model
    {
        public $fillable = ['title','currency','minimum_amount','maximum_amount'];
    }
