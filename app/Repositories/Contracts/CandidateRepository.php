<?php

namespace App\Repositories\Contracts;


/**
 * Interface CandidateRepository
 * @package namespace App\Repositories\Contracts;
 */
interface CandidateRepository extends RepositoryInterface
{
    /**
     * Receive application from applicants
     * including their resumes
     * @param array $attributes
     * @return mixed
     */
    public function receiveApplication(array $attributes,$resume);

    /**
     * Create a unique filename for resumes uploaded
     * @param array $attributes
     * @param $resume
     * @return mixed
     */
    public function createUniqueFilename($attributes,$resume);

    /**
     * Delete rejected Candidate from Database
     * @param $id
     * @return mixed
     */
    public function rejectCandidate($id);

    /**
     * Delete resume of rejected Candidate
     * @param $filename
     * @return mixed
     */
    public function deleteFile($filename);

}
