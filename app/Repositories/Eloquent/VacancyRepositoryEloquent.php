<?php

	namespace App\Repositories\Eloquent;

	use Prettus\Repository\Criteria\RequestCriteria;
	use App\Repositories\Contracts\VacancyRepository;
	use App\Models\Vacancy;

//use App\Validators\VacancyValidator;

	/**
	 * Class VacancyRepositoryEloquent
	 * @package namespace App\Repositories\Eloquent;
	 */
	class VacancyRepositoryEloquent extends BaseRepository implements VacancyRepository
	{
		/**
		 * Specify Model class name
		 * @return string
		 */
		public function model()
		{
			return Vacancy::class;
		}






		/**
		 * Boot up the repository, pushing criteria
		 */
		public function boot()
		{
			$this->pushCriteria(app(RequestCriteria::class));
		}
	}
