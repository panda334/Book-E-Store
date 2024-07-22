<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user-interface.cart');

});


Route::get('/home' , [BookController::class , 'getAllBooksPaginate'])->name('booksPaginate');
Route::get('/home/{id}' , [BookController::class , 'getBookDetail'])->name('getBookDetail');



