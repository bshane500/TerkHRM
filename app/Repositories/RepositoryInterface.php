<?php
    /**
     * Created by PhpStorm.
     * User: Owen
     * Date: 6/19/2016
     * Time: 8:12 PM
     */

    namespace App\Repositories;


    /**
     * Interface RepositoryInterface
     * @package App\Repositories
     */
    interface RepositoryInterface
    {
        /**
         * @return mixed
         */
        public function getAll ();

        /**
         * @param $id
         *
         * @return mixed
         */
        public function find($id);

        /**
         * @param array $attributes
         *
         * @return mixed
         */

        /**
         * @param $id
         * @param array $attributes
         *
         * @return mixed
         */
        public function update($id, array $attributes);

        /**
         * @param $id
         *
         * @return mixed
         */
        public function delete($id);


    }