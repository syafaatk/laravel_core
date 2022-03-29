<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class ItemUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_supplier_id'=>'required',
            'master_warehouse_id'=>'required',
            'master_brand_id'=>'required',
            'master_item_name'=>'required',
            'master_unit_id'=>'required',
            'master_item_price'=>'required',
            'master_item_bottom_price'=>'required',
            'master_item_price_retail'=>'required',
            'master_item_price_coorporate'=>'required',
            'master_item_stock'=>'required',
            'master_item_stock_minimum'=>'required',
            'master_item_file'=>'mimes:jpg,jpeg,png|max:5120|min:25',
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
            'master_supplier_id'=>'Supplier',
            'master_warehouse_id'=>'Gudang',
            'master_brand_id'=>'Brand',
            'master_item_name'=>'Nama Item',
            'master_unit_id'=>'Satuan',
            'master_item_price'=>'Harga',
            'master_item_bottom_price'=>'Bottom Price',
            'master_item_price_retail'=>'Harga Retail',
            'master_item_price_coorporate'=>'Harga Corporate',
            'master_item_stock'=>'Stok',
            'master_item_stock_minimum'=>'Stok Minimum',
            'master_item_file'=>'Gambar Item',
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
