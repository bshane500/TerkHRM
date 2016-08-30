<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  PayGradeRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 3:59 PM
     */

    namespace App\Repositories\Eloquent;


    use App\Models\PayGrade;
    use App\Repositories\Contracts\PayGradeRepository;

    /**
     * Class PayGradeRepositoryEloquent
     * @package App\Repositories\PayGrade
     */
    class PayGradeRepositoryEloquent extends BaseRepository implements PayGradeRepository
    {
       
        public function showForm()
        {
            $pay_grade  = new PayGrade();
            return view('pay_grade.form',compact('pay_grade'));
        }

        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return PayGrade::class;
        }
    }

    //todo  revise repository pattern