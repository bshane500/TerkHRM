<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  PayGradeRepository.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 3:58 PM
     */

    namespace App\Repositories\Contracts;


    use Prettus\Repository\Contracts\RepositoryInterface;

    /**
     * Interface PayGradeRepository
     * @package App\Repositories\PayGrade
     */
    interface PayGradeRepository extends RepositoryInterface
    {
        public function showForm();
    }