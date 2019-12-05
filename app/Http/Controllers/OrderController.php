<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Order;
use Session;
use Auth;
use DB;

class OrderController extends Controller
{
    public function indexAll(){
       if (Session::has('vendorSession')) {
           $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
                $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                    ->join('clients', 'orders.client', 'clients.id')
                    ->join('products', 'orders.product', 'products.id')
                    ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                    ->where(['seller' => $restaurant_id])->get();
        return view('vendor.orders.index')->with(compact('orders'));
       }
    }
    public function indexnew(){
        
    }
    public function indexcomplete(){
        
    }
    public function deliver(){
        
    }
    public function delete(){
        
    }
}
