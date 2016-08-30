<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  EmployeeRepository.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/23/2016
     * Time: 12:44 PM
     */

    namespace App\Repositories\Contracts;


    /**
     * Interface EmployeeRepository
     * @package App\Repositories\Employee
     */
    interface EmployeeRepository extends RepositoryInterface
    {
        /**
         * @param array $attribute
         * @param $roles
         *
         * @return mixed
         */
        public function createUserWithRoles(array $attribute, $roles);

        /**
         * @param $id
         * @param array $attribute
         *
         * @param $roles
         *
         * @return mixed
         */
        public function updateUserWithRoles($id,array $attribute,$roles);

	    /**
	     *
	     * @return mixed
	     */
	    public function showForm();


    }