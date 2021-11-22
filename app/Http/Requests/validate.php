<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validate extends FormRequest
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
            'id' => 'required',
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'manager_name' => 'required',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'Mã đại lý không được trống',
            'name.required' => 'Tên đại lí không được để trống',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'address.required' => 'Địa chỉ không được để trống',
            'manager_name.required' => 'Tên người quản lí không được để trống',
            'status.required' => 'Trạng thái không được để trống',
        ];
    }
}
