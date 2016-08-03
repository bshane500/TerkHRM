<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  LeaveTypeRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/20/2016
     * Time: 7:41 PM
     */

    namespace App\Repositories\Eloquent;


    use App\models\LeaveType;
    use App\Repositories\Contracts\LeaveTypeRepository;
    use Prettus\Repository\Eloquent\BaseRepository;


    /**
     * Class LeaveTypeRepositoryEloquent
     * @package App\Repositories\LeaveType
     */
    class LeaveTypeRepositoryEloquent extends BaseRepository implements LeaveTypeRepository
    {


        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return LeaveType::class;
        }
    }