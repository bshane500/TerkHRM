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

	    /**
	     * Get Total Leave Days Requested
	     * By a User
	     * @return mixed
	     */
	    public function totalLeaveDaysByUser();

	    /**
	     * Send Email Corresponding to status of Request
	     * @param $id
	     * @param $view
	     * @return mixed
	     */

    }