<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  BranchRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/20/2016
     * Time: 4:57 PM
     */

    namespace App\Repositories\Eloquent;


    use App\Models\Branch;
    use App\Repositories\Contracts\BranchRepository;

    /**
     * Class BranchRepositoryEloquent
     * @package App\Repositories\Branch
     */
    class BranchRepositoryEloquent extends BaseRepository implements BranchRepository
    
    {
        
        

        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return Branch::class;
        }

    }