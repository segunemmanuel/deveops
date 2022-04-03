<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UpvoteController;
use App\Http\Resources\PostsResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('posts', [PostController::class, 'index']);
Route::get('/posts/{posts}', [PostController::class, 'show']);


Route::get('upvote', [UpvoteController::class, 'index']);

Route::post('/upvote/{post_id}/vote',[UpvoteController::class,'vote']);
Route::get('/upvote/{upvote}',[UpvoteController::class,'show']);

