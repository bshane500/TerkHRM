<?php

namespace App\Http\Controllers;


use App\Repositories\Contracts\DepartmentRepository;
use Illuminate\Http\Request;
use App\Http\Requests;

/**
 * Class DepartmentController
 * @package App\Http\Controllers
 */
class DepartmentController extends Controller
{

    protected $department;

    /**
     * DepartmentController constructor.
     *
     * @param DepartmentRepository $department
     */
    public function __construct(DepartmentRepository $department)
    {
        $this->department = $department;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->department->all();
        return view('manage_pages.department',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\Store\StoreDepartment|Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\Store\StoreDepartment $request)
    {
        $this->department->create($request->all());
        return redirect(route('departments.index'))->with('status','Saved');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department= $this->department->find($id);
        return view('department.form',compact('department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\Update\UpdateDepartment|Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\Update\UpdateDepartment $request, $id)
    {

        $this->department->update($request->all(),$id);
        return redirect(route('departments.index'))->with('status','Department Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->department->delete($id);
        return redirect(route('departments.index'))->with('status','Department Successfully
        Deleted');
    }
}

//todo Solve the cascading deletion of related models