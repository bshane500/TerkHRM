<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\Contracts\BranchRepository::class, \App\Repositories\Eloquent\BranchRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\NewsRepository::class, \App\Repositories\Eloquent\NewsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\EventRepository::class, \App\Repositories\Eloquent\EventRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\JobTitleRepository::class, \App\Repositories\Eloquent\JobTitleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PayGradeRepository::class, \App\Repositories\Eloquent\PayGradeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\DepartmentRepository::class, \App\Repositories\Eloquent\DepartmentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\LeaveRepository::class, \App\Repositories\Eloquent\LeaveRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\LeaveTypeRepository::class, \App\Repositories\Eloquent\LeaveTypeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PermissionRepository::class, \App\Repositories\Eloquent\PermissionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\RoleRepository::class, \App\Repositories\Eloquent\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\EmployeeRepository::class, 
            \App\Repositories\Eloquent\EmployeeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\VacancyRepository::class, \App\Repositories\Eloquent\VacancyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\CandidateRepository::class, \App\Repositories\Eloquent\CandidateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SettingRepository::class, \App\Repositories\Eloquent\SettingRepositoryEloquent::class);
        //:end-bindings:
    }
}
