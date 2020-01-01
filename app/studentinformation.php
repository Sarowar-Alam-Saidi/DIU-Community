<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use File;
use DB;
use Auth;
use App\User;

class studentinformation extends Model
{
    public function profile(){
    	$profile = DB::table('studentinformations')->where('userID','=',Auth::User()->id)->get();

    	return $profile;
    }
}
