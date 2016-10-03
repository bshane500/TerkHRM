<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface SettingRepository
 * @package namespace App\Repositories\Contracts;
 */
interface SettingRepository extends RepositoryInterface
{
    /**
     * @param $attributes
     * @return mixed
     */
    public function newSettings($attributes);

    /**
     * @param $attributes
     * @param $id
     * @return mixed
     */
    public function updateSettings($attributes, $id);
    /**
     * Save logo
     * @param $image
     * @return mixed
     */
    public function photo($image);

    /**
     * @return mixed
     */
    public function firstOrNew();
}
