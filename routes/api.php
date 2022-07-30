<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');


Route::post('v1/comments/{postId}', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
