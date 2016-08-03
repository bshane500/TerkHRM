<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  JobTitleRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 3:51 PM
     */

    namespace App\Repositories\Eloquent;


    use App\Models\JobTitle;
    use App\Repositories\Contracts\JobTitleRepository;
    use Prettus\Repository\Eloquent\BaseRepository;

    /**
     * Class JobTitleRepositoryEloquent
     * @package App\Repositories\JobTitle
     */
    class JobTitleRepositoryEloquent extends BaseRepository implements JobTitleRepository
    {
       

        public function showForm()
        {
            $job_title = new JobTitle();
            return view('job_title.form',compact('job_title'));
        }

        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return JobTitle::class;
        }
    }