<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookPageController extends Controller
{
    public function index()
    {
        return view('front.book.index');
    }

    /**
     * detail book
     * 
     * @param String $slug
     */
    public function detail(String $slug)
    {
        return view('front.book.detail');
    }
}
