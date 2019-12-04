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
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
                $restaurant_id = $current_restaurant->id;
            $meals = Product::where(['category_id' => 1])->where(['restaurant_id' => $restaurant_id])->get();
            return view('vendor.products.index')->with(compact('meals',));
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

    public function drinkindex() {
        if (Session::has('vendorSession')) {
            $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
                $restaurant_id = $current_restaurant->id;
            $meals = Product::where(['category_id' => 2])->where(['restaurant_id' => $restaurant_id])->get();
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

    public function update(Request $request, $id = null) {
        if (Session::has('vendorSession')) {
            if ($request->isMethod('post')) {
                $data = $request->all();
                //upload image
                if ($request->hasFile('p_image')) {
                    $image_temp = $request->file('p_image');
                    if ($image_temp->isValid()) {
                        $extension = $image_temp->getClientOriginalExtension();
                        $filename = rand(000, 9999999999) . '.' . $extension;
                        $image_path = 'uploads/product/' . $filename;
                        //Resize images
                        Image::make($image_temp)->resize(150, 150)->save($image_path);
                        $product = Product::where(['id' => $id])->first();
                        //Get product image paths
                        $image_path = 'uploads/product/';
                        //Delete the image if exists
                        if (file_exists($image_path . $product->image)) {
                            unlink($image_path . $product->image);
                        }
                    }
                } else {
                    $filename = $data['current_image'];
                }
                $current_restaurant = Restaurant::where(['owner_id' => Auth::user()->id])->first();
                $restaurant_id = $current_restaurant->id;
                Product::where(['id' => $id])->update(['name' => $data['p_name'], 'descr' => $data['p_desc'],
                    'image' => $filename, 'category_id' => $data['p_category'], 'cost' => $data['p_cost'],
                    'restaurant_id' => $restaurant_id]);
                return redirect('/vendor/meals')->with('flash_message_success', 'Product updated Successfully');
            }$productDetails = Product::where(['id' => $id])->first();
            //Categfories drop down start
            $categories = Category::get();
            $categories_dropdown = "<option>Select</option>";
            foreach ($categories as $category) {
                if ($category->id == $productDetails->category_id) {
                    $categories_dropdown .= "<option value='" . $category->id . "' selected>" . $category->name . "</option>";
                } else {
                    $categories_dropdown .= "<option value='" . $category->id . "'>" . $category->name . "</option>";
                }
            }
            //Categories dropdown end
            return view('vendor.products.edit')->with(compact('productDetails', 'categories_dropdown'));
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }
    public function delete($id = null) {
        if (Session::has('vendorSession')) {
            if (!empty($id)) {
                //get the particular restaurant form the db
                $product = Product::where(['id' => $id])->first();
                //Get logo path
                $image_path = 'uploads/product/';
                //Delete the image if it exists
                if (file_exists($image_path . $product->image)) {
                    unlink($image_path . $product->image);
                }
                Product::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Product Deleted Successfully');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

}
