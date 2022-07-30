<?php

namespace App\Repositories;

use App\Contracts\RepositoryContract;

abstract class BaseRepository implements  RepositoryContract
{
    /**
     * @var
     */
    protected $entity;

    /**
     * RepositoryAbstract constructor.
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }

    /**
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function resolveEntity()
    {

        if (! method_exists($this, 'entity')) {
            throw new \Exception('No entity defined.');
        }
        return app()->make($this->entity());
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->entity->get();
    }

    /**
     * @param $perPage
     *
     * @return mixed
     */
    public function paginate($perPage)
    {
        return $this->entity->paginate($perPage);
    }

    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function store(array $attributes)
    {
        return $this->entity->create($attributes);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return $this->entity->find($id);
    }

    /**
     * @param array $attributes
     * @param       $id
     *
     * @return mixed
     */
    public function update(array $attributes, $id)
    {
        return $this->show($id)->update($attributes);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->show($id)->delete($id);
    }
}
