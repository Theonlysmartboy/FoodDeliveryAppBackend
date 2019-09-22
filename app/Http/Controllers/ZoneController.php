<?php

namespace App\Http\Controllers;

use App\Zone;
use Session;
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

    public function create(Request $request) {
        if (Session::has('adminSession')) {
            if ($request->isMethod('post')) {
                
            } else {
                return view('admin.zone.create');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access Denied');
        }
    }
    

}
