<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  PermissionRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/22/2016
     * Time: 11:45 AM
     */

    namespace App\Repositories\Eloquent;


    use App\Models\Permission;
    use App\Repositories\Contracts\PermissionRepository;
    use Prettus\Repository\Eloquent\BaseRepository;

    /**
     * Class PermissionRepositoryEloquent
     * @package app\Repositories\Permission
     */
    class PermissionRepositoryEloquent extends BaseRepository implements PermissionRepository
    {
        
        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return Permission::class;
        }
    }