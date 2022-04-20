<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data = [];

        $data['categories'] = Category::get();

        return view('frontend.index',compact('data'));
    }

    public function productDetails($slug){

        $data = [];

        $data['product'] = Product::where('slug',$slug)->first();

        return view('frontend.product_details',compact('data'));
    }

}
