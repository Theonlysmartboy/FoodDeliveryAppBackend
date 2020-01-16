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
       }elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                    ->join('clients', 'orders.client', 'clients.id')
                    ->join('products', 'orders.product', 'products.id')
                    ->join('restaurants','orders.seller', 'restaurants.id')
                    ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                    ->get();
        return view('admin.orders.index')->with(compact('orders'));
            
        }
    }
    public function indexnew(){
        if (Session::has('vendorSession')) {
           $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
                $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                    ->join('clients', 'orders.client', 'clients.id')
                    ->join('products', 'orders.product', 'products.id')
                    ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                    ->where(['seller' => $restaurant_id])->get();
        return view('vendor.orders.index')->with(compact('orders'));
       }elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                    ->join('clients', 'orders.client', 'clients.id')
                    ->join('products', 'orders.product', 'products.id')
                    ->join('restaurants','orders.seller', 'restaurants.id')
                    ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                    ->where(['status'=>'1'])->get();
        return view('admin.orders.index')->with(compact('orders'));
            
        }
    }
    public function indexcomplete(){
        
    }
    public function deliver(){
        
    }
    public function delete(){
        
    }
}
