<?php
/*
 *
 * |--------------------------------------------------------------------------
 * | Package: TerkHRM
 * |Description: Human Resource Management System
 * |Author:  Owen Jubilant  [TerkTrendz Inc, http://terktrendz.com]
 * |Copyright (c)  2016
 * |--------------------------------------------------------------------------
 *
 */


	/**
	 * Created by PhpStorm.
	 * User: OJ
	 * Date: 8/12/2016
	 * Time: 8:44 PM
	 */

	namespace App\Repositories\Eloquent;


	use App\Repositories\Contracts\RepositoryInterface;
    use Illuminate\Support\Facades\Mail;

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

        public function sendMail($id,$view)
        {
            $user = $this->find($id);
            Mail::send('emails.' . $view, ['user' => $user], function ($m) use ($user) {
                $m->from('hello@app.com', 'TerkHRM');
                # Sending Mail
                $m->to($user->employees->email, $user->employees->first_name)->subject('Your Reminder!');
            });
            return true;
		}

	}