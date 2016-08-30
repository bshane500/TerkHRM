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
	 * User: OJ
	 * Date: 8/12/2016
	 * Time: 8:44 PM
	 */

	namespace App\Repositories\Eloquent;


	use App\Repositories\Contracts\RepositoryInterface;

	abstract class BaseRepository extends \Prettus\Repository\Eloquent\BaseRepository implements
		RepositoryInterface
	{
		/**
		 * Show Form with Model Binding
		 * @return mixed
		 */
		public function showForm()
		{
			return new $this->model();
		}
	}