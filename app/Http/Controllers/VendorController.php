<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller {

    public function dashboard() {
        if (Session::has('adminSession')) {

            return view('admin.vendor_dashboard');
        } else {
            return redirect('/')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }

}
