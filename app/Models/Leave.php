<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

/**
 * Class Leave
 * @package App\models
 */
class Leave extends Model
{
    protected $fillable = [

        'contact_on_leave',
        'start_date',
        'end_date',
        'reason',
        'leave_type_id',
        'employee_id',
        'status',
        'total_days_requested'
    ];

    protected $dates = ['start_date','end_date'];
    protected $with = ['leaveCategory','employees'];

    /**
     * Leave Request belongs an Employee
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employees()
    {
        return $this->belongsTo(User::class,'employee_id');
    }

    /**
     * Leave Requests belongs to a Category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function leaveCategory()
    {
        return $this->belongsTo(LeaveType::class,'leave_type_id');
    }


    /**
     * Sum the Total Days of Leaves Requested
     * by a specific user
     * @return mixed
     */
    public function getTotalDays()
    {
        return $this->where('employee_id',Auth::user()->id)->sum('total_days_requested');
    }

    /*public function getFinalDaysAttribute()
    {
        DB::table('leaves')->sum('')
    }*/


}
