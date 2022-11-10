<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\storage;
use App\Models\user;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view_update_profile(){
        $user=Auth::user();
        return view('update-profile',compact('user'));
    }
    
    public function update_profile(Request $r){
        $user=Auth::user();
        $user_email=Auth::user()->email;
        
        $r->validate([
            'User_Name'=>'required',
            'Date_of_Birth'=>'required',
            'Blood_Group'=>'required',
            'Certificate_Name'=>'required',
            'Roll'=>'required',
            'Batch'=>'required',
            'Department'=>'required',
            'Institute'=>'required',
            'Phone'=>'required',
            'Status'=>'required',
        ]);
        if($r->file('Profile_Picure')){
            $file = $r->file('Profile_Picure');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('profile', $filename);
        }else{
            $filename=$user->profile_picture;
        }
        //$user_name_found=User::where('user_name',$r->user_name)->first();
        
           $update=User::where('email',$user_email)->update([
               'user_name'=>$r->User_Name,
               'dob'=>$r->Date_of_Birth,
               'blood_group'=>$r->Blood_Group,
               'certificate_name'=>strtoupper($r->Certificate_Name),
               'roll_number'=>$r->Roll,
               'batch'=>$r->Batch,
               'department'=>$r->Department,
               'institution'=>$r->Institute,
               'phone'=>$r->Phone,
               'facebook'=>$r->facebook_id,
               'linkedin'=>$r->linkedin_id,
               'status'=>$r->Status,
               'profile_picture'=>$filename,
           ]); 
        
        
        return redirect()->route('home');
        
            
           
          

        
        
    }
    public function index()
    {
        $user=Auth::user();
        return view('student_profile',compact('user'));
    }
   

    
    
}
