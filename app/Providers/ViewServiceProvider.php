<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Department;
use App\Models\Event;
use App\Models\JobTitle;
use App\Models\LeaveType;
use App\Models\News;
use App\Models\Permission;
use App\Models\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
	    view()->composer('home',function ($view)
	    {
		    $leave = DB::table('leaves')->where('employee_id', Auth::user()->id)->sum('total_days_requested');
		    if ($leave === null) {
			    $view->with('leaves', 0);
		    } else
			    $view->with('leaves', Config('constant.totalAllowedDays') - $leave);
	    });

	    view()->composer('home', function ($view) {
		    $view->with('news', News::all());
	    });
//todo extract to dedicated view composer class
		view()->composer(
		    [
		    'employees.partials.employment_details',
            'partials.modal.add_employee',
            'partials.modal.add_permission',
            'partials.modal.attach_permissions',
                'leave_request.index'
        ], function ($view) {
            $view->with('select', $select = [
                'departments' => Department::pluck('name', 'id'),
                'branches' => Branch::pluck('name', 'id'),
                'roles' => Role::pluck('display_name', 'id'),
                'perms' => Permission::pluck('display_name', 'id'),
                'job_title' => JobTitle::pluck('job_title', 'id'),
                'leave_type' => LeaveType::all(),
            ]);
        }
		);

        view()->composer('partials.events',function($view){
            $view->with('events',Event::all());
        });

	    view()->composer('home',function ($view){
	    	$view->with('count',
	    	$count = [
	    		'employees'  =>  User::count(),
	    		'departments'  =>  Department::count(),
	    		'branches'  =>  Branch::count()
		    ]);
	    });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
