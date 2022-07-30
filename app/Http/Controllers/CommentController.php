<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    protected  $commentService;

    public function __construct(CommentService  $commentService)
    {
        $this->commentService = $commentService;
    }

    public function store(StoreCommentRequest $request, $id)
    {
         $this->commentService->store($id, $request->validated());

        return response()->json([], Response::HTTP_CREATED);
    }
}
