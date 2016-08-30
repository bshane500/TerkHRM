<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  RoleRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/22/2016
     * Time: 11:41 AM
     */

    namespace App\Repositories\Eloquent;


    use App\models\Role;
    use App\Repositories\Contracts\RoleRepository;

    /**
     * Class RoleRepositoryEloquent
     * @package app\Repositories\Role
     */
    class RoleRepositoryEloquent extends BaseRepository implements RoleRepository
    {
       

        /**
         * @param $role
         * @param array $permissions
         *
         * @return mixed
         */
        public function attachPermissionsToRole($role, $permissions)
        {
            $this->find($role)->perms()->sync($permissions);
            return true;
        }

        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return Role::class;
        }
    }