<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\BaseRequest;

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
            'category' => 'required'
        ];
    }

    /**
     * Custom messages
     * 
     * @return array
     */

    public function messages()
    {
        return[
            'category.required' => "Kategori tidak boleh kosong !",
        ];
    }
}
