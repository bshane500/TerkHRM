<?php

namespace App\Http\Requests\Update;

use App\Http\Requests\Request;
use App\Http\Requests\Store\LeaveStoreRequest;

class UpdateLeaveRequest extends Request
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
            //'status' => ['required']
        ];
    }
}
