<?php

namespace App\Modules\Agent\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProspectRequest extends FormRequest
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
            'Company_Name' => 'required',
            'phase' => 'required',
            'Contact_num_one' => 'required',
            'area' => 'required',



        ];
    }
}
