<?php

    namespace App\Http\Controllers;

    use App\Repositories\Contracts\LeaveTypeRepository;
    use Illuminate\Http\Request;

    use App\Http\Requests;

    /**
     * Class LeaveTypeController
     * @package App\Http\Controllers
     */
    class LeaveTypeController extends Controller
    {
        /**
         * @var LeaveTypeRepository
         */
        protected $leaveType;

        /**
         * LeaveTypeController constructor.
         *
         * @param LeaveTypeRepository $leaveType
         */
        public function __construct(LeaveTypeRepository $leaveType)
        {
            $this->leaveType = $leaveType;
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $leaveTypes = $this->leaveType->paginate();
            return view('manage_pages.leaveType', compact('leaveTypes'));
        }


        /**
         * Store a newly created resource in storage.
         *
         * @param Requests\Store\StoreLeaveType|Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(Requests\Store\StoreLeaveType $request)
        {
            $this->leaveType->create($request->all());
            return redirect(route('leave-types.index'))->with('status', 'Saved');
        }


        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $leaveType = $this->leaveType->find($id);
            return view('leave-type.form', compact('leaveType'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {

            $this->leaveType->update($request->all(),$id);
            return redirect(route('leave-types.index'))->with('status', 'Leave Category Updated');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $this->leaveType->delete($id);
            return redirect(route('leave-types.index'))->with('status', 'Leave Type Deleted
        Successfully');
        }
    }
