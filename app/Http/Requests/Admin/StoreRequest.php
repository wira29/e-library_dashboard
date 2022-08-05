<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'name'  => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    /**
     * custom message for admin store request
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'  => 'Nama tidak boleh kosong !',
            'email.required' => 'Email tidak boleh kosong !',
            'email.email' => 'Inputan harus berupa email !',
            'email.unique' => 'Email sudah digunakan !',
            'password.required' => 'Password tidak boleh kosong !',
            'password.confirmed' => 'Password tidak sesuai !',
            'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong !'
        ];
    }
}
