<?php

	namespace App\Http\Controllers;


	use App\Repositories\Contracts\EmployeeRepository;

	use Illuminate\Http\Request;

	use App\Http\Requests;

	/**
	 * Class UserController
	 * @package App\Http\Controllers
	 */
	class UserController extends Controller
	{
		/**
		 * @var EmployeeRepository
		 */
		protected $users;

		/**
		 * UserController constructor.
		 *
		 * @param EmployeeRepository| $users
		 */
		public function __construct(EmployeeRepository $users)
		{
			$this->users = $users;
		}

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */

		public function index()
		{

			$employees = $this->users->paginate();
			return view('employees.index', compact('employees'));
		}


		/**
		 * Show Form
		 * @return mixed
		 */
		public function create()
		{
			return $this->users->showForm();
		}


		/**
		 * Store a newly created resource in storage
		 *
		 * @param Requests\Store\StoreEmployee|Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store(Requests\Store\StoreEmployee $request)
		{
			//dd($request->all());
			$this->users->createUserWithRoles($request->all(), $request->input('roles'));
			return redirect(route('employees.index'))->with('status', 'Employee Added');

		}



		/**
		 * Display the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			//
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
			$user = $this->users->with(['bankDetails'])->find($id);
			return view('employees.profile', compact('user'));
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param Requests\Update\UpdateEmployee|Request $request
		 * @param  int                                   $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update(Requests\Update\UpdateEmployee $request, $id)
		{

			$this->users->updateUserWithRoles($id, $request->all(), $request->input('roles_list'));
			return redirect(route('employees.edit', $id))->with('status', 'Employee Data
            Edited');

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
			//TODO Soft Delete Employees
			$this->users->delete($id);
			return redirect(route('employees.index'))->with('status', 'Employee Deleted Successfully
			 ');
		}
	}
