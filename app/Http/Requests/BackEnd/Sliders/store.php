<?php

namespace App\Http\Requests\BackEnd\Sliders;

use Illuminate\Foundation\Http\FormRequest;

class store extends FormRequest
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
            'title' => ['required', 'between:5,190', 'string'],
            'content' => ['required', 'between:20,1000', 'string'],
            'img' => ['image', 'max:3000', 'required'],
            'status' => ['required','in:status,Active,pending'],

        ];
    }
}
