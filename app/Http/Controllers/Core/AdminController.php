<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;

class AdminController extends Controller
{
    protected $service;

    public function __construct(AdminService $adminService)
    {
        $this->service = $adminService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'admin' => $this->service->getAdminAll()
        ];
        return view('back.admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $this->service->storeAdmin($request);

        return redirect(route('admin.index'))->with('success', 'berhasil menambahkan admin !');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $this->service->updateAdmin($request, $id);

        return redirect()->back()->with('success', 'berhasil mengedit admin !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->service->destroy($id)) return redirect()->back()->with('success', 'berhasil menghapus admin !');
        else return redirect()->back()->withErrors('minimal terdapat 1 admin !');
    }
}
