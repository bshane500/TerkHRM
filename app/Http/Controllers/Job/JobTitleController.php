<?php

	namespace App\Http\Controllers\Job;

	use App\Repositories\Contracts\JobTitleRepository;
	use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\Http\Controllers\Controller;

	/**
	 * Class JobTitleController
	 * @package App\Http\Controllers\Job
	 */
	class JobTitleController extends Controller
	{
		/**
		 * @var JobTitleRepository
		 */
		protected $job_title;

		/**
		 * JobTitleController constructor.
		 *
		 * @param JobTitleRepository $jobTitle
		 *
		 */
		public function __construct(JobTitleRepository $jobTitle)
		{
			$this->job_title = $jobTitle;
		}

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$job_titles = $this->job_title->all();
			return view('job_title.index', compact('job_titles'));
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			return $this->job_title->showForm();
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			$this->job_title->create($request->all());
			return redirect(route('job-titles.index'))->with('status', 'Saved');
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
			$job_title = $this->job_title->find($id);
			return view('job_title.form', compact('job_title'));
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
			$this->job_title->update( $request->all(),$id);
			return redirect(route('job-titles.index'))->with('status', 'Updated');
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
			$this->job_title->delete($id);
			return redirect(route('job-titles.index'))->with('status', 'Deleted');
		}
	}
