<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255|',
            'description' => 'required',
            'amount' => 'required',
            'duration' => 'required'
        ];

    }
     public function messages(){
        return [
            'title.required' => 'Please enter campaign title.',
            'description.required' => 'Please enter campaign description.',
            'amount.required' => 'Please enter campaign Goal Amount.',
            'duration.required' => 'Please enter campaign duration.'
        ];
    }

}
