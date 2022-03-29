<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class SupplierCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_supplier_category_alias' => 'required',
            'master_supplier_category_name' => 'required',
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
            'master_supplier_category_alias' => 'Alias Kategori Supplier',
            'master_supplier_category_name' => 'Nama Kategori Supplier',
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
