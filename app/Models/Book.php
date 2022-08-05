<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';
    protected $hidden = ['created_at', 'updated_at'];
    protected $guarded = ['id'];

    public function bookCategory()
    {
        return $this->hasMany(BookCategory::class, 'id_book');
    }

    public function detailLoan()
    {
        return $this->hasMany(DetailLoan::class, 'id_book');
    }
}
