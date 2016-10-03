<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\SettingRepository;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

/**
 * Class SettingRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class SettingRepositoryEloquent extends BaseRepository implements SettingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Setting::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    /**
     * Save logo
     * @param $image
     * @return mixed
     */
    public function photo($image)
    {
        $file = $image;
        $name = $file->getClientOriginalName();
        $nameWithoutExt = substr($name,0,strlen($name)-4);
        $logo = uniqid().'.'.$file->getClientOriginalExtension();
        $image->move(public_path() . '/images/', $logo);
        return $logo;
    }

    public function updatePhoto($image)
    {
        File::delete(public_path('images/' . $image));
    }

    /**
     * @param $attributes
     * @return mixed
     */
    public function newSettings($attributes)
    {

        $logo = $this->photo($attributes['image']);
        $settings = $this->create($attributes+['logo'=>$logo]);
        return $settings;

    }

    /**
     * @param $attributes
     * @param $id
     * @return mixed
     */
    public function updateSettings($attributes, $id)
    {
        $old = $this->find($id);
        $this->updatePhoto($old->logo);
        $logo = $this->photo($attributes['image']);
        $settings = $this->update($attributes+['logo'=>$logo],$id);
        return $settings;
    }

    /**
     * @return mixed
     */
    public function firstOrNew()
    {
        return Setting::firstOrNew([]);
    }
}
