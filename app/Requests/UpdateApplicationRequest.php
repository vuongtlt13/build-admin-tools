<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Application;

class UpdateApplicationRequest extends FormRequest
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
        $rules = [
            'code' => 'required|string|min:3|max:50'
        ];
        
        return $rules;
    }
}
