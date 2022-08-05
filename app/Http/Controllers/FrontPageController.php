<?php

namespace App\Http\Controllers;

use App\Services\FrontPageService;

class FrontPageController extends Controller
{
    protected $service;

    public function __construct(FrontPageService $service)
    {
        $this->service = $service;
    }

    /**
     * index page
     */
    public function index()
    {
        $data = [
            'bookTotal' => $this->service->countBook(),
            'bookNewRelease' => $this->service->newRelease(),
            'mostBorrowed'  => $this->service->mostBorrowed(),
        ];
        // dd($data);
        return view('front.home.index', $data);
    }
}
