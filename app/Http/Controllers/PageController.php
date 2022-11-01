<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function help()
    {
        return view('help_page');
    }
    public function submit()
    {
        return view('under_construction');
    }
}
