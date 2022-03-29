<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class ProdukUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_kategori_id'=>'required',
            'master_produk_name'=>'required',
            'master_produk_deskripsi'=>'required',
            'master_produk_price'=>'required',
            'master_produk_file'=>'mimes:jpg,jpeg,png|max:5120|min:10',
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
            'master_kategori_id'=>'Kategori',
            'master_produk_name'=>'Nama Produk',
            'master_produk_price'=>'Harga',
            'master_produk_file'=>'Gambar Produk',
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
