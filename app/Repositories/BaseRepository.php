<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;

abstract class BaseRepository implements BaseInterface
{
    public $model;

    /**
     * Handle the Getall data event from models.
     *
     * 
     * @return mixed
     */

    public function getAll(): mixed
    {
        return $this->model->all();
    }

    /**
     * Handle store data event to models.
     *
     * 
     * @return mixed
     */

    public function store(array $data): mixed
    {
        return $this->model->create($data);
    }

    /**
     * Handle get the specified data by id from models.
     *
     * @param int $id
     * 
     * @return mixed
     */

    public function show(int $id): mixed
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Handle show method and update data instantly from models.
     *
     * @param string $id
     * @param array $data
     * 
     * @return mixed
     */

    public function update(string $id, array $data): mixed
    {
        return $this->show($id)->update($data);
    }

    /**
     * Handle show method and delete data instantly from models.
     *
     * @param string $id
     * 
     * @return mixed
     */

    public function destroy(string $id): mixed
    {
        return $this->show($id)->delete($id);
    }

    /**
     * Handle relationship from models.
     *
     * @param array $relationship
     * @param mixed $options
     * @param int $pagination
     * 
     * @return mixed
     */
}