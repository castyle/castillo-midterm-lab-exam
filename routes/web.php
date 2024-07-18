<?php
use App\Http\Controllers\comment_replies;
use App\Http\Controllers\post_comments;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('comment_replies' , comment_repliesController::class  );
Route::resource('post_comments' , post_commentsController::class);