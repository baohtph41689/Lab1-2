<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/book-list',function(){
//     $books = DB::table('books')
//     ->orderBy('Price', 'DESC')
//     ->limit(8)->get();
//     return view('listBook',compact('books'));
// });


// Route::get('/book-list2',function(){
//     $bookss = DB::table('books')
//     ->orderBy('Price', 'ASC')
//     ->limit(8)->get();
//     return view('listBook2',compact('bookss'));
// });
Route::get('/', function() {
    $highestPriceBooks = DB::table('books')
        ->orderBy('Price', 'DESC')
        ->limit(8)
        ->get();

    $lowestPriceBooks = DB::table('books')
        ->orderBy('Price', 'ASC')
        ->limit(8)
        ->get();

    return view('listBook', compact('highestPriceBooks', 'lowestPriceBooks'));
});

Route::get('/listbook', function() {
    $listbook = DB::table('books') ->get();
    return view('list', compact('listbook'));
});


Route::get('/Get_book/{id}', function($id) {
    $booklist = DB::table('books')
       ->where('Category_id','=',$id)
        ->get();
    return view('list', compact('booklist'));
});


Route::get('/Getbook/{id}', function($id) {
    $book = DB::table('books')
       ->where('id','=',$id)
        ->first();
    return view('detailBook', compact('book'));
});
