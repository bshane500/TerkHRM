<?php

namespace App\Http\Requests\Store;

use App\Http\Requests\Request;

class LeaveStoreRequest extends Request
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
            'reason' => ['required'],
            'start_date' => ['required','date'],
            'end_date' => ['required','date'],
            'contact_on_leave' => ['required'],
            'leave_type_id' => ['required']
        ];
    }
}
