<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\models\Branch;
use App\models\Department;
use App\models\LeaveType;
use App\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    protected $department;

    /**
     * HomeController constructor.
     *
     * @param Department $department
     */
    public function __construct(Department $department)
    {
        $this->department = $department;
    }
    /**
     * Create a new controller instance.
     *
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Auth::user()->with('leave')->get();

        $leave_type = LeaveType::all();
        $bd = User::all();
        return view('home',compact('leave_type','bd'));
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function test(Request $request)
    {
        $test = new Test();
        $request->all();
        $test->save();

        return redirect(route('test.index'))->with('status','saved');
        //dd($departments);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function testing(){
        $test = Test::all();
        return view('test1',compact('test'));
    }
}
