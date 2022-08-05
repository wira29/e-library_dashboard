<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

class AdminRepository extends BaseRepository 
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * get admin all
     * 
     * @return mixed
     */
    public function getAll() : mixed
    {
        return $this->model->where('id_role', 1)->get();
    }
}