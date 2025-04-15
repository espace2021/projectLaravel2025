<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
  
   public function index(Request $request) {

    $categories = Category::all();
        $products = Product::all();
        return view('template.index', compact('categories', 'products',));
}
   public function products()
   {
       return view('template.products');
   }
   public function furniture()
   {
       return view('template.furniture');
   }
   public function checkout()
   {
       return view('template.checkout');
   }
}
