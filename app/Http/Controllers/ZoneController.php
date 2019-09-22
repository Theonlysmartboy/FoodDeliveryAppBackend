<?php

namespace App\Http\Controllers;
use App\Zone;

use Illuminate\Http\Request;

class ZoneController extends Controller {

    public function index() {
        if (Session::has('adminSession')) {
            $zones = Zone::get();
            return view('admin.zone.index')->with(compact('zones'));
        } else {
            return redirect()->back()->with('flash_message_error', 'Access Denied');
        }
    }

}
