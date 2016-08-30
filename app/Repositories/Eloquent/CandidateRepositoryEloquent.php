<?php

namespace App\Repositories\Eloquent;


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

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
