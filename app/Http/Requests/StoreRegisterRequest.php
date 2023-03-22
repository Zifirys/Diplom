<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'login' => ['required', 'string', 'max:50', 'unique:users,login'],
            'password' => ['required', 'string', 'min:5', 'max:60', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
            'admin' => ['nullable', 'boolean'],
            'phone' => ['required', 'string', 'unique:users,phone'],
            'mail' => ['required', 'string', 'unique:users,mail'],
            'remember_token' => ['nullable', 'string'],
        ];
    }
}
