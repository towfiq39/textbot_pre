<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\user;
use Illuminate\Support\Facades\DB;

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
        $data=DB::table('batches')->get();
        return view('profile-list',compact('data'));
    }
    public function student_list($id)
    {
        $data=DB::table('users')->where('batch',$id)->get();
        //return $data;
        return view('student-list',compact('data'));
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
