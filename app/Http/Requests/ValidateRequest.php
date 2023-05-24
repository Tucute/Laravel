<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' =>   'required|max:100|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string',
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'Vui lòng nhập tên cho đúng',
            'age.numeric' => 'Tuổi không được nhập kí tự',
            'date.string' => 'Vui lòng nhập ngày tháng năm sinh',
            'phone.numeric' => 'Số điện thoại không được nhập kí tự',
            'web.string' => 'Vui lòng nhập web cho đúng',
            'address.string' => 'Vui lòng nhập địa chỉ cho đúng',
        ];
    }
}
