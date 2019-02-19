<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkUpdate extends FormRequest
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
            'name' => 'required|in:role,Math,English,PE',
            'mark' => 'required|integer|between:1,6',
            'weight' => 'required|integer|between:1,10,',
        ];
    }
}
