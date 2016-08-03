<?php
	/**
	 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
	 * Package: TerkHRM
	 *  Author : Owen Jubilant
	 *  LeaveRepositoryEloquent.php
	 *
	 */

	/**
	 * Created by PhpStorm.
	 * User: Owen
	 * Date: 6/20/2016
	 * Time: 5:47 PM
	 */

	namespace App\Repositories\Eloquent;


	use App\Models\Leave;
	use App\Repositories\Contracts\LeaveRepository;
	use Prettus\Repository\Eloquent\BaseRepository;


	/**
	 * Class LeaveRepositoryEloquent
	 * @package app\Repositories\Leave
	 */
	class LeaveRepositoryEloquent extends BaseRepository implements LeaveRepository
	{
		/**
		 * Save a new entity in repository
		 *
		 * @throws
		 *
		 * @param array $attributes
		 *
		 * @return mixed
		 */
		public function create(array $attributes)
		{
			/*$test = $this->model->getTotalDaysAttribute() + Input::get('total_days_requested');
			dd($test);*/
				$q = $this->model->getTotalDaysAttribute();
				return $this->model->create(['employee_id'=>auth()->user()->id]+
					['status'=>Config('constant.pending')]+$attributes);
		}


		/**
		 * @param $id
		 *
		 * @return mixed
		 */
		public function getAllLeavesByUser($id)
		{
			return $this->all()->where('employee_id', $id);
		}

		public function qes()
		{
			return $this->model->getTotalDaysAttribute();
		}

		/**
		 * Specify Model class name
		 *
		 * @return string
		 */
		public function model()
		{
			return Leave::class;
		}
	}