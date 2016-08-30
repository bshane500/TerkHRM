<?php

	namespace App\Http\Controllers\Recruitment;

	use App\Repositories\Contracts\VacancyRepository;
	use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\Http\Controllers\Controller;

	class VacancyController extends Controller
	{
		protected $vacancy;

		/**
		 * VacancyController constructor.
		 * @param VacancyRepository $vacancy
		 */
		public function __construct(VacancyRepository $vacancy)
		{
			$this->vacancy = $vacancy;
		}
		
		/**
		 * Display a listing of the resource.
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$vacancies = $this->vacancy->all();
			return view('recruitment.vacancy_index',compact('vacancies'));
		}

		/**
		 * Show the form for creating a new resource.
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			return view('recruitment.vacancy_form');
		}

		/**
		 * Store a newly created resource in storage.
		 * @param  \Illuminate\Http\Request $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			$this->vacancy->create($request->all());
			return redirect(route('dashboard'))->with('status', 'Vacancy added');
		}

		/**
		 * Display Job Listing to the Public
		 * @return mixed
		 */
		public function jobs()
		{
			$vacancies = $this->vacancy->paginate();
			return view('recruitment.job-listings',compact('vacancies'));
		}

		/**
		 * Display the specified resource.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			$vacancy = $this->vacancy->find($id);
			return $vacancy;
		}

		/**
		 * Show the form for editing the specified resource.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			$vacancy = $this->vacancy->find($id);
			return view('recruitment.edit_vacancy',compact('vacancy'));
		}

		/**
		 * Update the specified resource in storage.
		 * @param  \Illuminate\Http\Request $request
		 * @param  int                      $id
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id)
		{
			$this->vacancy->update($request->all(),$id);
			return redirect(route('recruitment.vacancies.index'))
				->with('status','Vacancy Updated');
		}

		/**
		 * Remove the specified resource from storage.
		 * @param  int $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
			$this->vacancy->delete($id);
			return redirect(route('recruitment.vacancies.index'))
				->with('status','Vacancy Deleted');
		}
	}
