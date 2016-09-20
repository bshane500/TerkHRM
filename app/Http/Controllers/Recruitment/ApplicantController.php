<?php
namespace App\Http\Controllers\Recruitment;

use App\Repositories\Contracts\CandidateRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ApplicantController extends Controller
{
    protected $candidate;

    /**
     * ApplicantController constructor.
     * @param CandidateRepository $candidate
     */
    public function __construct(CandidateRepository $candidate)
    {
        $this->candidate = $candidate;
    }

    /**
     * Receive and store application from new applicant
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $this->candidate->receiveApplication($request->all(),$request->file('resume1'));
        return redirect(route('jobs'))->with('status', 'Application Received');
    }
}
