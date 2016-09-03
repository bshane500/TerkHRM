<?php

namespace App\Repositories\Eloquent;


use Illuminate\Support\Facades\Mail;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\CandidateRepository;
use App\Models\Candidate;
//use App\Validators\CandidateValidator;

/**
 * Class CandidateRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class CandidateRepositoryEloquent extends BaseRepository implements CandidateRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Candidate::class;
    }

    public function sendMail($id, $view)
    {
        $candidate = $this->find($id);
        Mail::send('emails.' . $view, ['candidate' => $candidate], function ($m) use ($candidate) {
            $m->from('hello@app.com', 'TerkHRM');
            # Sending Mail
            $m->to($candidate->email, $candidate->first_name)->subject('Application Received');
        });
        return true;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
