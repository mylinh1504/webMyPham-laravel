<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:20|unique:users,name',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|max:20|min:6',
            'confirmpassword' => 'required|same:password'

        ];
    }
    public function messages():array 
    {
        return[
            'name.required'=>'vui lòng nhập tên đăng nhập',
            'name.unique'=>'Tên đã được dùng, vui lòng nhập tên khác',
            'email.required'=> 'Vui lòng nhập địa chỉ email',
            'email.email'=>"Vui lòng nhập đúng định dạng email",
            'email.unique'=>'Email đã tồn tại',
            'password.required'=> 'vui lòng nhập password',
            'password.min'=>'mật khẩu không được nhỏ hơn min',
            'password.max'=>'Mật khẩu không được lớn hơn 20 kí tự',
            'confirmpassword'=>'Mật khẩu không khớp'


        ];
    }

}
