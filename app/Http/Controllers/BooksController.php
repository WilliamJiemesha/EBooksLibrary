<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    function getBooksPage(){
        $booksInformation = DB::select('SELECT * FROM books');
        return view('books', ['booksInformation'=>$booksInformation]);
    }
}
