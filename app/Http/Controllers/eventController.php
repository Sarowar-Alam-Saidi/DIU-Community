<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\event;
use App\User;
use Image;
use File;
class eventController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function events(){
         $allEventPost = DB::table('events')
            ->join('studentinformations', 'events.userID', '=', 'studentinformations.userID')
            ->join('users', 'events.userID', '=', 'users.id')
            ->select('events.*', 'studentinformations.type','studentinformations.department', 'users.name')
            ->orderBy('events.id','DESC')
            ->get();

    	return view('event',compact('allEventPost'));
    }


    public function eventPost(Request $request){

    $event = new event();
    $event->userID = Auth::user()->id;
    $event->time = $request->time;
    $event->eventType = $request->eventType;
    $event->description = $request->description;
    
    //insert images also
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('frontend/event/' .$img);
            Image::make($image)->save($location);
            $event->image = $img;
        }

    $event->save();

    session()->flash('success', 'A New Event Create Successfully !!');
    return back();
    }



    public function delete($id)
      {
        
        $event = event::find($id);
        if (!is_null($event)) {
          $event->delete();
        }else {
          return redirect()->route('event-delete');
        }
        session()->flash('success', 'Event Status has deleted !!');
        return back();
      }



        public function Edit($id){

        $editevent= event::find($id);
        if (!is_null($editevent)) {
          return view('edit-event', compact('editevent'));
        }else {
          return back();
        }

        }


        public function update(Request $request, $id)
        {
            // dd($id);
          $update = event::find($id);
          $update->time = $request->time;
          $update->eventType = $request->eventType;
          $update->description = $request->description;


          $update->save();

          session()->flash('success', 'Event Status has updated successfully !!');
          return redirect()->route('events');

        }



}
