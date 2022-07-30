<?php

namespace App\Http\Controllers;

use App\Facades\ApiResponse;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Resources\CommentResource;
use App\Services\CommentService;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    protected  $commentService;

    public function __construct(CommentService  $commentService)
    {
        $this->commentService = $commentService;
    }


    /**
     * @OA\Post(
     *      path="/api/v1/comments",
     *      operationId="Save Comment",
     *      tags={"comments"},
     *      summary="Save A comment for post",
     *      description="You can log in to sytem using this end point",
     *         @OA\RequestBody(
     *         @OA\MediaType(
     *            mediaType="application/json",
     *            @OA\Schema(
     *               type="object",
     *              required = {"post_id", "content", "creted_by"},
     *              @OA\Property(property="post_id", type="integer", example="1"),
     *               @OA\Property(property="parent_id", type="integer", example="1"),
     *               @OA\Property(property="content", type="string" , example = "My content"),
     *               @OA\Property(property="creted_by", type="string", example = "Aytac Cici"),
     *            )
     *        )
     *    ),
     *   @OA\Response(
     *         response="201",
     *         description="Successfull",
     *     ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Response",
     *      ),
     *
     *     @OA\Response(
     *          response=500,
     *          description="Server Error",
     *      ),
     *     )
     */
    public function store(StoreCommentRequest $request)
    {
         $resource = $this->commentService->store($request->validated());
        return ApiResponse::success(new CommentResource($resource), Response::HTTP_CREATED);
    }
}
