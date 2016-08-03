<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  EventRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 4:18 PM
     */

    namespace App\Repositories\Eloquent;


    use App\Models\Event;
    use App\Repositories\Contracts\EventRepository;
    use Prettus\Repository\Eloquent\BaseRepository;

    /**
     * Class EventRepositoryEloquent
     * @package App\Repositories\Event
     */
    class EventRepositoryEloquent extends BaseRepository implements EventRepository
    {
        

        public function showForm()
        {
            $event = new Event();
            return view('event.form',compact('event'));
        }

        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return Event::class;
        }
    }