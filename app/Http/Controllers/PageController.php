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
    public function front_page()
    {
        return view('index');
    }
    public function batch_profile()
    {
        return view('profile-list');
    }
    public function slide_page()
    {
        return view('slide-page');
    }
    public function notes_page()
    {
        return view('notes');
    }
    public function recent_drives_page()
    {
        return view('recent-drive-cr');
    }
    public function under_construction()
    {
        return view('under_construction');
    }
    
}
