<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\http\Request;

class BookController extends Controller
{
    public function index(Book $book_number)
    {
        $books = Book::all(); // Получаем все записи
        return view('book_page', compact('books'));
    }

    public function destroy(Book $book_number)
    {
        $bookTitle = $book->title; // Сохраняем название перед удалением
        $book->delete();
    }
}
