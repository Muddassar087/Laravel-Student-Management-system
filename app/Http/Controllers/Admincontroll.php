<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminmodel;
use App\Models\student;
use App\Models\course;
use Session;

class Admincontroll extends Controller
{
    public function adminLogin(){
        return view('adminlogin');
    }

    public function adminloged(Request $request){
    	$admin = adminmodel::where('username',$request->username)->where('password',$request->password)->get()->toArray();
    	if ($admin) {
          $request->session()->put('admin_session',$request->username);
          return redirect("/dashbord");
        }
        else{
            session::flash('coc','Email and Password not match');
            return redirect('/login/')->withInput();
        }
    }

    public function logout(Request $req)
    {
        if($req->session()->get('admin_session') == 'admin'){
            $req->session()->forget('admin_session');
        }
        return redirect('/login');
    }
    
    public function dashbord(Request $request){
        $ts = student::all()->count();
        $tc = course::all()->count();
        $stdE = student::where('class','8')->count();
        $stdN = student::where('class', '9')->count();
        $stdT = student::where('class', '10')->count();
        if($request->session()->get('admin_session') == 'admin'){
            return view('dashbord', ['totalStd'=>$ts,'c'=>$tc,'eight'=>$stdE,'nine'=>$stdN,'ten'=>$stdT]);
        }
    	return redirect('/login');
    }
}