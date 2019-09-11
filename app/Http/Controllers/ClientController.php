<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller {

    public function index(Request $request) {
        if (Session::has('adminSession')) {
            
        } else {
            return redirect::back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function create(Request $request) {
        if (Session::has('adminSession')) {
            
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
