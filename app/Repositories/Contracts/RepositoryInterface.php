<?php
/**
 *
 * |--------------------------------------------------------------------------
 * | Package: TerkHRM
 * |Description: Human Resource Management System
 * |Author:  Owen Jubilant  [TerkTrendz Inc, http://terktrendz.com]
 * |Copyright (c)  2016
 * |--------------------------------------------------------------------------
 * /
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/19/2016
     * Time: 8:12 PM
     */

    namespace App\Repositories\Contracts;


    /**
     * Interface RepositoryInterface
     * @package App\Repositories
     */
    interface RepositoryInterface extends \Prettus\Repository\Contracts\RepositoryInterface
    {
	    public function  showForm();


        /**
         * Send Email users,candidates etc
         * @param $id
         * @param $view
         * @return mixed
         */
        public function sendMail($id, $view);

    }