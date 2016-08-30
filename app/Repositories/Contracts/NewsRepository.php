<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  NewsRepository.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 4:30 PM
     */

    namespace App\Repositories\Contracts;


    /**
     * Interface NewsRepository
     * @package App\Repositories\News
     */
    interface NewsRepository extends RepositoryInterface
    {
        public function showForm();

    }