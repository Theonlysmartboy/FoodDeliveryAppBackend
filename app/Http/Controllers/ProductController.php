<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\Category;
use Image;
use App\Restaurant;
use Auth;

class ProductController extends Controller {

    public function mealindex() {
        if (Session::has('vendorSession')) {
            $meals = Product::get();
            return view('vendor.products.index')->with(compact('meals',));
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function create(Request $request) {
        if (Session::has('vendorSession')) {
            if ($request->isMethod('post')) {
                //Get all post data
                $data = $request->all();
                $product = new Product;
                $product->name = $data['p_name'];
                $product->descr = $data['p_desc'];
                //check if an image has been selected
                if (!empty($data['p_image'])) {
                    if ($request->hasFile('p_image')) {
                        $image_temp = $request->file('p_image');
                        //echo $image_temp; die;
                        if ($image_temp->isValid()) {
                            $extension = $image_temp->getClientOriginalExtension();
                            $filename = mt_rand(000, 9999999999) . '.' . $extension;
                            $filepath = 'uploads/product/' . $filename;
                            //upload the image
                            Image::make($image_temp)->resize(100, 100)->save($filepath);
                            $product->image = $filename;
                        }
                    }
                }
                $product->category_id = $data['p_category'];
                $product->cost = $data['p_cost'];
                $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
                $product->restaurant_id = $current_restaurant->id;
                $product->save();
                return redirect()->back()->with('flash_message_success', 'Product successfuly added');
            } else {
                //Categories drop down start
                $categories = Category::get();
                $categories_dropdown = "<option selected>Select</option>";
                foreach ($categories as $category) {
                    $categories_dropdown .= "<option class='bg-ready' value='" . $category->id . "'>" . $category->name . "</option>";
                }
//Categories dropdown end
                return view('vendor.products.create')->with(compact('categories_dropdown'));
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

}
