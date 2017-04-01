<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BookRequest;

use App\Book;

class BookController extends Controller
{
    public function index()
    {
    	$books = Book::all();

    	return view('book.index',compact('books'));
    }

    public function create()
    {
    	return view('book.create');
    }

    public function store(BookRequest $request)
    {
    	Book::create([
    		'title' 		=> $request->input('title'),
    		'author' 		=> $request->input('author'),
    		'description' 	=> $request->input('description')
    	]);

    	return redirect('/book');
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('book.edit',compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title    = $request->input('title');
        $book->author   = $request->input('author');
        $book->description = $request->input('description');
        $book->update();

        return redirect('/book'); 
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/book');
    }

}
