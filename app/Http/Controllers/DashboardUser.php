<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUser extends Controller
{

    public function __construct()
    {
    }
    /**
     * show index page for user
     */
    public function index()
    {
        return view('back.dashboardUser.index');
    }
}
