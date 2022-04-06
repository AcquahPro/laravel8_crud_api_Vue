<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//getsall books
Route::get('books',[BookController::class, 'getBooks']);

//getbookbyid
Route::get('book/{id}',[Bookcontroller::class, 'getBookById']);

//add book
Route::post('addbook', [BookController::class, 'addbook']);

//update book
Route::put('updateBook/{id}', [BookController::class, 'updateBook']);

//delete book
Route::delete('deleteBook/{id}', [BookController::class, 'deleteBook']);