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
                'nullable',
                'max:100',
                'email:rfc,dns',
                Rule::unique('happy_books'),
            ],
            'content' => [
                'required',
                'max:255',
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
            'email.max' => 'Vui lòng nhập dưới 100 ký tự!',
            'email.email' => 'Email này ko hợp lệ!',
            'email.unique' => 'Email này đã tồn tại!',
            'content.required' => 'Vui lòng nhập lời chúc của bạn!',
            'content.max' => 'Vui lòng nhập dưới 255 ký tự!',
        ];
    }
}
