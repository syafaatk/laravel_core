<?php

namespace App\Http\Requests;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest as RealFormRequest;

class FormRequest extends RealFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = new JsonResponse([
            'error' => true,
            'messages' => $validator->errors()
        ], 200);

        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }

    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    public function getData(){
    	return $this->validationData();
    }
}
