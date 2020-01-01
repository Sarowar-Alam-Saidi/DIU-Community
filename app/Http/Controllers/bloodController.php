<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\blood;
use App\User;

class bloodController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function bloods(){

        $allBloodPost = DB::table('bloods')
            ->join('studentinformations', 'bloods.userID', '=', 'studentinformations.userID')
            ->join('users', 'bloods.userID', '=', 'users.id')
            ->select('bloods.*', 'studentinformations.type','studentinformations.department', 'users.name')
            ->orderBy('bloods.id','DESC')
            ->get();
        // dd($allCommunityPost);

    	return view('blood',compact('allBloodPost'));
    }

    public function bloodPost(Request $request){

    $blood = new blood();
    $blood->userID = Auth::user()->id;
    $blood->bloodGroup = $request->bloodGroup;
    $blood->description = $request->description;
    
    $blood->save();

    session()->flash('success', 'A New Post Added Successfully !!');
    return back();
    }



    public function delete($id)
      {
        
        $blood = blood::find($id);
        if (!is_null($blood)) {
          $blood->delete();
        }else {
          return redirect()->route('blood-delete');
        }
        session()->flash('success', 'Blood Status has deleted !!');
        return back();
      }



        public function Edit($id){

        $editblood= blood::find($id);
        if (!is_null($editblood)) {
          return view('edit-blood', compact('editblood'));
        }else {
          return back();
        }

        }


        public function update(Request $request, $id)
        {
            // dd($id);
          $update = blood::find($id);
          $update->bloodGroup = $request->bloodGroup;
          $update->description = $request->description;
          $update->save();

          session()->flash('success', 'Blood Status has updated successfully !!');
          return redirect()->route('bloods');

        }


}
