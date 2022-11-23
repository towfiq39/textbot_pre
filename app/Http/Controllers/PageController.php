<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resume;
use App\Models\Job;
use App\Models\Drive;
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
        $data=DB::table('users')->where('batch',$id)->where('department','TE')->get();
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
        if(session()->has('admin')){
           return redirect(route('admin_profile')); 
        }else{
            return view('admin-login');
        }
        
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


    public function admin_batch_list()
        {
            $data=DB::table('batches')->get();
            return view('admin-batch-list',compact('data'));

        }

    public function admin_student_list($batch)
        {
            $data=DB::table('users')->where('batch',$batch)->get();
        
            return view('admin-student-list',compact('data','batch'));

        }

        public function admin_edit_student($id)
        {
            $data=DB::table('users')->where('batch',$batch)->get();
        
            return view('admin-student-list',compact('data','batch'));

        }

        public function admin_delete_student($id)
        {
            $data=User::find($id);
            $data->delete();
            return redirect()->back();

        }

       

        public function admin_student_search(Request $r)
        {
            $data=DB::table('users')->where('roll_number','LIKE',"%{$r->roll}%")->get();

            if($data->count() == 0){
                return redirect(route('admin_batch_list'))->with('msg','No Student Found');  
            }else{
              return view('admin-search-student',compact('data'));
            }
            
            

        }

        public function jobs()
        {
            $data=job::all();
            return view('jobs',compact('data'));
            
            

        }
        public function job_detail($id)
                {
                    $data=Job::find($id);
                    //return $data;
                    return view('job-details',compact('data'));
                    
                    

                }

        public function upload_drive(Request $r)
            {
                 
                if (Auth::check()) {
                    $id=auth()->id();
                    $user=User::find($id);

                    $data=New Drive;
                        $data->user_name=$user->user_name;
                        $data->batch=$user->batch;
                        $data->drive_link=$r->drive_link;

                        $data->save();
                        return redirect()->back();
                }else{
                    return redirect(route('login'));
                }
                
             }

        public function post_job()
        {
           if (Auth::check()) {  
           return view('post-job');
            }else{
                    return redirect(route('login'));
                }
            
         }
         public function post_free_job(Request $r)
            {
                $id=auth()->id();
                $user=User::find($id);

                  $job_holder=$user->certificate_name; 
                  $data=New Job;
                  $data->job_holder=$job_holder;
                  $data->job_title=$r->job_title;
                  $data->job_description=$r->job_description;
                  $data->salary=$r->salary;
                  $data->company=$r->company;
                  $data->job_location=$r->job_location;
                  $data->job_type=$r->job_type;

              $data->save();
              return redirect(route('jobs'));
                
             }
        public function admin_drive_link_list()
        {
            $data=Drive::all();
            return view('admin-drive',compact('data'));
                
        }
        public function admin_job_list()
        {
            $data=Job::all();
            return view('admin-jobs',compact('data'));
                        
        }
        public function admin_drive_list($id)
        {
           $data=Drive::find($id);
            $data->delete();
            return redirect()->back();
                        
        }
        public function admin_job_post_list($id)
        {
           $data=Job::find($id);
            $data->delete();
            return redirect()->back();
                        
        }

    
}
