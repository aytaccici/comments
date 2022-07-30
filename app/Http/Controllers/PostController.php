<?php

namespace App\Http\Controllers;

use App\Facades\ApiResponse;
use App\Http\Resources\PostResource;
use App\Services\PostService;

class PostController extends Controller
{
    /**
     * @var PostService
     */
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = PostResource::collection($this->postService->paginate(config('app.pagination_value')));

        return ApiResponse::success($posts);
    }

    public function show($id)
    {
        $post =  new PostResource($this->postService->getPostWithComments($id));
        return ApiResponse::success($post);
    }
}
