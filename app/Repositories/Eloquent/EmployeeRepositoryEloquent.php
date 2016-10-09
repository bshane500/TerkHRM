<?php
/**
 * Copyright (c) .year TerkTrendz Inc  (http://terktrendz.com)
 * Package: TerkHRM
 *  Author : Owen Jubilant
 *  EmployeeRepositoryEloquent.php
 *
 */

/**
 * Created by PhpStorm.
 * User: Owen
 * Date: 6/23/2016
 * Time: 12:45 PM
 */

namespace App\Repositories\Eloquent;

use App\Models\BankDetail;
use App\Models\EmergencyContact;
use App\Models\Photo;
use App\Repositories\Contracts\EmployeeRepository;
use App\User;
use Illuminate\Support\Facades\File;

/**
 * Class EmployeeRepositoryEloquent
 * @package App\Repositories\Employee
 */
class EmployeeRepositoryEloquent extends BaseRepository implements EmployeeRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Show Form With Model binding
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showForm()
    {
        // todo put in base repository
        $user = $this->app->make(User::class);
        return view('employees.form', compact('user'));
    }

    /**
     * @param array $attributes
     * @param       $roles
     *
     * @return mixed|void
     */
    public function createUserWithRoles(array $attributes, $roles)
    {
        $user = $this->create($attributes);
        $user->attachRoles($roles);
        return true;
    }


    /**
     * Add a User's Bank Details
     *
     * @param array $attributes
     * @param       $user_id
     */
    public function addBankDetails(array $attributes, $user_id)
    {
        $bank = BankDetail::where('user_id', $user_id)->first();
        if ($bank) {
            $bank->fill($attributes['bankDetails'])->save();
        } else
            BankDetail::create($attributes['bankDetails'] + ['user_id' => $user_id]);
    }

    public function addEmergencyContacts(array $attributes, $user_id)
    {
        $contact = EmergencyContact::where('user_id', $user_id)->first();
        if ($contact) {
            $contact->fill($attributes)->save();
        } else
            EmergencyContact::create($attributes + ['user_id' => $user_id]);
    }


    public function photo($id,$image)
    {
        $oldPhoto = $this->find($id)->photo()->first();
        if ($oldPhoto){
            File::delete(public_path('images/' . $oldPhoto->path));
        }
        //creat e symbolic link in storage
        $file = $image;
        $name = $file->getClientOriginalName();
        $nameWithoutExt = substr($name, 0, strlen($name) - 4);
        $avatar = uniqid() . '.' . $file->getClientOriginalExtension();
        $image->move(public_path() . '/images/', $avatar);
        $photo = Photo::create(['path' => $avatar]);
        return $photo;
    }

    public function updatePhoto($image)
    {

    }

    /**
     * @param       $id
     * @param array $attributes
     *
     * @return mixed
     *
     * @param       $roles
     *
     */
    public function updateUserWithRoles($id, array $attributes, $roles)
    {

        $photo = $this->photo($id,$attributes['image']);

        $user = $this->update($attributes + ['avatar' => $photo->id], $id);
        $user->roles()->sync($roles);
        $this->addBankDetails($attributes, $id);
        $this->addEmergencyContacts($attributes, $id);

        return true;
    }


}