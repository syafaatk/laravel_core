<?php

namespace App\Http\Requests\Master\Sales;

use App\Http\Requests\FormRequest;

class KategoriRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_kategori_alias' => 'required',
            'master_kategori_name' => 'required',
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
            'master_kategori_alias' => 'Alias Kategori',
            'master_kategori_name' => 'Nama Kategori',
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
