<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $books = [];

        foreach($this->collection as $book){
            array_push($books, [
                'id'    => $book->id,
                'name'  => $book->name,
                'author'  => $book->author,
                'publisher' => $book->publisher,
                'published' => $book->published,
                'description' => $book->description,
                'synopsis' => $book->synopsis,
                'price' => $book->price,
                'pages' => $book->pages,
                'language' => $book->language,
                'photo' => $book->photo,
                'file' => $book->file,
            ]);
        }

        return [
            'meta' => [
                'status'  => 200,
            ],
            'data'  => $books,
        ];
    }
}
