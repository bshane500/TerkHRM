<?php

namespace App\Http\Requests\Update;

use App\Http\Requests\Request;

class UpdateBranch extends Request
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
            'name' => ['required','unique:branches,name,'.$this->route('branches')],
            'branch_code' => ['required','unique:branches,'.$this->route('branches')],
            'region' => ['required']
        ];
    }
}
