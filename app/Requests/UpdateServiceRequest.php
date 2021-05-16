<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Service;

class UpdateServiceRequest extends FormRequest
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
            'application_id' => 'required',
                'name' => 'required|string|max:55',
                'is_active' => 'required|boolean|in:1,0'
        ];
        
        return $rules;
    }
}
