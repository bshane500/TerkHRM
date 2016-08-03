<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\BranchRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class BranchController
 * @package App\Http\Controllers
 */
class BranchController extends Controller
{
    /**
     * @var BranchRepository
     */
    protected $branch;

    /**
     * BranchController constructor.
     *
     * @param BranchRepository $branch
     */
    public function __construct(BranchRepository $branch)
    {
        $this->branch = $branch;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches= $this->branch->all();
        return view('manage_pages.branch',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\Store\StoreBranch|Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\Store\StoreBranch $request)
    {
        $this->branch->create($request->all());
        return redirect(route('branches.index'))->with('status','Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->branch->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->branch->update($request->all(),$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->branch->delete($id);
        return redirect(route('branches.index'))->with('status','Branch Successfully deleted');
    }
}
