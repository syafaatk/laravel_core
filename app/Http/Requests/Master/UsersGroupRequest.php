<?php

namespace App\Http\Requests\Master;

use App\Http\Requests\FormRequest;

class UsersGroupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'users_group_alias'        => 'required',
            'users_group_name'         => 'required',
            'user_group_default_pages' => 'required',
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
            'users_group_alias'        => 'Alias User Group',
            'users_group_name'         => 'Nama User Group',
            'user_group_default_pages' => 'Default Pages',
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
