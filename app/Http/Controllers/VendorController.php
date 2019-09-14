<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Image;
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
                //echo"<pre>"; print_r($data); die;
                $restaurant = new Restaurant;
                $restaurant->r_name = $data['r_name'];
                $restaurant->adress = $data['r_address'];
                $restaurant->telephone = $data['r_tel'];
                //check if a logo has been selected
                if (!empty($data['r_logo'])) {
                    if ($request->hasFile('r_logo')) {
                        $image_temp = $request->file('r_logo');
                        //echo $image_temp; die;
                        if ($image_temp->isValid()) {
                            $extension = $image_temp->getClientOriginalExtension();
                            $filename = rand(000, 9999999999) . '.' . $extension;
                            $filepath = 'uploads/vendor/' . $filename;
                            Image::make($image_temp)->resize(100, 100)->save($filepath);
                            $restaurant->logo = $filename;
                        }
                    }
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
