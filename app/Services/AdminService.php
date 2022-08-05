<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Repositories\AdminRepository;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;

class AdminService 
{
    protected $repository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->repository = $adminRepository;
    }

    /**
     * get all admin
     * 
     * @return array
     */
    public function getAdminAll()
    {
        return $this->repository->getAll();
    }

    /**
     * store admin
     * 
     * @param StoreRequest $request
     * @return void
     */
    public function storeAdmin(StoreRequest $request)
    {
        $validated = $request->validated();

        return $this->repository->store([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'id_role' => 1,
        ]);
    }

    /**
     * update admin
     * 
     * @param UpdateRequest $request
     * @param int $id
     * 
     * @return void
     */
    public function updateAdmin(UpdateRequest $request, $id)
    {
        $validated = $request->validated();
        if($validated['password']){
            return $this->repository->update($id, [
                'name' => $validated['name'],
                'password' => Hash::make($validated['password'])
            ]);
        }
        return $this->repository->update($id, [
            'name' => $validated['name']
        ]);
    }

    /**
     * destroy admin
     * 
     * @param int $id
     * @return boolean
     */
    public function destroy($id)
    {
        $total = count($this->getAdminAll());
        if($total > 1) {
            $this->repository->destroy($id);
            return true;
        } else {
            return false;
        }
    }
}