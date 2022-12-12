<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequset extends FormRequest
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
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:24'],
            'last_name' => ['string', 'max:24'],
            'phone_number' => ['required', 'integer', 'max:9999999999', 'unique:users,phone_number'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'integer'],
            'birth_date' => ['date'],
            'is_personal' => ['required', 'between:1,2'],
            'account_type_id' => ['required', 'numeric', 'in:3', 'exists:account_types,account_type_id'],
        ];
    }
}
