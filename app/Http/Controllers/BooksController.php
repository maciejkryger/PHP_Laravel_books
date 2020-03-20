<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;


class BooksController extends Controller{

public function show(){
	$books = Book::all();
	$categories=Category::all();
return view('books',compact('books','categories'));
}

public function add(){
	$categories=Category::all();
return view('book',compact('categories'));
}

public function store(){
 
      $book = new Book;

        $book->title = request('title');
		$book->author = request('author');
		$book->publishing_house = request('publishing_house');
		$book->category = request('category');
        $book->save();

	$categories= Category::all();
	$books = Book::all();
return view('books',compact('books','categories'));
}

public function remove($id){
	$book = Book::find($id);
	$book->delete();
	$categories = Category::all();
	$books = Book::all();
return view('books',compact('books','categories'));
}
} 