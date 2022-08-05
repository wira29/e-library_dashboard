<?php

namespace App\Repositories;

use App\Models\BookCategory;

class BookCategoryRepository extends BaseRepository
{
    public function __construct(BookCategory $model)
    {
        $this->model = $model;
    }
}