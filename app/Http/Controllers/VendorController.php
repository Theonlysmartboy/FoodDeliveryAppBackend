<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class VendorController extends Controller {

    public function dashboard() {
        if (Session::has('vendorSession')) {

            return view('vendor.vendor_dashboard');
        } else {
            return redirect('/')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }

    public function index() {
        if (Session::has('adminSession')) {
            $vendors = DB::table('restaurants')
                    ->join('users', 'restaurants.owner_id', 'users.id')
                    ->select('restaurants.*', 'users.name As owner', 'users.email')
                    ->get();
            return view('admin.vendor.index')->with(compact('vendors'));
        } else {
            return redirect::back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function create(Request $request) {
        if (Session::has('adminSession')) {
            if ($request->isMethod('post')) {
                
            }return view('admin.vendor.create');
        } else {
            return redirect::back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function update(Request $request) {
        if (Session::has('adminSession')) {
            
        } else {
            return redirect::back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function delete(Request $request) {
        if (Session::has('adminSession')) {
            
        } else {
            return redirect::back()->with('flash_message_error', 'Access denied!!');
        }
    }

}
