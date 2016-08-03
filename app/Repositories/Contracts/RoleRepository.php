<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  RoleRepository.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/22/2016
     * Time: 11:40 AM
     */

    namespace App\Repositories\Contracts;


    use Prettus\Repository\Contracts\RepositoryInterface;

    /**
     * Interface RoleRepository
     * @package app\Repositories\Role
     */
    interface RoleRepository extends RepositoryInterface
    {
        /**
         * @param $role
         * @param array $permissions
         *
         * @return mixed
         *
         */
        public function attachPermissionsToRole($role, $permissions);
    }