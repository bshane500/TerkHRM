<?php
	/**
	 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
	 * Package: TerkHRM
	 *  Author : Owen Jubilant
	 *  LeaveRepositoryEloquent.php

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
	use Illuminate\Support\Facades\Mail;



	/**
	 * Class LeaveRepositoryEloquent
	 * @package app\Repositories\Leave
	 */
	class LeaveRepositoryEloquent extends BaseRepository implements LeaveRepository
	{

		/**
		 * Get Total Leave Days Requested
		 * By a User
		 * @return mixed
		 */
		public function totalLeaveDaysByUser()
		{
			return $this->model->getTotalDays();

		}

		/**
		 * Specify Model class name
		 * @return string
		 */
		public function model()
		{
			return Leave::class;
		}

		/**
		 * Send Email Corresponding to status of Request
		 * @param $id
		 * @param $view
		 * @return mixed
		 */
		public function sendMail($id, $view)
		{
			$user = $this->find($id);
			Mail::send('emails.' . $view, ['user' => $user], function ($m) use ($user) {
				$m->from('hello@app.com', 'TerkHRM');
				# Sending Mail
				$m->to($user->employees->email, $user->employees->first_name)->subject('Your Reminder!');
			});
			return true;
		}


		/**
		 * Save a new entity in repository
		 * @throws
		 * @param array $attributes
		 * @return mixed
		 */

		public function create(array $attributes)
		{
			//$this->model->getTotalDaysAttribute();
			return $this->model->create(['employee_id' => auth()->user()->id] +
				['status' => Config('constant.pending')] + $attributes);
		}


		/**
		 * @param $id
		 * @return mixed
		 */
		public function getAllLeavesByUser($id)
		{
			return $this->all()->where('employee_id', $id);
		}


	}