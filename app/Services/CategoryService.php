<?php

namespace App\Services;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Repositories\CategoryRepository;

class CategoryService {

    protected $repository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->repository = $categoryRepository;
    }

    /**
     * Get paginate category
     * 
     * @return void
     */
    public function getCategory()
    {
        return $this->repository->getPaginated(9);
    }

    /**
      * get all data category
      * @return void
      */

      public function getCategoryAll()
      {
         return $this->repository->getAll();
      }

    /**
     * Store category
     * 
     * @param StoreRequest $request
     * @return void
     */

    public function storeCatergory(StoreRequest $request)
    {
        $validated = $request->validated();

        $this->repository->store([
            'category' => $validated['category'],
        ]);
    }

    /**
     * update category
     * 
     * @param UpdateRequest $request
     * @param int $id
     * 
     * @return void
     */

    public function updateCategory(UpdateRequest $request, $id)
    {
        $validated = $request->validated();

        $this->repository->update($id, [
            'category' => $validated['category']
        ]);
    }


    /**
     * destroy categories
     * 
     * @param int $id
     * @return void
     */
    public function deleteCategory($id)
    {
        $this->repository->destroy($id);
    }
}