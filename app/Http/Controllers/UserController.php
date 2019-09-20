<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\User;
use App\Restaurant;

class UserController extends Controller
{
    public function index(){
        if (Session::has('adminSession')) {
            $users = User::get();
            $restaurants = Restaurant::get();
            return view('admin.user.index')->with(compact('users','restaurants'));
        } else {
            return redirect::back()->with('flash_message_error', 'Access denied!!');
        }
    }
}
