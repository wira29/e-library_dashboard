<?php 

namespace App\Repositories;

use App\Models\DetailLoan;

class DetailLoanRepository extends BaseRepository
{
    public function __construct(DetailLoan $model)
    {
        $this->model = $model;
    }
}