<?php

namespace App\Services;

use App\Contracts\PostContract;
use App\Repositories\PostRepository;

class PostService
{

    /**
     * @var PostRepository
     */
    protected  $postContract;

    /**
     * @param PostContract $postContract
     */
    public function __construct(PostContract  $postContract)
    {
        $this->postContract = $postContract;
    }

    /**
     * @return mixed
     */
    public function paginate(int $perPage =20){
        return $this->postContract->paginate($perPage);
    }
}
