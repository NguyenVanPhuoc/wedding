<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class HappyBookRequest extends FormRequest
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
            'name' =>  [
                'required',
                'min:3',
                'max:50',
                Rule::unique('happy_books'),
            ],
            'email' => [
                'required',
                'max:100',
                'email:rfc,dns',
                Rule::unique('happy_books'),
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên của bạn!',
            'name.unique' => 'Tên này đã tồn tại!',
            'name.min' => 'Vui lòng nhập trên 3 ký tự!',
            'email.required' => 'Vui lòng nhập email của bạn!',
            'email.unique' => 'Email này đã tồn tại!',
        ];
    }
}
