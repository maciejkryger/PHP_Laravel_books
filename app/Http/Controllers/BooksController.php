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
	$action=false;
    $title= request('title');
    $author=request('author');
    $publishing_house = request('publishing_house');
return view('book',compact('action','categories','title','author','publishing_house'));
}

public function save(){
	$categories= Category::all(); 

      	if(request('title')==null  ||  request('author')==null){
      		$action=true;
      		$title= request('title');
      		$author=request('author');
      		$publishing_house = request('publishing_house');
			return view('book',compact('action','categories','title','author','publishing_house'));
      	}

    $book = new Book;
    $book->title = request('title');
	$book->author = request('author');
	$book->publishing_house = request('publishing_house');
	$book->category = request('category');
    $book->save();

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