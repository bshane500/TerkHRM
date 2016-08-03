<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  JobTitleRepository.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 3:49 PM
     */

    namespace App\Repositories\Contracts;


    use Prettus\Repository\Contracts\RepositoryInterface;

    /**
     * Interface JobTitleRepository
     * @package App\Repositories\JobTitle
     */
    interface JobTitleRepository extends RepositoryInterface
    {
        public function showForm();

    }