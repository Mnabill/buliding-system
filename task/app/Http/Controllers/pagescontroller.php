<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){


        return view('pages.index');
    }

    public function month(){


        return view('pages.month');
    }
}
