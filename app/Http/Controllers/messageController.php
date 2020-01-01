<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    
	public function message(){
		return view('message');
	}    
}
