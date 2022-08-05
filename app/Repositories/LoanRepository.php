<?php 

namespace App\Repositories;

use App\Models\Loan;
use Illuminate\Support\Facades\DB;

class LoanRepository extends BaseRepository
{
    public function __construct(Loan $loan)
    {
        $this->model = $loan;
    }
}