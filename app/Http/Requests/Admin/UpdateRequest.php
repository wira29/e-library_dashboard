<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends BaseRequest
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
            'password' => 'confirmed',
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
            'password.confirmed' => 'Password tidak sesuai !',
        ];
    }
}
