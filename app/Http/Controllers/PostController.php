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


    /**
     * @OA\Get(
     *      path="/api/v1/posts",
     *      operationId="posts",
     *      tags={"posts"},
     *      summary="get all posts",
     *      description="You can get all posts using this endpoint",
     *   @OA\Parameter(
     *    description="Current page. Default 1",
     *    in="query",
     *    name="page",
     *    required=false,
     *    example="1",
     *    @OA\Schema(
     *       type="string"
     *      )
     *    ),
     *    @OA\Response(
     *         response="200",
     *         description="success",
     *     ),
     *    @OA\Response(
     *          response=500,
     *          description="Server Errror ",
     *      )
     *     )
     */
    public function index()
    {
        $posts = PostResource::collection($this->postService->paginate(config('app.pagination_value')));

        return ApiResponse::success($posts);
    }

    /**
     *   @OA\Get(
     *      path="/api/v1/posts/{id}",
     *      operationId="get single post",
     *      tags={"posts"},
     *      summary="get single post",
     *      description="You can get a single post with Post Id",
     *    @OA\Parameter(
     *    description="Post Id",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example="1",
     *    @OA\Schema(
     *       type="string"
     *       )
     *    ),
     *
     *   @OA\Response(
     *      response=200,
     *      description="Success",
     *      ),
     *   @OA\Response(
     *      response=404,
     *      description="Post Not Found ",
     *      ),
     *    @OA\Response(
     *          response=500,
     *          description="Server Errror ",
     *      ),
     *     )
     */
    public function show($id)
    {
        $post = new PostResource($this->postService->getPostWithComments($id));
        return ApiResponse::success($post);
    }
}
