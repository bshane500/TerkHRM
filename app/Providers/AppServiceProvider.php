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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('home',function ($view)
        {
            $leave = DB::table('leaves')->where('employee_id',Auth::user()->id)->sum('total_days_requested');
            if($leave === null){
                $view->with('leaves',0);
            }
            else
            $view->with('leaves',Config('constant.totalAllowedDays') -$leave);
        });

        view()->composer('home',function ($view)
        {
           $view->with('news',News::all());
        });


        view()->share('departments',Department::pluck('name','id'));
        view()->share('branches',Branch::pluck('name','id'));
        view()->share('roles',Role::pluck('display_name','id'));
        view()->share('perms',Permission::pluck('display_name','id'));
        view()->share('events',Event::all());
        view()->share('leave_type',LeaveType::all());
        view()->share('job_title',JobTitle::pluck('job_title','id'));

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RepositoryServiceProvider::class);
    }
}
