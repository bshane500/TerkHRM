<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  EventRepository.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 4:17 PM
     */

    namespace App\Repositories\Contracts;



    /**
     * Interface EventRepository
     * @package App\Repositories\Event
     */
    interface EventRepository extends RepositoryInterface
    {
        public function showForm();
    }