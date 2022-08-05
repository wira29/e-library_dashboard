<?php

namespace App\Http\Controllers\Core;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Services\BookService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use App\Services\BookCategoryService;
use App\Services\CategoryService;

class BookController extends Controller
{
    private $service, $categoryService, $bookCategoryService;

    public function __construct(BookService $bookService, CategoryService $categoryService, BookCategoryService $bookCategoryService)
    {
        $this->service = $bookService;
        $this->categoryService = $categoryService;
        $this->bookCategoryService = $bookCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'book' => $this->service->getBook(),
        ];

        return view('back.book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'category' => $this->categoryService->getCategoryAll()
        ];
        return view('back.book.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $book = $this->service->storeBook($request);
        if (!$book) return redirect()->back()->withErrors('File tidak boleh kosong !');
        $this->bookCategoryService->storeBookCategory($request, $book);

        return redirect()->route('book.index')->with('success', 'Berhasil tambah buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'book' => $this->service->showBook($id),
            'category' => $this->categoryService->getCategoryAll(),
        ];
        return view('back.book.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Book $book)
    {
        $this->service->updateBook($request, $book);

        return redirect()->route('book.index')->with('success', 'Berhasil edit buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->destroy($id);

        return redirect()->back()->with('success', 'Berhasil menghapus buku !');
    }
}
