<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;

    /**
     * Class News
     * @package App\models
     */
    class News extends Model
    {
	    protected $fillable = ['title','body','user_id','published_at'];
        protected $dates = ['published_at'];

	    /**
         * Set the published at Field
         * @param $date
         */
        public function setPublishedAtAttribute($date)
        {
            $this->attributes['published_at'] = Carbon::parse($date);
        }

	    /**
         * Get the PublishedAt field
         * @param $date
         *
         * @return Carbon
         */
        public function getPublishedAtAttribute($date)
        {
            return new Carbon($date);
        }
    }
