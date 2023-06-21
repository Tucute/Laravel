<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddformRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'inputName' =>   'required|max:100|string',
            'inputPrice' => 'required|numeric',
            'inputDescription' => 'required|string',
            'inputPromotionPrice' => 'required|min:10000|numeric',
            'inputUnit' => 'string',
            'inputNew' => 'numeric',
            'inputType' => 'numeric',
            'inputImage' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'inputName.string' => 'Vui lòng nhập tên cho đúng',
            'inputPrice.numeric' => 'Tuổi không được nhập kí tự',
            'inputDescription.string' => 'Vui lòng nhập mô tả',
            'inputPromotionPrice.numeric' => 'Khuyến mãi không được nhập kí tự',
            'inputUnit.string' => 'Vui lòng nhập đơn vị cho đúng',
            'inputNew.numeric' => 'Vui lòng nhập cho đung',
            'inputType.numeric' => 'Vui lòng nhập cho đung',
            'inputImage.require' => 'Vui lòng nhập hình ảnh',
        ];
    }
}
