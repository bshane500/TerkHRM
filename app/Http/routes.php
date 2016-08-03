<?php

	/*
	|--------------------------------------------------------------------------
	| Routes File
	|--------------------------------------------------------------------------
	|
	| Here is where you will register all of the routes in an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the controller to call when that URI is requested.
	|
	*/


	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| This route group applies the "web" middleware group to every route
	| it contains. The "web" middleware group is defined in your HTTP
	| kernel and includes session state, CSRF protection, and more.
	|
	*/

	/*
	|--------------------------------------------------------------------------
	| Landing Page
	|--------------------------------------------------------------------------
	*/

	Route::group(['middleware' => ['web']], function () {
		Route::get('/', function () {
			return redirect()->guest('login');
		});
		Route::auth();

		/*
		|--------------------------------------------------------------------------
		| Authenticated Routes
		|--------------------------------------------------------------------------
		*/

		Route::group(['middleware' => 'auth'], function () {

			Route::get('dashboard', 'HomeController@index');


			/*
			|--------------------------------------------------------------------------
			| Departments
			|--------------------------------------------------------------------------
			*/
			Route::resource('departments', 'DepartmentController');


			/*
			|--------------------------------------------------------------------------
			| Employees
			|--------------------------------------------------------------------------
			*/
			Route::post('employees/bank-detail', 'UserController@bankDetail');
			Route::post('employees/dependents', 'UserController@dependents');
			Route::post('employees/emergency-contact', 'UserController@emergencyContact');
			Route::resource('employees', 'UserController');

			/*
			|--------------------------------------------------------------------------
			| Branches
			|--------------------------------------------------------------------------
			*/
			Route::resource('branches', 'BranchController');
			/*
			|--------------------------------------------------------------------------
			| Leave Types
			|--------------------------------------------------------------------------
			*/
			Route::resource('leave-types', 'LeaveTypeController');
			/*
			|--------------------------------------------------------------------------
			| Job Title/Pay Grades
			|--------------------------------------------------------------------------
			*/
			Route::resource('job-titles', 'Job\JobTitleController');
			Route::resource('pay-grades', 'Job\PayGradeController');
			/*
			|--------------------------------------------------------------------------
			| News/Events
			|--------------------------------------------------------------------------
			*/
			Route::resource('news', 'News\NewsController');
			Route::resource('events', 'News\EventController');
			/*
			|--------------------------------------------------------------------------
			| Leave Requests
			|--------------------------------------------------------------------------
			*/
			Route::resource('leave-requests', 'LeaveController');
			Route::get('leave-requests/onhold', ['as' => 'leave-requests.onhold', 'uses' => 'LeaveController@onhold']);
			Route::get('ajax/dates', 'LeaveController@ajaxTotalDays');
			/*
			|--------------------------------------------------------------------------
			| Admin/Roles/Permissions
			|--------------------------------------------------------------------------
			*/
			Route::controller('admin', 'AdminController', [
				'postCreateRole'        => 'admin.create-role',
				'putUpdateRole'         => 'admin.update-role',
				'getUserGroup'          => 'admin.user-group',
				'postAttachPermissions' => 'admin.attach-permissions',
				'postCreatePermission'  => 'admin.create-permission', 'except' => 'deleteRole'
			]);
			Route::delete('admin/delete-role/{role}', ['as' => 'admin.delete-role', 'uses' => 'AdminController@deleteRole']);

		});
	});