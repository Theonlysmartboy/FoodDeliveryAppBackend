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
                $data = $request->all();
                $zone = new Zone();
                $zone->zone_name = $data['z_name'];
                $zone->cost = $data['z_cost'];
                $zone->drop_off = $data['d_point'];
                $zone->save();
                return redirect('/admin/zone')->with('flash_message_success', 'Zone added Successfully');
            } else {
                return view('admin.zone.create');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access Denied');
        }
    }

    public function delete($id = null) {
        if (Session::has('adminSession')) {
            if (!empty($id)) {
                Zone::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Zone Deleted Successfully');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

}
