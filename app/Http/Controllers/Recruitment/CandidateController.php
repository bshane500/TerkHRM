<?php

    namespace App\Http\Controllers\Recruitment;

    use App\Repositories\Contracts\CandidateRepository;
    use App\Repositories\Contracts\VacancyRepository;
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
        protected $candidate, $vacancy;

        /**
         * CandidateController constructor.
         * @param CandidateRepository $candidate
         * @param VacancyRepository $vacancy
         */
        public function __construct(CandidateRepository $candidate, VacancyRepository $vacancy)
        {
            $this->candidate = $candidate;
            $this->vacancy = $vacancy;
        }

        /**
         * Display a listing of the resource.
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $candidates = $this->candidate->all();
            return view('recruitment.candidates.index', compact('candidates'));
        }

        /**
         * Show the form for creating a new resource.
         * @param $vacancy
         * @return \Illuminate\Http\Response
         */
        public function create($vacancy)
        {
            $job = $this->vacancy->findByField('vacancy_name', $vacancy);

            return view('recruitment.candidates.candidate_form', compact('job'));
        }

        /**
         * Store a newly created resource in storage.
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $candidate = $this->candidate->create($request->all());
            $this->candidate->sendMail($candidate->id, 'application_received');
            return redirect(route('jobs'))
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
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            if ($request->has('shortlist')) {
                $this->candidate->update(['status' => 'short-listed'], $id);
                return redirect(route('recruitment.candidates.index'))->with('status', 'Short Listed');
            } else
                return redirect(route('recruitment.candidates.index'));
        }

        /**
         * Remove the specified resource from storage.
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $this->candidate->rejectCandidate($id);
            return redirect(route('recruitment.candidates.index'))->with('status', 'Candidate Deleted');
        }
    }
