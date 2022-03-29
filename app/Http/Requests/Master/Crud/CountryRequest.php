<?php

namespace App\Http\Requests\Master\Crud;

use App\Http\Requests\FormRequest;

class CountryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_province'=>'required',
            'since'=>'required|numeric|min:2',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name_province'=>'nama provinsi',
            'since'=>'tahun berdiri',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
// 
        ];
    }
}
