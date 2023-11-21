<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index' , compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index')->with('success','Book creation successful.');


    }

    public function show(Book $book)
    {
        $book = Book::find($book->id);
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $book = Book::find($book->id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book = Book::find($book->id);
        $book->update($request->all());
        return redirect()->route('books.index')
          ->with('success', 'Book update successful.');
    }

    public function destroy(Book $book)
    {
        $book = Book::find($book->id);
        $book->delete();
        return redirect()->route('books.index')
        ->with('success', 'Book deleted successfully');
    }
}
