<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  LeaveRepository.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/20/2016
     * Time: 5:45 PM
     */

    namespace App\Repositories\Contracts;


    use Prettus\Repository\Contracts\RepositoryInterface;

    /**
     * Interface LeaveRepository
     * @package app\Repositories\Leave
     */
    interface LeaveRepository extends RepositoryInterface
    {
        /**
         * @param $id
         *
         * @return mixed
         */
        public function getAllLeavesByUser($id);
        public function qes();

    }