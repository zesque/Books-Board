<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, 'show_main']);
Route::get('/book/{book_number}', [BookController::class, 'show_book']);
Route::delete('/book/{book_number}', [BookController::class, 'delete_book']);
Route::get('/author/{author_name}', [AuthorController::class, 'show_author']);
Route::get('/auth', [AuthentificationController::class, 'show_authentification']);
Route::get('/auth/{user_name}', [UserController::class, 'show_user']);
Route::get('/authors', [AuthorsController::class, 'show_authors']);
Route::post('/new-book', [NewBookController::class, 'create_new_book']);
Route::put('/new-book', [NewBookController::class, 'update_new_book']);

