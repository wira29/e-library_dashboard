<?php

namespace App\Http\Requests\Book;

use App\Http\Requests\BaseRequest;

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
            'name'      => 'required',
            'author'    => 'required',
            'publisher' => 'required',
            'published' => 'required',
            'description' => 'required',
            'synopsis'  => 'required',
            'price'     => 'required',
            'pages'     => 'required',
            'language'     => 'required',
            'file'      => 'required|file|mimes:pdf',
            'category'  => 'required',
            'photo'     => 'mimes:jpg,png',
        ];
    }

    /**
     * custom messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'      => 'Judul buku tidak boleh kosong !',
            'author.required'    => 'Pengarang tidak boleh kosong !',
            'publisher.required' => 'Penerbit tidak boleh kosong !',
            'published.required' => 'Tanggal terbit tidak boleh kosong !',
            'description.required' => 'Deskripsi tidak boleh kosong !',
            'synopsis.required'  => 'Sinopsis tidak boleh kosong !',
            'price.required'     => 'Harga sewa tidak boleh kosong !',
            'pages.required'     => 'Halaman tidak boleh kosong !',
            'language.required'     => 'Bahasa tidak boleh kosong !',
            'file.required'      => 'File tidak boleh kosong !',
            'file.file'         => 'File tidak boleh kosong !',
            'file.mimes'         => 'File harus berupa pdf !',
            'category.required'  => 'Kategori tidak boleh kosong !',
            'photo.mimes'        => 'Photo harus berupa jpg atau png !',
        ];
    }
}
