<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;

    /**
     * Class Event
     * @package App\models
     */
    class Event extends Model
    {
	    /**
         * @var array
         */
        protected $fillable = [
            'title',
            'description',
            'venue',
            'start_date_time',
            'end_date_time'
        ];

        protected $dates = ['start_date_time','end_date_time'];

	    /**
         * @param $date
         */
        public function setStartDateTimeAttribute($date)
        {
            $this->attributes['start_date_time'] = Carbon::parse($date);
        }

	    /**
         * @param $date
         */
        public function setEndDateTimeAttribute($date)
        {
            $this->attributes['end_date_time'] = Carbon::parse($date);
        }

	    /**
         * @param $date
         *
         * @return Carbon
         */
        public function getStartDateTimeAttribute($date)
        {
            return new Carbon($date);
        }

	    /**
         * @param $date
         *
         * @return Carbon
         */
        public function getEndDateTimeAttribute($date)
        {
            return new Carbon($date);
        }
    }
