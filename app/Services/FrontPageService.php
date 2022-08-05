<?php 

namespace App\Services;

use App\Repositories\BookRepository;

class FrontPageService 
{
    protected $bookR;

    public function __construct(BookRepository $book)
    {
        $this->bookR = $book;
    }

    /**
     * count book
     * 
     * @return int
     */
    public function countBook()
    {
        return count($this->bookR->getAll());
    }

    /**
     * get new release book
     * 
     * @return array
     */
    public function newRelease()
    {
        return $this->bookR->newRelease();
    }

    /**
     * get most borrowed
     * 
     * @return array
     */
    public function mostBorrowed()
    {
        return $this->bookR->mostBorrowed();
    }
}