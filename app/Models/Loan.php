<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loan';

    public function detailLoan()
    {
        return $this->hasMany(DetailLoan::class, 'id_loan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
