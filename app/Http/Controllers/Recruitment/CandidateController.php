<?php

	namespace App\Http\Controllers\Recruitment;

	use App\Repositories\Contracts\CandidateRepository;
	use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\Http\Controllers\Controller;

	/**
	 * Class CandidateController
	 * @package App\Http\Controllers\Recruitment
	 */
	class CandidateController extends Controller
	{
		/**
		 * @var CandidateRepository
		 */
		protected  $candidate;

		/**
		 * CandidateController constructor.
		 * @param CandidateRepository $candidate
		 */
		public function __construct(CandidateRepository $candidate)
		{
			$this->candidate  = $candidate;
		}

		/**
		 * Display a listing of the resource.
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			//
		}

		/**
		 * Show the form for creating a new resource.
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			//
		}

		/**
		 * Store a newly created resource in storage.
		 * @param  \Illuminate\Http\Request $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			$this->candidate->create($request->all());
			return redirect(route('recruitment.candidates.index'))
				->with('status', 'Application Received');
		}

		/**
		 * Display the specified resource.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			//
		}

		/**
		 * Update the specified resource in storage.
		 * @param  \Illuminate\Http\Request $request
		 * @param  int                      $id
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id)
		{

		}

		/**
		 * Remove the specified resource from storage.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
			//
		}
	}
