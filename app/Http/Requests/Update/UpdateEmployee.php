<?php

namespace App\Http\Requests\Update;

use App\Http\Requests\Request;

/**
 * Class UpdateEmployee
 * @package App\Http\Requests\Update
 */
class UpdateEmployee extends Request
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
            'email' => ['email','required','unique:users,email,'.$this->route('employees')],
            'phone_number' => ['required'],
            'date_of_birth' => ['date','required'],
            'branch_id' => ['required'],
            'department_id'=> ['required']
        ];
    }
}
