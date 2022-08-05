<?php 

namespace App\Services;

use App\Repositories\DetailLoanRepository;

class DetailLoanService
{
    protected $repository;

    public function __construct(DetailLoanRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * get all detail loan
     * 
     * @return object
     */
    public function getDetailLoan()
    {
        return $this->repository->getAll();
    }
}