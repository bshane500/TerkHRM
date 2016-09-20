<?php

    namespace App\Repositories\Eloquent;


    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Storage;
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


        /**
         * Receive application from applicants
         * including their resumes
         * @param array $attributes
         * @return mixed
         */
        public function receiveApplication(array $attributes, $resume)
        {
            //dd($resume);
            $name = $this->createUniqueFilename($attributes, $resume);
            //dd($name);
            $candidate = $this->create($attributes + ['resume' => $name]);
            $this->sendMail($candidate->id, 'application_received');
        }


        /**
         * Create a unique filename for resumes uploaded
         * @param array $attributes
         * @param $resume
         * @return mixed
         */
        public function createUniqueFilename($attributes, $resume)
        {
            $file = $resume;
            $name = $file->getClientOriginalName();
            $nameWithoutExt = substr($name, 0, strlen($name) - 4) . '-'
                . $attributes['first_name'] . '-' . $attributes['last_name'] . '.' .
                $file->getClientOriginalExtension();
            $resume->move(public_path() . '/resumes/', $nameWithoutExt);
            return $nameWithoutExt;
        }

        /**
         * Delete rejected Candidate from Database
         * @param $id
         * @return mixed
         */

        public function rejectCandidate($id)
        {
            $candidate = $this->find($id);
            $this->deleteFile($candidate->resume);
            $this->delete($id);
            return true;
        }


        /**
         * Delete resume of rejected Candidate
         * @param $filename
         * @return mixed
         */
        public function deleteFile($filename)
        {
            //dd(asset('/resumes/'.$filename));
            File::delete(public_path('resumes/' . $filename));
            return true;
        }

    }
