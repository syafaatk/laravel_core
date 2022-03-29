<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class UnitRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_unit_alias' => 'required',
            'master_unit_name' => 'required',
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
            'master_unit_alias' => 'Alias Satuan',
            'master_unit_name' => 'Nama Satuan',
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
