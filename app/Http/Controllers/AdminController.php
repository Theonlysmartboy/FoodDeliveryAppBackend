<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;

class AdminController extends Controller {

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->input();
            //Attempt to login
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'role' => '1'])) {
                //Load the admin dashboard
                Session::put('adminSession', $data['email']);
                return redirect('/admin/dashboard')->with('flash_message_success', 'Login Successfull');
            } else if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'role' => '0'])) {
                Session::put('vendorSession', $data['email']);
                return redirect('/vendor/dashboard')->with('flash_message_success', 'Login Successfull');
            } else {
                return redirect('/admin')->with('flash_message_error', 'Invalid Email Or password');
            }
        } else if (Session::has('adminSession')) {
            return redirect('/admin/dashboard')->with('flash_message_success', 'Login Successfull');
        } else if (Session::has('vendorSession')) {
            return redirect('/vendor/dashboard')->with('flash_message_success', 'Login Successfull');
        }
        return view('backend_login');
    }

    public function dashboard() {
        if (Session::has('adminSession')) {

            return view('admin.admin_dashboard');
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }

    public function settings() {
        if (Session::has('adminSession')) {
            return view('admin.settings');
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }

    public function chkPassword(Request $request) {
        if (Session::has('adminSession')) {
            $data = $request->all();
            $current_password = $data['current_pwd'];
            $check_password = User::where(['role' => '1'])->first();
            if (Hash::check($current_password, $check_password->password)) {
                echo "true";
                die;
            } else {
                echo "false";
                die;
            }
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }

    public function updatePassword(Request $request) {
        if (Session::has('adminSession')) {
            if ($request->isMethod('post')) {
                $data = $request->all();
                $check_password = User::where(['email' => Auth::user()->email])->first();
                $current_password = $data['current_pwd'];
                $email = Auth::user()->email;
                Hash::check($current_password, $check_password->password);
                $password = bcrypt($data['new_pwd']);
                User::where('email', $email)->update(['password' => $password]);
                Session::flush();
                return redirect('/')->with('flash_message_success', 'Password Updated Successfully');
            }
        } else {
            return redirect('/')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }

    public function updateProfile(Request $request) {
        if (Session::has('adminSession')) {
            if ($request->isMethod('post')) {
                $data = $request->all();
                $email = Auth::user()->email;
                User::where(['email' => $email])->update(['full_name' => $data['fname'], 'contact_adress' => $data['address'], 'telephone' => $data['tel']]);
                return redirect('/admin/dashboard')->with('flash_message_success', 'Profile Updated Successfully');
            } else {
                return view('admin.profile');
            }
        } else {
            return redirect('/')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }
    public function viewVendors(){
        if(Session::has('adminSession')){
            return view('/admin/vendor/index');
        }
    }

}
