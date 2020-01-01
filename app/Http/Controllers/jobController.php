<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\job;
use App\User;

class jobController extends Controller
{	

	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function jobs(){
        $allJobPost = DB::table('jobs')
            ->join('studentinformations', 'jobs.userID', '=', 'studentinformations.userID')
            ->join('users', 'jobs.userID', '=', 'users.id')
            ->select('jobs.*', 'studentinformations.type','studentinformations.department', 'users.name')
            ->orderBy('jobs.id','DESC')
            ->get();
        // dd($allCommunityPost);

    	return view('job',compact('allJobPost'));
    }


    public function jobPost(Request $request){

    $job = new job();
    $job->userID = Auth::user()->id;
    $job->jobType = $request->jobType;
    $job->description = $request->description;
    
    $job->save();

    session()->flash('success', 'A New Job Post Added Successfully !!');
    return back();
    }

    public function delete($id)
      {
        
        $job = job::find($id);
        if (!is_null($job)) {
          $job->delete();
        }else {
          return redirect()->route('job-delete');
        }
        session()->flash('success', 'Blood Status has deleted !!');
        return back();
      }



        public function Edit($id){

        $editjob= job::find($id);
        if (!is_null($editjob)) {
          return view('edit-job', compact('editjob'));
        }else {
          return back();
        }

        }


        public function update(Request $request, $id)
        {
            // dd($id);
          $update = job::find($id);
          $update->jobType = $request->jobType;
          $update->description = $request->description;
          $update->save();

          session()->flash('success', 'Job Status has updated successfully !!');
          return redirect()->route('jobs');

        }


}
