<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_brand_alias' => 'required',
            'master_brand_name' => 'required',
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
            'master_brand_alias' => 'Alias Brand',
            'master_brand_name' => 'Nama Brand',
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
