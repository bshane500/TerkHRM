<?php

namespace App\Http\Requests\Update;

use App\Http\Requests\Request;

class UpdateDepartment extends Request
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
            'name' => ['required','unique:departments,name,'.$this->route('departments')],
            'department_code' =>
                [
                    'required',
                    'unique:departments,department_code,'.$this->route('departments')
                ]
        ];
    }
}
