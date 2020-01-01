<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\job;
use App\blood;
use App\event;
use App\community;

class postControlController extends Controller
{ 
    public function __construct()
      {
        $this->middleware('auth:admin');
      }
      
    public function community(){
        $posts = DB::table('users')
            ->join('communities', 'users.id', '=', 'communities.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','communities.*','studentinformations.type')
            ->get();
    	return view('admin.manage-community',compact('posts'));
    }

    public function communitydelete($id)
      {
        
        $status = community::find($id);
        if (!is_null($status)) {
          $status->delete();
        }else {
          return redirect()->route('/backend/community');
        }
        session()->flash('success', 'Community status has deleted !!');
        return back();
      }

    public function event(){
        $posts = DB::table('users')
            ->join('events', 'users.id', '=', 'events.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','events.*','studentinformations.type')
            ->get();
    	return view('admin.manage-event',compact('posts'));
    }

    public function eventdelete($id)
      {
        
        $status = event::find($id);
        if (!is_null($status)) {
          $status->delete();
        }else {
          return redirect()->route('/backend/event');
        }
        session()->flash('success', 'Event status has deleted !!');
        return back();
      }


    public function job(){
        $posts = DB::table('users')
            ->join('jobs', 'users.id', '=', 'jobs.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','jobs.*','studentinformations.type')
            ->get();
    	return view('admin.manage-job',compact('posts'));
    }

     public function jobdelete($id)
      {
        
        $status = job::find($id);
        if (!is_null($status)) {
          $status->delete();
        }else {
          return redirect()->route('/backend/job');
        }
        session()->flash('success', 'Job status has deleted !!');
        return back();
      }



    public function blood(){
        $posts = DB::table('users')
            ->join('bloods', 'users.id', '=', 'bloods.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','bloods.*','studentinformations.type')
            ->get();
    	return view('admin.manage-blood',compact('posts'));
    }

    public function blooddelete($id)
      {
        
        $status = blood::find($id);
        if (!is_null($status)) {
          $status->delete();
        }else {
          return redirect()->route('/backend/blood');
        }
        session()->flash('success', 'Blood status has deleted !!');
        return back();
      }


}
