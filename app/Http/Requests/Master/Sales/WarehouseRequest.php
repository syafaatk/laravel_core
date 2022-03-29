<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class WarehouseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_warehouse_alias' => 'required',
            'master_warehouse_name' => 'required',
            'master_city_id' => 'required',
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
            'master_warehouse_alias' => 'Alias Gudang',
            'master_warehouse_name' => 'Nama Gudang',
            'master_city_id' => 'Kota',
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
