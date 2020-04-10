<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     * https://laravel.com/docs/7.x/validation#available-validation-rules
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PUT') {
            return [
                'store_type_id' => 'exists:store_types,id',
                'phone_number' => ['string', Rule::unique('stores', 'phone_number')->ignore(request()->route('store'))],
                'name' => 'string',
                'password' => 'string|confirmed',
                'address_line_1' => 'string',
                'city' => 'string',
                'zip' => 'string',
            ];
        }

        return [
            'store_type_id' => 'required|exists:store_types,id',
            'phone_number' => 'required|string|unique:stores,phone_number',
            'name' => 'required|string',
            'password' => 'required|string|confirmed',
            'address_line_1' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
        ];
    }
}
