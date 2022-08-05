<?php

namespace App\Services;

use App\Models\Book;
use Nette\Utils\Random;
use App\Helpers\UploadHelper;
use App\Traits\GenerateSlugTrait;
use App\Repositories\BookRepository;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;

class BookService
{

    use GenerateSlugTrait;
    
    private $repository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }

    /**
     * Get all book data from BookRepository
     *
     * 
     * @return void
     */

    public function getBook(): object
    {
        return $this->repository->getPaginated(8);
    }

    /**
     * Store book
     *
     * @param StoreRequest $request
     * 
     * @return object
     */
    public function storeBook(StoreRequest $request)
    {
        $validated = $request->validated();

        if(!$request->hasFile('file')) return false;

        $file = UploadHelper::handleUpload($request->file('file'), $this->repository->getFileDiskName());
        $photo = ($request->hasFile('photo')) ? UploadHelper::handleUpload($request->file('photo'), $this->repository->getPhotoDiskName()) : null;

        return $this->repository->store([
            'name'          => $validated['name'],
            'author'        => $validated['author'],
            'publisher'     => $validated['publisher'],
            'published'     => $validated['published'],
            'description'   => $validated['description'],
            'synopsis'      => $validated['synopsis'],
            'price'         => $validated['price'],
            'pages'         => $validated['pages'],
            'language'      => $validated['language'],
            'file'          => $file,
            'photo'         => $photo,
            'slug'          => GenerateSlugTrait::generateSlug($validated['name']),
        ]);
    }

    /**
     * Update Book
     *
     * @param UpdateRequest $request
     * @param Book $book
     * 
     * @return object
     */
    public function updateBook(UpdateRequest $request, Book $book)
    {
        $validated = $request->validated();
        $file = $book->file;
        $photo = $book->photo;

        if ($request->hasFile('file')){
            UploadHelper::handleRemove($book->file);
            $file = UploadHelper::handleUpload($request->file('file'), $this->repository->getFileDiskName());
        }
        if ($request->hasFile('photo')){
            UploadHelper::handleRemove($book->photo);
            $photo = UploadHelper::handleUpload($request->file('photo'), $this->repository->getPhotoDiskName());
        }

        return $this->repository->update($book->id, [
            'name'          => $validated['name'],
            'author'        => $validated['author'],
            'published'     => $validated['published'],
            'description'   => $validated['description'],
            'synopsis'      => $validated['synopsis'],
            'price'         => $validated['price'],
            'file'          => $file,
            'photo'         => $photo,
        ]);
    }

    /**
     * destroy book
     * 
     * @param int
     * @return void
     */
    public function destroy($id)
    {
        $book = $this->repository->show($id);
        if (!is_null($book->photo)) UploadHelper::handleRemove($book->photo);
        UploadHelper::handleRemove($book->file);

        $this->repository->destroy($id);
    }

    /**
     * get book detail
     * 
     * @param int $id
     * @return object
     */
    public function showBook($id)
    {
        return $this->repository->show($id);
    }

    
}
