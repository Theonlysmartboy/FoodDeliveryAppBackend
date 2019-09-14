<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\User;
use App\Restaurant;

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
                $data = $request->all();
                $restaurant = new Restaurant;
                $restaurant->r_name = $data['r_name'];
                $restaurant->adress = $data['r_address'];
                $restaurant->telephone = $data['r_tel'];
                //check if a logo has been selected
                if (!empty($data['r_logo'])) {
                    
                    $restaurant->logo = $data['r_logo'];
                }
                $restaurant->owner_id = $data['r_owner'];
                $restaurant->save();
                return redirect('/admin/vendor')->with('flash_message_success', 'Vendor added Successfully');
            }
            //Services drop down start
            $owners = User::where(['role' => 0])->get();
            $owners_dropdown = "<option selected>Select</option>";
            foreach ($owners as $owner) {
                $owners_dropdown .= "<option class='bg-ready' value='" . $owner->id . "'>" . $owner->name . "</option>";
            }
//Services dropdown end
            return view('admin.vendor.create')->with(compact('owners_dropdown'));
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
