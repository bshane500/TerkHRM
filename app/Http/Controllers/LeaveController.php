<?php

	namespace App\Http\Controllers;


	use App\Repositories\Contracts\LeaveRepository;
	use Carbon\Carbon;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use Illuminate\Support\Facades\Input;


	/**
	 * Class LeaveController
	 * @package App\Http\Controllers
	 */
	class LeaveController extends Controller
	{
		/**
		 * @var LeaveRepository
		 */
		protected $leave;


		/**
		 * LeaveController constructor.
		 * @param LeaveRepository $leave
		 */
		public function __construct(LeaveRepository $leave)
		{
			$this->leave = $leave;
		}

		/**
		 * @return mixed
		 */
		public function ajaxTotalDays()
		{
			$start_input = Input::get('start-date');
			$end_input = Input::get('end-date');
			$start_date = Carbon::createFromFormat('Y-m-d', $start_input);
			$end_date = Carbon::createFromFormat('Y-m-d', $end_input);
			$totalRequestedDays = $start_date->diffInWeekdays($end_date);
			return \Response::json($totalRequestedDays);
		}

		/**
		 * Display a list of Resources
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function index()
		{
			$leaveRequests = $this->leave->getAllLeavesByUser(auth()->user()->id);
			return view('leave_request.index', compact('leaveRequests'));
		}


		/**
		 * Store a newly created resource in storage.
		 * @param Requests\Store\LeaveStoreRequest|Request $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Requests\Store\LeaveStoreRequest $request)
		{

			$requested_days = Input::get('total_days_requested');
			$remaining = (Config('constant.totalAllowedDays') - $this->leave->totalLeaveDaysByUser());
			if (($this->leave->totalLeaveDaysByUser() + $requested_days) > Config('constant.totalAllowedDays')) {
				return redirect(route('leave-requests.index'))->with('rejected', 'You have exhausted 
		    Your leave Days. ' .
					$remaining . ' Day(s) Remaining');
			} else
				$this->leave->create($request->all());
			return redirect(route('leave-requests.index'))->with('status', 'Leave Successfully requested');
		}

		/**
		 * Display the specified resource.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			$leaveRequest = $this->leave->find($id);
			return view('leave_request.show', compact('leaveRequest'));
		}


		/**
		 * Update the specified resource in storage.
		 * @param Requests\Update\UpdateLeaveRequest|Request $request
		 * @param  int                                       $id
		 * @return \Illuminate\Http\Response
		 */
		public function update(Requests\Update\UpdateLeaveRequest $request, $id)
		{
			//TODO Send Mail after Updating leave status


			if (Input::has('approve')) {
				$this->leave->update(['status' => Config('constant.approved')], $id);
				$this->leave->sendMail($id, 'approved');
				return redirect(route('leave-requests.index'))->with('status', 'Leave Approved');
			}
			if (Input::has('on-hold')) {
				$this->leave->update(['status' => Config('constant.onhold')], $id);
				$this->leave->sendMail($id, 'onhold');
				return redirect(route('leave-requests.index'))->with('status', 'Leave rejected');
			}
			if (Input::has('reject')) {
				$this->leave->update(['status' => Config('constant.reject')], $id);
				$this->leave->sendMail($id, 'rejected');
				return redirect(route('leave-requests.index'))->with('status', 'Leave rejected');
			} else {
				return redirect(route('leave-requests.index'));
			}

		}


		/**
		 * Remove the specified resource from storage.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{

		}
	}
