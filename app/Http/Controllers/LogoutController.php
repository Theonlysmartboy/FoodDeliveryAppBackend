<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LogoutController extends Controller {

    public function logout() {
        Session::flush();
        return redirect('/')->with('flash_message_success', 'Logged out Successfully');
    }

}
