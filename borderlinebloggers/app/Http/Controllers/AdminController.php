<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth'); 
    }
    public function user_list(){
        $users = User::all();
        return view('admin.list_user')->with('users',$users);
    }
    
}
