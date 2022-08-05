<?php

namespace App\Services;

use App\Models\Book;
use App\Http\Requests\Book\StoreRequest;
use App\Repositories\BookCategoryRepository;

class BookCategoryService
{
    protected $repository;

    public function __construct(BookCategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getBookById($id)
    {
        return $this->repository->show($id);
    }

    /**
     * store book category
     * 
     * @param StoreRequest $request
     * @param Book $book
     * 
     * @return void
     */
    public function storeBookCategory(StoreRequest $request, Book $book)
    {
        $validated = $request->validated();
        foreach($validated['category'] as $c){
            $this->repository->store([
                'id_book' => $book->id,
                'id_category' => $c
            ]);
        }
    }
}