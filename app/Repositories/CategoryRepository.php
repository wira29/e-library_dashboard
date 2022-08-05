<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository {

    public function __construct(Category $category)
    {
        $this->model = $category;
    }
    
    /**
     * get category paginated
     * 
     * @param int $paginate
     * @return array
     */
    public function getPaginated($paginate)
    {
        return $this->model->paginate($paginate);
    }
}