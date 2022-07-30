<?php

namespace App\Services;

use App\Contracts\CommentContract;
use App\Contracts\PostContract;
use App\Exceptions\PostNotFoundException;
use App\Repositories\CommentRepository;
use App\Repositories\PostRepository;

class CommentService
{

    /**
     * @var CommentRepository
     */
    protected  $commentContract;

    /**
     * @var PostRepository
     */
    protected  $postContract;


    /**
     * @param CommentContract $commentContract
     */
    public function __construct(CommentContract  $commentContract, PostContract  $postContract)
    {
        $this->commentContract = $commentContract;
        $this->postContract = $postContract;
    }

    /**
     * @param int $perPage
     * @return mixed
     */
    public function paginate(int $perPage=20){
        return $this->commentContract->paginate($perPage);
    }

    /**
     * @param int $postId
     * @param array $attributes
     * @return mixed
     * @throws PostNotFoundException
     */
    public function store(int $postId, array  $attributes){

        $post =  $this->postContract->show($postId);

        if (!$post){
            throw new PostNotFoundException('Post not found');
        }
        $attributes['post_id'] = data_get($post, 'id');
        return $this->commentContract->store($attributes);
    }
}
