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
                'string',
                'min:3',
                'max:50',
                Rule::unique('happy_books'),
                'regex:/[a-zA-Z]/',  
                function($attribute, $value, $fail) {
                    if ($this->containsHtml($value)) {
                        $fail('Tên không được chứa HTML hoặc script!');
                    }
                },
            ],
            'content' => [
                'required',
                'string',
                'max:255',
                'regex:/^(?!.*(?:https?|ftp):\/\/)/',
                function($attribute, $value, $fail) {
                    if ($this->containsHtml($value)) {
                        $fail('Lời chúc không được chứa HTML hoặc script!');
                    }
                },
            ],
            'honeypot' => 'present|in:'
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
            'name.regex' => 'Tên phải chứa ít nhất một chữ cái (a-z hoặc A-Z)',
            'content.required' => 'Vui lòng nhập lời chúc của bạn!',
            'content.max' => 'Vui lòng nhập dưới 255 ký tự!',
            'content.regex' => 'Lời chúc không được chứa liên kết URL!', 
            'honeypot.in' => 'Honeypot field must be empty!',
        ];
    }

    /**
     * Check if the given value contains HTML tags.
     *
     * @param  string  $value
     * @return bool
     */
    private function containsHtml($value)
    {
        return $value !== strip_tags($value);
    }
}
