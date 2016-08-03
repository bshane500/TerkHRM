<?php

namespace App\Http\Requests\Store;

use App\Http\Requests\Request;

class StoreEmployee extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','unique:users','email'],
            'phone_number' => ['required'],
            'date_of_birth' => ['date','required'],
            'branch_id' => ['required'],
            'department_id'=> ['required'],
            //'password' => ['required','confirmed','min:6']

        ];
    }
}
