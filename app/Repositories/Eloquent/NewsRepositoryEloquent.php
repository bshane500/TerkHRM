<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  NewsRepositoryEloquent.php
 *
 */

    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/28/2016
     * Time: 4:31 PM
     */

    namespace App\Repositories\Eloquent;


    use App\Models\News;
    use App\Repositories\Contracts\NewsRepository;
    use Prettus\Repository\Eloquent\BaseRepository;

    /**
     * Class NewsRepositoryEloquent
     * @package App\Repositories\News
     */
    class NewsRepositoryEloquent extends BaseRepository implements NewsRepository
    {
        
	    /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function showForm()
        {
            $news = new News();
            return view('news.form',compact('news'));
        }

        /**
         * Specify Model class name
         *
         * @return string
         */
        public function model()
        {
            return News::class;
        }
    }