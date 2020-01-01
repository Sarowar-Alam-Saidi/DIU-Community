<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\studentinformation;
use file;
use Image;

class profileController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function profile(){
        $info = DB::table('studentinformations')
                    ->where('userID', '=', Auth::user()->id)
                    ->get();

        $communityPost = DB::table('communities')
                    ->where('userID', '=', Auth::user()->id)
                    ->get();

        $jobPost = DB::table('jobs')
                    ->where('userID', '=', Auth::user()->id)
                    ->get();
                    
        $bloodNeedPost = DB::table('bloods')
                    ->where('userID', '=', Auth::user()->id)
                    ->get();

        $eventPost = DB::table('events')
                    ->where('userID', '=', Auth::user()->id)
                    ->get();
    	return view('profile',compact('info','communityPost','jobPost','bloodNeedPost','eventPost'));
    }

    public function profileEdit($id){
        $data = DB::table('studentinformations')
                    ->where('userID', '=', $id)
                    ->get();
    	return view('profile-update',compact('data'));
    }

    public function profileUpdate(Request $request){
        $data = 0;
        $val = DB::table('studentinformations')->get();
        foreach ($val as $key) {
            $data = $key->userID;
        }
        if (Auth::user()->id == $data) {
            $updatePro = DB::table('studentinformations')
            ->where('userID', Auth::user()->id)
            ->update(['type' => $request->type,'SRid' => $request->SRid, 'department'=>$request->department,'batch'=> $request->batch,'dob' =>$request->dob,'mobile'=>$request->mobile,'blood'=>$request->blood,'bloodStatus'=>$request->bloodStatus,'currentJob'=>$request->currentJob]);
        }
        else{

        $studentinformation = new studentinformation();
        $studentinformation->userID = Auth::user()->id;
        $studentinformation->type = $request->type;
        $studentinformation->SRid = $request->SRid;
        $studentinformation->department = $request->department;
        $studentinformation->batch = $request->batch;
        $studentinformation->dob = $request->dob;
        $studentinformation->mobile = $request->mobile;
        $studentinformation->blood = $request->blood;        

        //insert images also
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('frontend/user/' .$img);
            Image::make($image)->save($location);
            $studentinformation->image = $img;
        }

        $studentinformation->save();
    }
        session()->flash('success', 'Your Profile Update successfully !!');
        return back();

        }

}
