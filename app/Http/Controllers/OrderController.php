<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Order;
use Session;
use Auth;
use DB;

class OrderController extends Controller {

    public function indexAll() {
        if (Session::has('vendorSession')) {
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
            $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['seller' => $restaurant_id])->get();
            return view('vendor.orders.index')->with(compact('orders'));
        } elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                    ->join('clients', 'orders.client', 'clients.id')
                    ->join('products', 'orders.product', 'products.id')
                    ->join('restaurants', 'orders.seller', 'restaurants.id')
                    ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                    ->get();
            return view('admin.orders.index')->with(compact('orders'));
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access Denied!!');
        }
    }

    public function indexnew() {
        if (Session::has('vendorSession')) {
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
            $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['seller' => $restaurant_id])
                            ->where(['status' => '1'])->get();
            return view('vendor.orders.index')->with(compact('orders'));
        } elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->join('restaurants', 'orders.seller', 'restaurants.id')
                            ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['status' => '1'])->get();
            return view('admin.orders.index')->with(compact('orders'));
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access Denied!!');
        }
    }

    public function indexconfirmed() {
        if (Session::has('vendorSession')) {
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
            $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['seller' => $restaurant_id])
                            ->where(['status' => '2'])->get();
            return view('vendor.orders.index')->with(compact('orders'));
        } elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->join('restaurants', 'orders.seller', 'restaurants.id')
                            ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['status' => '2'])->get();
            return view('admin.orders.index')->with(compact('orders'));
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access Denied!!');
        }
    }

    public function indexcancelled() {
        if (Session::has('vendorSession')) {
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
            $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['seller' => $restaurant_id])
                            ->where(['status' => '0'])->get();
            return view('vendor.orders.index')->with(compact('orders'));
        } elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->join('restaurants', 'orders.seller', 'restaurants.id')
                            ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['status' => '0'])->get();
            return view('admin.orders.index')->with(compact('orders'));
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access Denied!!');
        }
    }

    public function indexdelivered() {
        if (Session::has('vendorSession')) {
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
            $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['seller' => $restaurant_id])
                            ->where(['status' => '4'])->get();
            return view('vendor.orders.index')->with(compact('orders'));
        } elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->join('restaurants', 'orders.seller', 'restaurants.id')
                            ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['status' => '4'])->get();
            return view('admin.orders.index')->with(compact('orders'));
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access Denied!!');
        }
    }

    public function indexdispatched() {
        if (Session::has('vendorSession')) {
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
            $restaurant_id = $current_restaurant->id;
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->select('orders.*', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['seller' => $restaurant_id])
                            ->where(['status' => '3'])->get();
            return view('vendor.orders.index')->with(compact('orders'));
        } elseif (Session::has('adminSession')) {
            $orders = DB::table('orders')
                            ->join('clients', 'orders.client', 'clients.id')
                            ->join('products', 'orders.product', 'products.id')
                            ->join('restaurants', 'orders.seller', 'restaurants.id')
                            ->select('orders.*', 'restaurants.r_name As seller', 'clients.name As client', 'products.name As product', 'clients.tel As telephone')
                            ->where(['status' => '3'])->get();
            return view('admin.orders.index')->with(compact('orders'));
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access Denied!!');
        }
    }

    public function deliver() {
        
    }

    public function delete() {
        
    }

}
