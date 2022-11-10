<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Resume;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Stroage;


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
        //return $id;
        //return $data;
        return view('student-list',compact('data','id'));
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
    public function about_us()
    {
        return view('about-us');
    }

    //admin page
    
    public function admin_login()
    {
        return view('admin-login');
    }
    public function admin_profile()
        {
        if(session()->has('admin')){
            $data=Resume::all();
            return view('admin-profile',compact('data')); 
        }else{
            return redirect(route('admin_login'));
        }
            
        }
    public function admin_logout()
        {
        Session::flush();

        
        return redirect(route('index'));


        }

    public function admin_login_check(Request $r)
    {
        $data=DB::table('admins')->where('email',$r->email)->first();
        if($data){
            $admin_pass=$data->password;
            $pass_decode = password_verify($r->password, $admin_pass);
            if($pass_decode){
                session()->put('admin', $r->email);

                return redirect(route('admin_profile'));
            }else{
                return redirect(route('admin_login'))->with('msg','Please Enter Valid Password');
            }
        }else{
            return redirect(route('admin_login'))->with('msg','Please Enter Valid Email');
        }
        
    }



     public function upload_resume(Request $r)
        {

            $r->validate([
            
            "resume" => "required|mimes:pdf|max:10000"
            
        ]);

            $r->file('resume');
            $file = $r->file('resume');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('resume', $filename);
            $data=New Resume;
            $data->resume=$filename;

            $data->save();
            return redirect(route('index'));
        }
     public function download_pdf(Request $r,$file)
        {
            //return response()->download(url('resume/'."1668081875.pdf"));
            return response()->download(public_path('resume/'.$file));

        }
        public function delete_pdf(Request $r,$id)
        {
            $data=Resume::find($id);
            $data->delete();
            return redirect(route('admin_profile'));

        }
    
}
