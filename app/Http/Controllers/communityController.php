<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\community;
use App\User;
use App\studentinformation;

class communityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
    	$allCommunityPost = DB::table('communities')
            ->join('studentinformations', 'communities.userID', '=', 'studentinformations.userID')
            ->join('users', 'communities.userID', '=', 'users.id')
            ->select('communities.*', 'studentinformations.type','studentinformations.department', 'users.name')
            ->orderBy('communities.id','DESC')
            ->get();
        // dd($allCommunityPost);
        return view('welcome',compact('allCommunityPost'));
    }


     public function communityPost(Request $request){

	    $community = new community();
	    $community->userID = Auth::user()->id;
	    $community->statusType = $request->type;
	    $community->status = $request->status;
	    
	    $community->save();

	    session()->flash('success', 'A New Post Added Successfully !!');
	    return back();
	    }


    public function delete($id)
      {
        
        $status = community::find($id);
        if (!is_null($status)) {
          $status->delete();
        }else {
          return redirect()->route('status-delete');
        }
        session()->flash('success', 'Status has deleted !!');
        return back();
      }



        public function Edit($id){

        $editStatus= community::find($id);
        if (!is_null($editStatus)) {
          return view('edit-status', compact('editStatus'));
        }else {
          return back();
        }

        }

        public function comment($id){

        $comments= community::find($id);
        //  dd($comments);
        $allCommunityPost = DB::table('communities')
            ->join('studentinformations', 'communities.userID', '=', 'studentinformations.userID')
            ->join('users', 'communities.userID', '=', 'users.id')
            ->select('communities.*', 'studentinformations.type','studentinformations.department', 'users.name')
            ->where('communities.id',$id)
            ->orderBy('communities.id','DESC')
            ->get();


        if (!is_null($comments)) {
          return view('community-comment', compact('comments','allCommunityPost'));
        }else {
          return back();
        }

        }



        public function update(Request $request, $id)
        {

          $update = community::find($id);
          $update->statusType = $request->statusType;
          $update->status = $request->status;
          $update->save();

          session()->flash('success', 'Status has updated successfully !!');
          return redirect()->route('welcome');

        }


}
