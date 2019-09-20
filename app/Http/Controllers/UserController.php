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
    public function update(Request $request,$id=null){
        if(Session::has('adminSession')){
            if($request->isMethod('post')){
                $data = $request->all();
                $name= $data['u_name'];
                $email = $data['u_email'];
                $role = $data['u_role'];
                User::where(['id'=>$id])->update(['name'=>$name,'email'=>$email,'role'=>$role]);
                return redirect('/admin/user')->with('flash_message_success','User Updated Successfully');
            }
            $userDetails = User::where(['id' => $id])->first();                             
            return view('admin.user.edit')->with(compact('userDetails'));
        }
        return redirect()::back()->with('flash_message_error','Access denied');
    }
}
