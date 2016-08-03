<?php

namespace App\Http\Controllers\Job;

use App\Repositories\Contracts\PayGradeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class PayGradeController
 * @package App\Http\Controllers\Job
 */
class PayGradeController extends Controller
{
	/**
     * @var PayGradeRepository
     */
    protected $pay_grade;

    /**
     * PayGradeController constructor.
     *
     * @param PayGradeRepository $payGradeService
     */
    public function __construct(PayGradeRepository $payGradeService)
    {
        $this->pay_grade = $payGradeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pay_grades = $this->pay_grade->all();
        return view('pay_grade.index',compact('pay_grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->pay_grade->showForm();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //todo add validations
        $this->pay_grade->create($request->all());
        return redirect(route('pay-grades.index'))->with('status','Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pay_grade = $this->pay_grade->find($id);
        return view('pay_grade.form',compact('pay_grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->pay_grade->update($request->all(),$id);
        return redirect(route('pay-grades.index'))->with('status','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pay_grade->delete($id);
        return redirect(route('pay-grades.index'))->with('status','Deleted');
    }
}
