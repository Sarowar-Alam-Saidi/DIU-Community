<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\job;
use App\studentinformation;
use App\User;
use App\blood;
use App\event;
use App\community;

class userControlController extends Controller
{   
    public function __construct()
      {
        $this->middleware('auth:admin');
      }
      
    public function index(){
    	return view('admin.index');
    }

    public function teacher(){
    	$users = DB::table('users')
            ->join('studentinformations', 'users.id', '=', 'studentinformations.userID')
            ->where('studentinformations.type','teacher')
            ->select('users.id','users.name','users.email','studentinformations.department','studentinformations.SRid','studentinformations.blood')
            ->get();
    	return view('admin.manage-teacher',compact('users'));
    }

    public function teacherdelete($id)
      {
    
        if (!is_null($id)) {
            $data = DB::table('users')->where('id', '=', $id)->delete();
            $data = DB::table('studentinformations')->where('userID', '=', $id)->delete();
            $data = DB::table('communities')->where('userID', '=', $id)->delete();
            $data = DB::table('bloods')->where('userID', '=', $id)->delete();
            $data = DB::table('jobs')->where('userID', '=', $id)->delete();
            $data = DB::table('events')->where('userID', '=', $id)->delete();
        }else {
          return redirect()->route('/backend/teacher');
        }
        session()->flash('success', 'Job status has deleted !!');
        return back();
      }


    public function student(){
    	$users = DB::table('users')
            ->join('studentinformations', 'users.id', '=', 'studentinformations.userID')
            ->where('studentinformations.type','student')
            ->select('users.id','users.name','users.email','studentinformations.department','studentinformations.SRid','studentinformations.blood')
            ->get();
    	return view('admin.manage-student',compact('users'));
    }


    public function studentdelete($id)
      {
    
        if (!is_null($id)) {
            $data = DB::table('users')->where('id', '=', $id)->delete();
            $data = DB::table('studentinformations')->where('userID', '=', $id)->delete();
            $data = DB::table('communities')->where('userID', '=', $id)->delete();
            $data = DB::table('bloods')->where('userID', '=', $id)->delete();
            $data = DB::table('jobs')->where('userID', '=', $id)->delete();
            $data = DB::table('events')->where('userID', '=', $id)->delete();
        }else {
          return redirect()->route('/backend/student');
        }
        session()->flash('success', 'Job status has deleted !!');
        return back();
      }

}
