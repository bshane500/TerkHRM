<?php

namespace App\Repositories\Eloquent;


use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\BankDetailRepository;
use App\Models\BankDetail;
/**
 * Class BankDetailRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class BankDetailRepositoryEloquent extends BaseRepository implements BankDetailRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BankDetail::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


}
