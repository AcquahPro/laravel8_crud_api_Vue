<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    //
    public function getBooks(){
        //return response()->json(Book::all(), 200);

        return Book::all();
    }

    public function getBookById($id){
        $book = Book::find($id);
        if(is_null($book)){
            //return response()->json('message','book not found');
            return 'Not Found';
        }
        else{
            return $book;
        }
        

    }

    public function addbook(Request $request){

        $book = Book::create($request->all());

        return $book;
    }

    public function updateBook(Request $request, $id){
        $book = Book::find($id);
        if(is_null($book)){
            return 'notfound';
        }else{
            //$book->title = $request->input('title');
            $book->update($request->all());
        
            return $book;
        }
    }

    public function deleteBook($id){
        $book = Book::find($id);
        if(is_null($book)){
            return 'notfound';
        }
        else{

            return $book->delete();
        }

    }
}
 