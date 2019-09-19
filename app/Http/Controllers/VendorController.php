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
                            $filename = mt_rand(000, 9999999999) . '.' . $extension;
                            $filepath = 'uploads/vendor/' . $filename;
                            //upload the image
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
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function update(Request $request, $id = null) {
        if (Session::has('adminSession')) {

            if ($request->isMethod('post')) {
                $data = $request->all();
                //upload image
                if ($request->hasFile('product_image')) {
                    $image_tmp = Input::file('product_image');
                    if ($image_tmp->isValid()) {
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename = rand(1, 999999) . '.' . $extension;
                        $logo_path = 'images/frontend_images/products/small/' . $filename;
                        //Resize images
                        Image::make($image_tmp)->resize(100, 100)->save($logo_path);
                        $restaurant = Restaurant::where(['id' => $id])->first();
                        //Get product image paths
                        $logo_path = 'images/frontend_images/products/small/';
                        //Delete the logo if exists
                        if (file_exists($logo_path . $restaurant->logo)) {
                            unlink($logo_path . $restaurant->logo);
                        }
                    }
                } else {
                    $filename = $data['current_image'];
                }
                if (!empty($data['product_desc'])) {
                    $description = $data['product_desc'];
                } else {
                    $description = '_';
                }
                Restaurant::where(['id' => $id])->update(['category_id' => $data['category_id'], 'product_name' => $data['product_name'],
                    'product_code' => $data['product_code'], 'product_color' => $data['product_color'], 'description' => $description,
                    'price' => $data['product_cost'], 'image' => $filename]);
                return redirect('/admin/view_products')->with('flash_message_success', 'Product updated Successfully');
            }
            $restaurantDetails = Restaurant::where(['id' => $id])->first();
            //Categfories drop down start
            $owner = User::where(['owner_id' => 0])->get();
            $categories_dropdown = "<option selected disabled>Select<option>";
            foreach ($categories as $cat) {
                $categories_dropdown .= "<option value='" . $cat->id . "'>" . $cat->name . "<option>";
                $sub_categories = Category::where(['parent_id' => $cat->id])->get();
                foreach ($sub_categories as $sub_cat) {
                    if ($sub_cat->id == $productDetails->category_id) {
                        $selected = "selected";
                    } else {
                        $selected = "";
                    }
                    $categories_dropdown .= "<option value='" . $sub_cat->id . "'" . $selected . ">&nbsp;--&nbsp;" . $sub_cat->name . "<option>";
                }
            }
            //Categories dropdown end

            return view('admin.products.edit_product')->with(compact('productDetails', 'categories_dropdown'));
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function delete($id = null) {
        if (Session::has('adminSession')) {
            if (!empty($id)) {
                //get the particular restaurant form the db
                $restaurant = Restaurant::where(['id' => $id])->first();
                //Get logo path
                $logo_path = 'uploads/vendor/';
                //Delete the image if it exists
                if (file_exists($logo_path . $restaurant->logo)) {
                    unlink($logo_path . $restaurant->logo);
                }
                Restaurant::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Vendor Deleted Successfully');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

}
