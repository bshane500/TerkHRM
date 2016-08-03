<?php

namespace App\Http\Requests\Store;

use App\Http\Requests\Request;

class StoreBranch extends Request
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
            'name' => ['required','unique:branches'],
            'branch_code' => ['required','unique:branches'],
            'region' => ['required']
        ];
    }
}
