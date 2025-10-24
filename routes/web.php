<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, 'show_main']);
Route::get('/{book_number}', [BookController::class, 'show_book']);
Route::delete('/{book_number}', [BookController::class, 'delete_book']);
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/auth', [AuthentificationController::class, 'show_authentification']);
Route::get('/auth/{user_name}', [UserController::class, 'show_user']);
Route::post('/new-book', [NewBookController::class, 'create_new_book']);
Route::put('/new-book', [NewBookController::class, 'update_new_book']);

