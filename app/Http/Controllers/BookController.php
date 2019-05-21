<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    private $book;

   function __construct(Book $book)
   {
   	 $this->book = $book;
   }


   public function create()
   {
      return view('books.create');
   }


   public function store (Request $request)
   {  
   	  $request->validate([
         'name'=>'required',
         'price'=>'required',
         'author'=>'required',
         'description'=>'min:50',	
   	  ]);

      $params = $request->all();
      $this->book->create($params);
      return redirect()->route('book.list');
   }

   public function getBooks()

      {
      	  $book = $this->book->all();
          $params = [
              'books'=> $book,
          ];
          return view('books.index', $params);
      }

   public function postBooks()
   {
      
   }      
}
