<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    function getBooksPage(){
        return view('books');
    }
}
