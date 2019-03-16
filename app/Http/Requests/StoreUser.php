<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'fullname' => 'required|max:80,',
            'email' => 'required|unique:users|email',
            'password' => 'bail|required|min:4|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,30}$/i',
            'photo' => 'required',
            'role_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'role_id.required' => 'A role is required',
            'role_id.numeric'  => 'A role is invalid',
        ];
    }
}
