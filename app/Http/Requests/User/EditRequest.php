<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;


class EditRequest extends FormRequest
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
          'txtEmail' => 'required|unique:users_manage,email|max:255',
        ];
    }
    public function message()
    {
      return [
        'txtEmail.required' => 'Vui lòng nhập Email',
        'txtEmail.unique' => 'Email đã tồn tại',
        'txtEmail.max' => 'Email không được dài quá 255 kí tự'
      ];
    }
}
