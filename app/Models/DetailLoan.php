<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailLoan extends Model
{
    use HasFactory;

    protected $table = 'details_loan';

    public function book()
    {
        return $this->belongsTo(Book::class, 'id_book');
    }

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'id_loan');
    }
}
