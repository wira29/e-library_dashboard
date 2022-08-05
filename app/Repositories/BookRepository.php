<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository extends BaseRepository {

    public function __construct(Book $book)
    {
        $this->model = $book;
    }

    /**
     * Handle get the specified data by id from models.
     *
     * @param int $id
     * 
     * @return mixed
     */

    public function show(int $id) : mixed
    {
        return $this->model->with('bookCategory')->where('id', $id)->first();
    }

    /**
     * get paginated book
     * 
     * @param int $paginate
     * @return object
     */
    public function getPaginated($paginate)
    {
        return $this->model->paginate($paginate);
    }

    /**
     * get new release book
     * 
     * @return array
     */
    public function newRelease()
    {
        return $this->model->latest()->limit(3)->get();
    }

    /**
     * get most borrowed book
     * 
     * @return array
     */
    public function mostBorrowed()
    {
        return $this->model->withCount('detailLoan')
        ->take(10)
        ->orderBy('detail_loan_count', 'desc')
        ->get();
    }
    /**
     * Get ebook file Diskname
     * 
     *
     * @return string
     */

    public function getFileDiskName(): string
    {
        return ('file_ebook');
    }

    /**
     * Get ebook photo Diskname
     * 
     *
     * @return string
     */

    public function getPhotoDiskName(): string
    {
        return ('photo_ebook');
    }
}