<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category' => ['required', 'string'],
            'shortName'=> ['required', 'string', 'max:18'],
            'color' => ['required', 'string', 'max:25'],
            'price' =>['required', 'numeric', 'min:0', 'max:99999999'],

            'search' => ['nullable', 'string', 'max:50'],
        ];
    }
}
