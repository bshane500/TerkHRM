<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  DepartmentRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/20/2016
     * Time: 12:54 PM
     */

    namespace App\Repositories\Eloquent;
    use App\Models\Department;
    use App\Repositories\Contracts\DepartmentRepository;

    /**
     * Class DepartmentRepositoryEloquent
     * @package App\Services
     */
    class DepartmentRepositoryEloquent extends BaseRepository implements DepartmentRepository
    {

        
        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return Department::class;
        }
    }