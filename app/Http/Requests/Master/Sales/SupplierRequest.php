<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class SupplierRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_supplier_name' => 'required',
            'master_brand_id' => 'required',
            'master_supplier_address' => 'required',
            'master_city_id' => 'required',
            'master_supplier_phone_office' => '',
            'master_supplier_phone_mobile' => 'required',
            'master_supplier_pic' => '',
            'master_supplier_section' => 'required',
            'master_supplier_email' => '',
            'master_supplier_date_of_reg' => 'required',
            'master_supplier_category_id' => 'required',
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
            'master_supplier_name' => 'Nama Supplier',
            'master_brand_id' => 'Brand',
            'master_supplier_address' => 'Alamat Supplier',
            'master_city_id' => 'Kota',
            'master_supplier_phone_office' => 'No Kantor Supplier',
            'master_supplier_phone_mobile' => 'No HP Supplier',
            'master_supplier_pic' => 'PIC Supplier',
            'master_supplier_section' => 'Jabatan Supplier',
            'master_supplier_email' => 'Email Supplier',
            'master_supplier_date_of_reg' => 'Tanggal Supplier Terdaftar',
            'master_supplier_category_id' => 'Kategori Supplier',
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
