<?php

namespace App\Http\Controllers;

use App\Models\Books;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function getHomePage()
    {
        return view('index');
    }
}
