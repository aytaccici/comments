<?php

namespace App\Services;

use App\Contracts\PostContract;
use App\Exceptions\PostNotFoundException;
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
     * @param int $perPage
     * @return mixed
     */
    public function paginate(int $perPage =20){
        return $this->postContract->paginate($perPage);
    }


    /**
     * @param int $perPage
     * @return mixed
     */
    public function getPostWithComments(int $id){

        $post =  $this->postContract->getPostWithComments($id);
        if (!$post){
            throw new PostNotFoundException();
        }
        return $post;
    }

}
