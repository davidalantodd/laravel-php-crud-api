<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Request;
use App\Models\Article;


// Show all articles
Route::get('/articles', [ArticleController::class, 'index']);

// Create a new article  
Route::post('/articles', [ArticleController::class, 'store']);

// Show, edit and delete a single article
Route::get('/articles/{article}', [ArticleController::class, 'show']);
Route::put('/articles/{article}', [ArticleController::class, 'update']);
Route::delete('/articles/{article}', [ArticleController::class, 'delete']);