<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'name' => 'required|max:100',
            'group' => 'required|max:100',
            'desc' => 'max:200'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Fill Name input',
            'name.max' => 'this input should not cross 100 char',
            'desc.max' => 'this input should not cross 200 char',
        ];
    }
}
